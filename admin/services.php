<?php
$pageTitle = 'Services';
$currentPage = 'services';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Services</h1>
            <button class="btn-primary" onclick="switchTab('add-service')">
                <i class="fa-solid fa-plus"></i> Add New Service
            </button>
        </div>

        <!-- MANAGE SERVICES VIEW -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search services...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Draft</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-details">
                                    <h4 style="font-size: 14px; margin-bottom: 4px;">Residential Interior</h4>
                                    <p style="color: var(--text-muted); font-size: 12px;">Complete home interior design solutions.</p>
                                </div>
                            </td>
                            <td>
                                <div class="stat-icon" style="background: rgba(234, 177, 54, 0.1); color: #EAB136; width: 40px; height: 40px; font-size: 16px;">
                                    <i class="fa-solid fa-house"></i>
                                </div>
                            </td>
                            <td><span class="pill new" style="background: #dcfce7; color: #166534;">Active</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-details">
                                    <h4 style="font-size: 14px; margin-bottom: 4px;">Commercial Design</h4>
                                    <p style="color: var(--text-muted); font-size: 12px;">Office and commercial space planning.</p>
                                </div>
                            </td>
                            <td>
                                <div class="stat-icon" style="background: rgba(51, 76, 64, 0.1); color: #334C40; width: 40px; height: 40px; font-size: 16px;">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                            </td>
                            <td><span class="pill new" style="background: #dcfce7; color: #166534;">Active</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-details">
                                    <h4 style="font-size: 14px; margin-bottom: 4px;">Modular Kitchen</h4>
                                    <p style="color: var(--text-muted); font-size: 12px;">Custom modular kitchen setups.</p>
                                </div>
                            </td>
                            <td>
                                <div class="stat-icon" style="background: rgba(51, 76, 64, 0.1); color: #334C40; width: 40px; height: 40px; font-size: 16px;">
                                    <i class="fa-solid fa-kitchen-set"></i>
                                </div>
                            </td>
                            <td><span class="pill closed">Draft</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ADD SERVICE VIEW -->
        <div class="tab-content" id="view-add-service">
            <div class="form-panel">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div class="form-group full">
                            <label class="form-label">Service Name</label>
                            <input type="text" class="form-control" placeholder="Enter service name (e.g. Residential Interior)" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">FontAwesome Icon Class</label>
                            <input type="text" class="form-control" placeholder="e.g., fa-solid fa-house">
                            <small style="color:var(--text-muted); font-size:11px; margin-top:5px; display:block;">Use FontAwesome class names for the service icon.</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                                <option>Active</option>
                                <option>Draft</option>
                            </select>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Short Description</label>
                            <input type="text" class="form-control" placeholder="Brief summary of the service (max 100 characters)">
                        </div>
                        
                        <div class="form-group full">
                            <label class="form-label">Service Cover Image</label>
                            <div class="file-upload-box" onclick="document.getElementById('service_image').click()">
                                <i class="fa-solid fa-image"></i>
                                <h4>Click to upload cover image</h4>
                                <p style="font-size:12px; margin-top:5px;">Used for the individual service details page</p>
                                <input type="file" id="service_image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Detailed Description</label>
                            <textarea class="form-control" placeholder="Write a comprehensive description about this service..."></textarea>
                        </div>

                        <div class="form-group full" style="display:flex; justify-content:flex-end; gap:15px; margin-top:10px;">
                            <button type="button" class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Cancel</button>
                            <button type="submit" class="btn-primary">Save Service</button>
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
