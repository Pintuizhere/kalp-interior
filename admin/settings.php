<?php
require_once 'config/db.php';
$pageTitle = 'Global Settings';
$currentPage = 'settings';
include 'includes/header.php';
include 'includes/sidebar.php';

$success_msg = '';
$error_msg = '';

// Handle Save Settings
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_settings'])) {
    if (isset($_POST['settings']) && is_array($_POST['settings'])) {
        $stmt = $conn->prepare("UPDATE site_settings SET setting_value = ? WHERE setting_key = ?");
        
        $success = true;
        foreach ($_POST['settings'] as $key => $value) {
            $stmt->bind_param("ss", $value, $key);
            if (!$stmt->execute()) {
                $success = false;
            }
        }
        $stmt->close();
        
        if ($success) {
            $success_msg = "Global settings updated successfully!";
        } else {
            $error_msg = "Error updating settings. Please try again.";
        }
    }
}

// Fetch current settings
$settings = [];
$res = $conn->query("SELECT setting_key, setting_value FROM site_settings");
if ($res) {
    while($row = $res->fetch_assoc()) {
        $settings[$row['setting_key']] = $row['setting_value'];
    }
}

// Helper to safely get value
function val($key, $data) {
    return isset($data[$key]) ? htmlspecialchars($data[$key]) : '';
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

        <div class="page-header" style="margin-bottom: 30px;">
            <h1 style="margin:0;">Global Settings</h1>
            <p style="color:var(--text-muted); margin-top:5px;">Manage website contact information and global variables.</p>
        </div>

        <div class="table-wrapper" style="padding: 30px; max-width: 800px;">
            <form action="settings.php" method="POST">
                <input type="hidden" name="save_settings" value="1">
                
                <h3 style="margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">General Information</h3>
                
                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Website Name</label>
                    <input type="text" name="settings[site_name]" value="<?php echo val('site_name', $settings); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>

                <h3 style="margin-top: 40px; margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Contact Details</h3>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Primary Email Address</label>
                    <input type="email" name="settings[contact_email]" value="<?php echo val('contact_email', $settings); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>
                
                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Phone Number</label>
                    <input type="text" name="settings[contact_phone]" value="<?php echo val('contact_phone', $settings); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Office Address</label>
                    <textarea name="settings[contact_address]" rows="3" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px; font-family:inherit;"><?php echo val('contact_address', $settings); ?></textarea>
                </div>

                <h3 style="margin-top: 40px; margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Social Media Links</h3>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Facebook URL</label>
                    <input type="url" name="settings[social_facebook]" value="<?php echo val('social_facebook', $settings); ?>" style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Instagram URL</label>
                    <input type="url" name="settings[social_instagram]" value="<?php echo val('social_instagram', $settings); ?>" style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>
                
                <div class="form-group" style="margin-bottom: 30px;">
                    <label style="display:block; margin-bottom:8px; font-weight:500;">Twitter/X URL</label>
                    <input type="url" name="settings[social_twitter]" value="<?php echo val('social_twitter', $settings); ?>" style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                </div>

                <button type="submit" class="btn-primary" style="padding: 12px 30px; font-size: 16px;">
                    <i class="fa-solid fa-floppy-disk"></i> Save Settings
                </button>
            </form>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
