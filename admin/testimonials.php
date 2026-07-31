<?php
$pageTitle = 'Testimonials';
$currentPage = 'testimonials';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Testimonials</h1>
            <button class="btn-primary" onclick="switchTab('add-testimonial')">
                <i class="fa-solid fa-plus"></i> Add New Testimonial
            </button>
        </div>

        <!-- MANAGE TESTIMONIALS VIEW -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search testimonials...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>Published</option>
                            <option>Draft</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Client Info</th>
                            <th>Company / Brand</th>
                            <th>Testimonial Preview</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="user-avatar" alt="Sarah Mitchell">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Sarah Mitchell</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">Home Renovation Client</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-fan" style="color: #4f46e5; margin-right:5px;"></i> Logoipsum</div>
                            </td>
                            <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-style: italic; color: var(--text-muted);">
                                "The entire process was seamless from start to finish. The team delivered exceptional..."
                            </td>
                            <td><span class="pill progress">Published</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="user-avatar" alt="Robert Fox">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Robert Fox</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">CEO, Tech Innovators</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-gem" style="color: #EAB136; margin-right:5px;"></i> Logoipsum</div>
                            </td>
                            <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-style: italic; color: var(--text-muted);">
                                "The attention to detail and ability to capture our brand identity was phenomenal..."
                            </td>
                            <td><span class="pill progress">Published</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="user-avatar" alt="Eleanor Pena">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Eleanor Pena</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">Homeowner</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-leaf" style="color: #4CAF50; margin-right:5px;"></i> Logoipsum</div>
                            </td>
                            <td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-style: italic; color: var(--text-muted);">
                                "We wanted our home to feel like a luxurious retreat, and they absolutely delivered..."
                            </td>
                            <td><span class="pill progress">Published</span></td>
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

        <!-- ADD TESTIMONIAL VIEW -->
        <div class="tab-content" id="view-add-testimonial">
            <div class="form-panel">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-grid">
                        
                        <div class="form-group">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" placeholder="e.g., Sarah Mitchell" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Client Role / Designation</label>
                            <input type="text" class="form-control" placeholder="e.g., Home Renovation Client or CEO">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Company / Brand Name</label>
                            <input type="text" class="form-control" placeholder="e.g., Logoipsum (Leave blank if not applicable)">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Company Icon (FontAwesome)</label>
                            <input type="text" class="form-control" placeholder="e.g., fa-solid fa-gem">
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Client Image / Avatar</label>
                            <div class="file-upload-box" onclick="document.getElementById('client_image').click()" style="padding: 30px;">
                                <i class="fa-solid fa-user-circle"></i>
                                <h4>Click to upload client photo</h4>
                                <p style="font-size:12px; margin-top:5px;">Square image recommended (e.g., 150x150px)</p>
                                <input type="file" id="client_image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Testimonial Content</label>
                            <textarea class="form-control" placeholder="Write the client's review here..." style="min-height: 150px;" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                                <option>Published</option>
                                <option>Draft</option>
                            </select>
                        </div>

                        <div class="form-group full" style="display:flex; justify-content:flex-end; gap:15px; margin-top:10px;">
                            <button type="button" class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Cancel</button>
                            <button type="submit" class="btn-primary">Save Testimonial</button>
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
