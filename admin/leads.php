<?php
$pageTitle = 'Leads';
$currentPage = 'leads';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Leads</h1>
            <button class="btn-primary" onclick="switchTab('add-lead')">
                <i class="fa-solid fa-plus"></i> Add New Lead
            </button>
        </div>

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
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=12" class="user-avatar" alt="User">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Rahul Sharma</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">2 mins ago</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main); margin-bottom: 4px;"><i class="fa-regular fa-envelope" style="margin-right:5px; color:var(--text-muted);"></i> rahul.sharma@email.com</div>
                                <div style="font-size: 12px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="margin-right:5px;"></i> +91 98765 43210</div>
                            </td>
                            <td>Residential Interior</td>
                            <td><span class="pill new">New</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-regular fa-eye"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=5" class="user-avatar" alt="User">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Priya Mehta</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">1 hour ago</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main); margin-bottom: 4px;"><i class="fa-regular fa-envelope" style="margin-right:5px; color:var(--text-muted);"></i> priya.mehta@email.com</div>
                                <div style="font-size: 12px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="margin-right:5px;"></i> +91 91234 56789</div>
                            </td>
                            <td>Modular Kitchen</td>
                            <td><span class="pill contacted">Contacted</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-regular fa-eye"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://i.pravatar.cc/150?img=13" class="user-avatar" alt="User">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Amit Verma</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">3 hours ago</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main); margin-bottom: 4px;"><i class="fa-regular fa-envelope" style="margin-right:5px; color:var(--text-muted);"></i> amit.verma@email.com</div>
                                <div style="font-size: 12px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="margin-right:5px;"></i> +91 99887 76655</div>
                            </td>
                            <td>Commercial Design</td>
                            <td><span class="pill progress">In Progress</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-regular fa-eye"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
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

<?php include 'includes/footer.php'; ?>
