<?php
require_once 'config/db.php';
$pageTitle = 'Estimate Requests';
$currentPage = 'estimate_requests';

$success_msg = '';
$error_msg = '';

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    if ($conn->query("DELETE FROM estimate_requests WHERE id=$id")) {
        $success_msg = "Request deleted successfully!";
    } else {
        $error_msg = "Error deleting request: " . $conn->error;
    }
}

include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Estimate Requests</h1>
        </div>
        
        <?php if(!empty($success_msg)): ?>
            <div id="notification-msg" style="background:#d4edda; color:#155724; padding:15px; border-radius:8px; margin-bottom:20px; font-weight:500; transition: opacity 0.5s ease;">
                <i class="fa-solid fa-check-circle" style="margin-right:8px;"></i> <?php echo $success_msg; ?>
            </div>
        <?php endif; ?>
        <?php if(!empty($error_msg)): ?>
            <div id="notification-msg" style="background:#f8d7da; color:#721c24; padding:15px; border-radius:8px; margin-bottom:20px; font-weight:500; transition: opacity 0.5s ease;">
                <i class="fa-solid fa-exclamation-circle" style="margin-right:8px;"></i> <?php echo $error_msg; ?>
            </div>
        <?php endif; ?>

        <script>
            setTimeout(() => {
                const notif = document.getElementById('notification-msg');
                if(notif) {
                    notif.style.opacity = '0';
                    setTimeout(() => notif.style.display = 'none', 500);
                }
            }, 3000);
        </script>

        <div class="tabs-header">
            <button class="tab-btn active" id="tab-manage" onclick="switchTab('manage')">All Requests</button>
        </div>

        <!-- ALL REQUESTS LIST -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search requests...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>New</option>
                            <option>Reviewed</option>
                            <option>Converted</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Client Info</th>
                            <th>Property Type</th>
                            <th>Design Package</th>
                            <th>Est. Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $requests = $conn->query("SELECT * FROM estimate_requests ORDER BY created_at DESC");
                        if ($requests && $requests->num_rows > 0):
                            while ($row = $requests->fetch_assoc()):
                        ?>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;"><?php echo htmlspecialchars($row['name']); ?></h4>
                                        <p style="color: var(--text-muted); font-size: 11px;"><?php echo htmlspecialchars($row['phone']); ?> • <?php echo htmlspecialchars($row['location']); ?></p>
                                        <p style="color: var(--text-muted); font-size: 10px; margin-top:2px;"><?php echo date('d M, Y h:i A', strtotime($row['created_at'])); ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 13px; color: var(--text-main); font-weight:600;"><?php echo htmlspecialchars($row['property_category'] ?: 'N/A'); ?></div>
                                <div style="font-size: 11px; color: var(--text-muted);"><?php echo htmlspecialchars($row['property_type'] ?: 'N/A'); ?></div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-crown" style="color:#F4B41A; margin-right:5px;"></i> <?php echo htmlspecialchars($row['package'] ?: 'N/A'); ?></div>
                                <div style="font-size: 11px; color: var(--text-muted);"><?php echo htmlspecialchars($row['design_style'] ?: 'N/A'); ?></div>
                            </td>
                            <td><strong style="color:var(--sidebar-active);"><?php echo htmlspecialchars($row['estimated_cost'] ?: '₹0'); ?></strong></td>
                            <td><span class="pill new">New</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="?delete=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete this request?');"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php 
                            endwhile;
                        else:
                        ?>
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 30px; color: var(--text-muted);">No estimate requests found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="admin-footer">
        <div>© 2025 Kalp Interior Design Studio. All rights reserved.</div>
    </div>
</div>

<script>
function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.getElementById('view-' + tabId).classList.add('active');
    
    // Handle tab buttons visibility if needed
    if(tabId === 'manage') {
        document.getElementById('tab-manage').classList.add('active');
    }
}
</script>

<?php include 'includes/footer.php'; ?>
