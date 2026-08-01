<?php
require_once 'config/db.php';
$pageTitle = 'Manage Admin Users';
$currentPage = 'users';
include 'includes/header.php';
include 'includes/sidebar.php';

$success_msg = '';
$error_msg = '';
$current_user_id = $_SESSION['admin_id'] ?? 0;

// Handle Add User
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        $error_msg = "Email and Password are required.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM admin_users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        
        if ($res->num_rows > 0) {
            $error_msg = "A user with this email already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_stmt = $conn->prepare("INSERT INTO admin_users (email, password) VALUES (?, ?)");
            $insert_stmt->bind_param("ss", $email, $hashed_password);
            
            if ($insert_stmt->execute()) {
                $success_msg = "New admin user added successfully!";
            } else {
                $error_msg = "Error adding user: " . $conn->error;
            }
            $insert_stmt->close();
        }
        $stmt->close();
    }
}

// Handle Delete User
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $delete_id = $_POST['delete_id'];
    
    // Security: prevent deleting yourself
    if ($delete_id == $current_user_id) {
        $error_msg = "You cannot delete your own active account.";
    } else {
        $stmt = $conn->prepare("DELETE FROM admin_users WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        
        if ($stmt->execute()) {
            $success_msg = "User deleted successfully!";
        } else {
            $error_msg = "Error deleting user.";
        }
        $stmt->close();
    }
}
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <?php if(!empty($success_msg)): ?>
            <div style="background:#d4edda; color:#155724; padding:15px; border-radius:5px; margin-bottom:20px;">
                <?php echo $success_msg; ?>
            </div>
        <?php endif; ?>
        <?php if(!empty($error_msg)): ?>
            <div style="background:#f8d7da; color:#721c24; padding:15px; border-radius:5px; margin-bottom:20px;">
                <?php echo $error_msg; ?>
            </div>
        <?php endif; ?>

        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h1 style="margin:0;">Manage Users</h1>
                <p style="color:var(--text-muted); margin-top:5px;">Add or remove access to the admin dashboard.</p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
            
            <!-- Add User Form -->
            <div class="table-wrapper" style="padding: 25px; height: fit-content;">
                <h3 style="margin-bottom: 20px; font-size: 18px; color: var(--text-dark);">Add New Admin</h3>
                <form action="users.php" method="POST">
                    <input type="hidden" name="add_user" value="1">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Email Address <span style="color:#ef4444;">*</span></label>
                        <input type="email" name="email" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;" placeholder="admin@example.com">
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Password <span style="color:#ef4444;">*</span></label>
                        <input type="password" name="password" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;" placeholder="Enter secure password">
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 12px; display: flex; justify-content: center; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-user-plus"></i> Create User
                    </button>
                </form>
            </div>

            <!-- Users Table -->
            <div class="table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Email Address</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $users = $conn->query("SELECT id, email, created_at FROM admin_users ORDER BY created_at DESC");
                        
                        if ($users->num_rows > 0) {
                            while($row = $users->fetch_assoc()) {
                                $is_current = ($row['id'] == $current_user_id);
                                ?>
                                <tr>
                                    <td>
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <div style="width: 35px; height: 35px; border-radius: 50%; background: var(--bg-hover); display: flex; align-items: center; justify-content: center; color: var(--primary-color);">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 500;"><?php echo htmlspecialchars($row['email']); ?></div>
                                                <?php if($is_current): ?>
                                                    <span style="font-size: 11px; background: #e0e7ff; color: #4338ca; padding: 2px 6px; border-radius: 4px;">You</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                                    <td><span class="status-badge status-active">Active</span></td>
                                    <td>
                                        <?php if(!$is_current): ?>
                                        <form action="users.php" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user? This cannot be undone.');">
                                            <input type="hidden" name="delete_user" value="1">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="action-btn delete-btn" title="Delete User">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                        <?php else: ?>
                                            <button class="action-btn" style="opacity: 0.5; cursor: not-allowed;" title="Cannot delete yourself">
                                                <i class="fa-solid fa-lock"></i>
                                            </button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='4' style='text-align:center;'>No users found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
