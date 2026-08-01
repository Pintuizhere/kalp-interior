<?php
require_once 'config/db.php';
$pageTitle = 'My Profile';
$currentPage = 'profile';
include 'includes/header.php';
include 'includes/sidebar.php';

$success_msg = '';
$error_msg = '';
$current_user_id = $_SESSION['admin_id'] ?? 0;
$upload_dir = '../uploads/profiles/';

// Handle Profile Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    $email = trim($_POST['email']);
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    if (empty($email)) {
        $error_msg = "Email address cannot be empty.";
    } else {
        // Check if email already exists for ANOTHER user
        $check_stmt = $conn->prepare("SELECT id FROM admin_users WHERE email = ? AND id != ?");
        $check_stmt->bind_param("si", $email, $current_user_id);
        $check_stmt->execute();
        $res = $check_stmt->get_result();
        
        if ($res->num_rows > 0) {
            $error_msg = "This email address is already in use by another account.";
        } else {
            $profile_image = null;
            $update_image = false;

            // Handle Image Upload
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] > 0) {
                if ($_FILES['profile_image']['error'] == 0) {
                    $file = $_FILES['profile_image'];
                    $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                    $allowed_exts = ['jpg', 'jpeg', 'png', 'webp'];
                    
                    if (in_array($file_extension, $allowed_exts)) {
                        $new_file_name = 'profile_' . $current_user_id . '_' . time() . '.' . $file_extension;
                        $target_file = $upload_dir . $new_file_name;
                        
                        if (move_uploaded_file($file['tmp_name'], $target_file)) {
                            $profile_image = $new_file_name;
                            $update_image = true;
                        } else {
                            $error_msg = "Failed to move uploaded file. Check directory permissions.";
                        }
                    } else {
                        $error_msg = "Invalid image format. Supported formats: JPG, PNG, WEBP.";
                    }
                } else {
                    $error_msg = "Upload error code: " . $_FILES['profile_image']['error'];
                }
            }

            if (empty($error_msg)) {
                // Determine which fields to update
                if (!empty($new_password)) {
                    if ($new_password !== $confirm_password) {
                        $error_msg = "New passwords do not match.";
                    } else {
                        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                        if ($update_image) {
                            $stmt = $conn->prepare("UPDATE admin_users SET email = ?, password = ?, profile_image = ? WHERE id = ?");
                            $stmt->bind_param("sssi", $email, $hashed_password, $profile_image, $current_user_id);
                        } else {
                            $stmt = $conn->prepare("UPDATE admin_users SET email = ?, password = ? WHERE id = ?");
                            $stmt->bind_param("ssi", $email, $hashed_password, $current_user_id);
                        }
                    }
                } else {
                    if ($update_image) {
                        $stmt = $conn->prepare("UPDATE admin_users SET email = ?, profile_image = ? WHERE id = ?");
                        $stmt->bind_param("ssi", $email, $profile_image, $current_user_id);
                    } else {
                        $stmt = $conn->prepare("UPDATE admin_users SET email = ? WHERE id = ?");
                        $stmt->bind_param("si", $email, $current_user_id);
                    }
                }

                if (empty($error_msg) && isset($stmt)) {
                    if ($stmt->execute()) {
                        $success_msg = "Profile updated successfully!";
                        $_SESSION['admin_email'] = $email;
                    } else {
                        $error_msg = "Error updating profile.";
                    }
                    $stmt->close();
                }
            }
        }
        $check_stmt->close();
    }
}

// Fetch current user details
$user_email = '';
$user_image = null;
$stmt = $conn->prepare("SELECT email, profile_image FROM admin_users WHERE id = ?");
$stmt->bind_param("i", $current_user_id);
$stmt->execute();
$res = $stmt->get_result();
if ($row = $res->fetch_assoc()) {
    $user_email = $row['email'];
    $user_image = $row['profile_image'];
}
$stmt->close();

?>

<style>
    .profile-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        border: 1px solid var(--border-color);
        padding: 40px;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .profile-avatar-wrapper {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto 20px auto;
    }

    .profile-avatar-container {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border: 4px solid #fff;
        background: var(--bg-hover);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .profile-avatar-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .profile-avatar-icon {
        font-size: 60px;
        color: var(--primary-color);
        opacity: 0.8;
    }
    
    .profile-upload-btn {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 35px;
        height: 35px;
        background: var(--accent-color);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        transition: transform 0.3s;
    }
    
    .profile-upload-btn:hover {
        transform: scale(1.1);
    }
    
    .file-input {
        display: none;
    }
</style>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <?php if(!empty($success_msg)): ?>
            <div style="background:#d4edda; color:#155724; padding:15px; border-radius:8px; margin-bottom:20px; border-left: 4px solid #10b981; display:flex; align-items:center; gap:10px;">
                <i class="fa-solid fa-circle-check"></i> <?php echo $success_msg; ?>
            </div>
        <?php endif; ?>
        <?php if(!empty($error_msg)): ?>
            <div style="background:#f8d7da; color:#721c24; padding:15px; border-radius:8px; margin-bottom:20px; border-left: 4px solid #ef4444; display:flex; align-items:center; gap:10px;">
                <i class="fa-solid fa-circle-exclamation"></i> <?php echo $error_msg; ?>
            </div>
        <?php endif; ?>

        <div class="page-header" style="margin-bottom: 30px;">
            <h1 style="margin:0; font-size: 28px; color: var(--text-dark);">My Profile</h1>
            <p style="color:var(--text-muted); margin-top:5px; font-size: 14px;">Manage your personal account settings and security.</p>
        </div>

        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="update_profile" value="1">
            
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                
                <!-- Left Column: Profile Card -->
                <div>
                    <div class="profile-card">
                        <div class="profile-avatar-wrapper">
                            <div class="profile-avatar-container">
                                <?php if ($user_image): ?>
                                    <img id="preview-image" src="<?php echo $upload_dir . htmlspecialchars($user_image); ?>" alt="Profile" class="profile-avatar-img">
                                <?php else: ?>
                                    <img id="preview-image" src="" alt="Profile" class="profile-avatar-img" style="display:none;">
                                    <i id="preview-icon" class="fa-solid fa-user-astronaut profile-avatar-icon"></i>
                                <?php endif; ?>
                            </div>
                            
                            <label for="profile_image" class="profile-upload-btn" title="Upload Profile Picture">
                                <i class="fa-solid fa-camera"></i>
                            </label>
                            <input type="file" id="profile_image" name="profile_image" class="file-input" accept="image/png, image/jpeg, image/webp" onchange="previewFile()">
                        </div>
                        
                        <h2 style="margin: 0; font-size: 22px; color: var(--text-dark); font-weight: 600;">Admin User</h2>
                        <p style="color: var(--text-muted); margin-top: 5px; font-size: 14px;">
                            <span style="display:inline-block; width:8px; height:8px; background:#10b981; border-radius:50%; margin-right:5px;"></span>
                            Active Session
                        </p>
                        
                        <div style="margin-top: 30px; width: 100%; text-align: left; background: #f9f9f9; padding: 15px; border-radius: 8px;">
                            <p style="margin:0; font-size: 12px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Registered Email</p>
                            <p style="margin: 5px 0 0 0; font-weight: 500; color: var(--text-dark); word-break: break-all;"><?php echo htmlspecialchars($user_email); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Edit Form -->
                <div>
                    <div class="table-wrapper" style="padding: 35px;">
                        
                        <h3 style="margin-bottom: 25px; color: var(--text-dark); border-bottom: 2px solid var(--bg-hover); padding-bottom: 12px; font-size: 18px; display:flex; align-items:center; gap:10px;">
                            <i class="fa-regular fa-envelope" style="color: var(--primary-color);"></i> Account Details
                        </h3>
                        
                        <div class="form-group" style="margin-bottom: 35px;">
                            <label style="display:block; margin-bottom:8px; font-weight:500; color: var(--text-dark);">Email Address <span style="color:#ef4444;">*</span></label>
                            <input type="email" name="email" value="<?php echo htmlspecialchars($user_email); ?>" required style="width:100%; padding:12px 15px; border:1px solid var(--border-color); border-radius:8px; background: #f9f9f9; transition: border 0.3s; font-size: 14px;" onfocus="this.style.borderColor='var(--primary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                        </div>

                        <h3 style="margin-top: 20px; margin-bottom: 15px; color: var(--text-dark); border-bottom: 2px solid var(--bg-hover); padding-bottom: 12px; font-size: 18px; display:flex; align-items:center; gap:10px;">
                            <i class="fa-solid fa-lock" style="color: var(--primary-color);"></i> Security
                        </h3>
                        <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 25px; padding: 10px 15px; background: var(--bg-hover); border-radius: 6px;">
                            <i class="fa-solid fa-circle-info" style="margin-right: 5px;"></i> Leave these fields blank if you do not want to change your password.
                        </p>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label style="display:block; margin-bottom:8px; font-weight:500; color: var(--text-dark);">New Password</label>
                            <input type="password" name="new_password" style="width:100%; padding:12px 15px; border:1px solid var(--border-color); border-radius:8px; font-size: 14px; transition: border 0.3s;" placeholder="••••••••" onfocus="this.style.borderColor='var(--primary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                        </div>

                        <div class="form-group" style="margin-bottom: 40px;">
                            <label style="display:block; margin-bottom:8px; font-weight:500; color: var(--text-dark);">Confirm New Password</label>
                            <input type="password" name="confirm_password" style="width:100%; padding:12px 15px; border:1px solid var(--border-color); border-radius:8px; font-size: 14px; transition: border 0.3s;" placeholder="••••••••" onfocus="this.style.borderColor='var(--primary-color)'" onblur="this.style.borderColor='var(--border-color)'">
                        </div>

                        <div style="display: flex; justify-content: flex-end;">
                            <button type="submit" class="btn-primary" style="padding: 12px 30px; font-size: 15px; font-weight: 600; border-radius: 8px; display: flex; align-items: center; gap: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                                <i class="fa-solid fa-cloud-arrow-up"></i> Save Changes
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>

<script>
function previewFile() {
    const previewImage = document.getElementById('preview-image');
    const previewIcon = document.getElementById('preview-icon');
    const fileInput = document.getElementById('profile_image');
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.addEventListener("load", function () {
        previewImage.src = reader.result;
        previewImage.style.display = 'block';
        if (previewIcon) {
            previewIcon.style.display = 'none';
        }
        
        // Auto-submit the form so the user doesn't have to click save manually for the image
        // We will add a small loading indication
        document.querySelector('.profile-upload-btn').innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
        fileInput.closest('form').submit();
        
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>

<?php include 'includes/footer.php'; ?>
