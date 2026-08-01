<?php
$pageTitle = 'Leads';
$currentPage = 'leads';
include 'includes/header.php';
include 'includes/sidebar.php';
require_once 'config/db.php';

$success_msg = '';
$error_msg = '';

if (isset($_GET['success']) && $_GET['success'] == 'delete') {
    $success_msg = "Lead deleted successfully!";
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM leads WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: leads.php?success=delete");
        exit;
    } else {
        $error_msg = "Failed to delete lead.";
    }
    $stmt->close();
}

// Fetch leads from DB
$leads_query = "SELECT * FROM leads ORDER BY created_at DESC";
$leads_result = $conn->query($leads_query);
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Leads</h1>
            <div style="display: flex; gap: 10px;">
                <a href="export_leads.php" class="btn-primary" style="background-color: #28a745; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-file-excel"></i> Export
                </a>
            </div>
        </div>

        <?php if(!empty($success_msg)): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $success_msg; ?>
            </div>
        <?php endif; ?>
        <?php if(!empty($error_msg)): ?>
            <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $error_msg; ?>
            </div>
        <?php endif; ?>

        <!-- MANAGE LEADS VIEW -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search leads...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>New</option>
                            <option>Contacted</option>
                            <option>In Progress</option>
                            <option>Qualified</option>
                            <option>Closed</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Client Info</th>
                            <th>Contact Details</th>
                            <th>Service Requested</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($leads_result && $leads_result->num_rows > 0): ?>
                            <?php while($lead = $leads_result->fetch_assoc()): 
                                $date = date('M d, Y', strtotime($lead['created_at']));
                                $status_class = 'new';
                                if($lead['status'] == 'Contacted') $status_class = 'contacted';
                                if($lead['status'] == 'In Progress') $status_class = 'progress';
                            ?>
                            <tr>
                                <td>
                                    <div class="user-info">
                                        <div class="user-avatar" style="background:var(--primary-color); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:bold;">
                                            <?php echo strtoupper(substr($lead['name'], 0, 1)); ?>
                                        </div>
                                        <div class="user-details">
                                            <h4 style="font-size: 14px; margin-bottom: 2px;"><?php echo htmlspecialchars($lead['name']); ?></h4>
                                            <p style="color: var(--text-muted); font-size: 11px;"><?php echo $date; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div style="font-size: 12px; color: var(--text-main); margin-bottom: 4px;"><i class="fa-regular fa-envelope" style="margin-right:5px; color:var(--text-muted);"></i> <?php echo htmlspecialchars($lead['email']); ?></div>
                                </td>
                                <td><?php echo htmlspecialchars($lead['service']); ?></td>
                                <td><span class="pill <?php echo $status_class; ?>"><?php echo htmlspecialchars($lead['status']); ?></span></td>
                                <td>
                                    <div class="action-btns">
                                        <button type="button" class="btn-icon view-lead-btn" style="border:none; background:none; cursor:pointer;"
                                            data-name="<?php echo htmlspecialchars($lead['name']); ?>"
                                            data-email="<?php echo htmlspecialchars($lead['email']); ?>"
                                            data-service="<?php echo htmlspecialchars($lead['service']); ?>"
                                            data-message="<?php echo htmlspecialchars($lead['message']); ?>"
                                            data-date="<?php echo $date; ?>"
                                            data-status="<?php echo htmlspecialchars($lead['status']); ?>"
                                        ><i class="fa-regular fa-eye"></i></button>
                                        <a href="?delete=<?php echo $lead['id']; ?>" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" style="text-align:center; padding: 20px;">No leads found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ADD LEAD VIEW -->
        <div class="tab-content" id="view-add-lead">
            <div class="form-panel">
                <form action="#" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter client's full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email address" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter phone number">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Lead Source</label>
                            <select class="form-control">
                                <option>Website Contact Form</option>
                                <option>Direct Call</option>
                                <option>Referral</option>
                                <option>Social Media</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Requested</label>
                            <select class="form-control">
                                <option>General Inquiry</option>
                                <option>Residential Interior</option>
                                <option>Commercial Design</option>
                                <option>Modular Kitchen</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                                <option>New</option>
                                <option>Contacted</option>
                                <option>In Progress</option>
                                <option>Qualified</option>
                                <option>Closed</option>
                            </select>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Lead Notes / Requirements</label>
                            <textarea class="form-control" placeholder="Enter any initial requirements or notes gathered from the client..."></textarea>
                        </div>

                        <div class="form-group full" style="display:flex; justify-content:flex-end; gap:15px; margin-top:10px;">
                            <button type="button" class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Cancel</button>
                            <button type="submit" class="btn-primary">Save Lead</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="admin-footer">
        <div>© 2025 Kalp Interior Design Studio. All rights reserved.</div>
    </div>
</div>

<script>
function switchTab(tabId) {
    // Hide all contents
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    
    // Show selected content
    document.getElementById('view-' + tabId).classList.add('active');
}
</script>

<!-- Lead Details Modal -->
<div id="leadModal" class="modal-overlay" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
    <div class="modal-content" style="background:#fff; width:90%; max-width:600px; border-radius:10px; box-shadow:0 10px 30px rgba(0,0,0,0.2); overflow:hidden;">
        <div class="modal-header" style="background:var(--bg-white); padding:20px; border-bottom:1px solid var(--border-color); display:flex; justify-content:space-between; align-items:center;">
            <h3 style="margin:0; font-family:var(--font-headline); color:var(--text-dark);">Lead Details</h3>
            <button onclick="closeLeadModal()" style="background:none; border:none; font-size:20px; cursor:pointer; color:var(--text-muted);"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body" style="padding:20px;">
            <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px; margin-bottom:20px;">
                <div>
                    <strong style="display:block; font-size:12px; color:var(--text-muted); margin-bottom:5px;">Name</strong>
                    <div id="modal-name" style="font-weight:600; color:var(--text-dark);"></div>
                </div>
                <div>
                    <strong style="display:block; font-size:12px; color:var(--text-muted); margin-bottom:5px;">Email</strong>
                    <div id="modal-email" style="font-weight:600; color:var(--text-dark);"></div>
                </div>
                <div>
                    <strong style="display:block; font-size:12px; color:var(--text-muted); margin-bottom:5px;">Service Requested</strong>
                    <div id="modal-service" style="font-weight:600; color:var(--text-dark);"></div>
                </div>
                <div>
                    <strong style="display:block; font-size:12px; color:var(--text-muted); margin-bottom:5px;">Date Submitted</strong>
                    <div id="modal-date" style="font-weight:600; color:var(--text-dark);"></div>
                </div>
            </div>
            <div>
                <strong style="display:block; font-size:12px; color:var(--text-muted); margin-bottom:5px;">Message</strong>
                <div id="modal-message" style="background:#f9f9f9; padding:15px; border-radius:8px; color:var(--text-dark); line-height:1.6; border:1px solid #eee; white-space:pre-wrap;"></div>
            </div>
        </div>
        <div class="modal-footer" style="padding:20px; background:#f9f9f9; border-top:1px solid var(--border-color); text-align:right;">
            <button class="btn-primary" onclick="closeLeadModal()" style="padding:8px 20px;">Close</button>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.view-lead-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('modal-name').textContent = this.getAttribute('data-name');
        document.getElementById('modal-email').textContent = this.getAttribute('data-email');
        document.getElementById('modal-service').textContent = this.getAttribute('data-service');
        document.getElementById('modal-message').textContent = this.getAttribute('data-message');
        document.getElementById('modal-date').textContent = this.getAttribute('data-date');
        
        document.getElementById('leadModal').style.display = 'flex';
    });
});

function closeLeadModal() {
    document.getElementById('leadModal').style.display = 'none';
}

// Close on outside click
document.getElementById('leadModal').addEventListener('click', function(e) {
    if(e.target === this) {
        closeLeadModal();
    }
});
</script>

<?php include 'includes/footer.php'; ?>
