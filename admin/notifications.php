<?php
require_once 'config/db.php';
$pageTitle = 'Notifications';
$currentPage = 'notifications';
include 'includes/header.php';
include 'includes/sidebar.php';

$success_msg = '';

// Handle Clear Notifications
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['clear_all'])) {
    $conn->query("DELETE FROM notifications");
    $success_msg = "All notifications have been cleared.";
}

// Handle Mark as Read
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mark_read'])) {
    $conn->query("UPDATE notifications SET is_read = 1");
    $success_msg = "All notifications marked as read.";
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

        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h1 style="margin:0;">Notifications</h1>
                <p style="color:var(--text-muted); margin-top:5px;">System alerts and recent activities.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <form action="notifications.php" method="POST">
                    <input type="hidden" name="mark_read" value="1">
                    <button type="submit" class="btn" style="background-color: var(--bg-white); border: 1px solid var(--border-color); padding: 8px 15px; border-radius: 5px;">
                        <i class="fa-solid fa-check-double"></i> Mark All Read
                    </button>
                </form>
                <form action="notifications.php" method="POST" onsubmit="return confirm('Are you sure you want to clear all notifications?');">
                    <input type="hidden" name="clear_all" value="1">
                    <button type="submit" class="btn" style="background-color: #ef4444; color: white; border: none; padding: 8px 15px; border-radius: 5px;">
                        <i class="fa-solid fa-trash"></i> Clear All
                    </button>
                </form>
            </div>
        </div>

        <div class="table-wrapper" style="padding: 0;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                <?php
                $res = $conn->query("SELECT * FROM notifications ORDER BY created_at DESC");
                if ($res->num_rows > 0) {
                    while($row = $res->fetch_assoc()) {
                        $bg = $row['is_read'] ? 'var(--bg-white)' : 'var(--bg-hover)';
                        $icon = 'fa-bell';
                        $iconColor = 'var(--text-muted)';
                        
                        if ($row['type'] == 'success') {
                            $icon = 'fa-circle-check';
                            $iconColor = '#10b981';
                        } elseif ($row['type'] == 'warning') {
                            $icon = 'fa-triangle-exclamation';
                            $iconColor = '#f59e0b';
                        } elseif ($row['type'] == 'error') {
                            $icon = 'fa-circle-xmark';
                            $iconColor = '#ef4444';
                        }
                        
                        ?>
                        <li style="padding: 20px 30px; border-bottom: 1px solid var(--border-color); background-color: <?php echo $bg; ?>; display: flex; align-items: flex-start; gap: 20px;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--bg-light); display: flex; align-items: center; justify-content: center; color: <?php echo $iconColor; ?>; font-size: 18px; flex-shrink: 0;">
                                <i class="fa-solid <?php echo $icon; ?>"></i>
                            </div>
                            <div style="flex-grow: 1;">
                                <p style="margin: 0; margin-bottom: 5px; font-weight: <?php echo $row['is_read'] ? '400' : '600'; ?>; color: var(--text-dark);">
                                    <?php echo htmlspecialchars($row['message']); ?>
                                </p>
                                <span style="font-size: 12px; color: var(--text-muted);">
                                    <i class="fa-regular fa-clock" style="margin-right: 5px;"></i>
                                    <?php echo date('M d, Y g:i A', strtotime($row['created_at'])); ?>
                                </span>
                            </div>
                            <?php if(!$row['is_read']): ?>
                            <div style="width: 10px; height: 10px; border-radius: 50%; background-color: var(--primary-color); margin-top: 5px;"></div>
                            <?php endif; ?>
                        </li>
                        <?php
                    }
                } else {
                    echo '<li style="padding: 40px; text-align: center; color: var(--text-muted);">
                            <i class="fa-regular fa-bell-slash" style="font-size: 48px; margin-bottom: 15px; display: block; opacity: 0.3;"></i>
                            No notifications available.
                          </li>';
                }
                ?>
            </ul>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
