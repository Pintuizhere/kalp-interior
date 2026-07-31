<?php
$pageTitle = 'Projects';
$currentPage = 'projects';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Projects</h1>
            <button class="btn-primary" onclick="switchTab('add-project')">
                <i class="fa-solid fa-plus"></i> Add New Project
            </button>
        </div>



        <!-- MANAGE PROJECTS VIEW -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search projects...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Location</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="project-item">
                                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                                    <div class="user-details">
                                        <h4>Modern Luxury Villa</h4>
                                        <p>Client: Mr. Sharma</p>
                                    </div>
                                </div>
                            </td>
                            <td>Bangalore, Karnataka</td>
                            <td>Residential</td>
                            <td><span class="pill progress">In Progress</span></td>
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="project-item">
                                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                                    <div class="user-details">
                                        <h4>Minimalist Apartment</h4>
                                        <p>Client: Mrs. Mehta</p>
                                    </div>
                                </div>
                            </td>
                            <td>Mumbai, Maharashtra</td>
                            <td>Residential</td>
                            <td><span class="pill closed">Completed</span></td>
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

        <!-- ADD PROJECT VIEW -->
        <div class="tab-content" id="view-add-project">
            <div class="form-panel">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Project Title</label>
                            <input type="text" class="form-control" placeholder="Enter project title" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" placeholder="Enter client name">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Main Category</label>
                            <select class="form-control">
                                <option>Residential Design</option>
                                <option>Commercial Design</option>
                                <option>Office Space</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Property Type</label>
                            <input type="text" class="form-control" placeholder="e.g., Apartment, Villa">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" placeholder="e.g., Mumbai, Maharashtra">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Area (sq. ft.)</label>
                            <input type="text" class="form-control" placeholder="e.g., 2,350 sq. ft.">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Design Style</label>
                            <input type="text" class="form-control" placeholder="e.g., Modern Minimal">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Scope of Work</label>
                            <input type="text" class="form-control" placeholder="e.g., Full Interior Design">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Year of Completion</label>
                            <input type="text" class="form-control" placeholder="e.g., 2024">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                                <option>Planning</option>
                                <option>In Progress</option>
                                <option>Completed</option>
                            </select>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" placeholder="Brief summary of the project..." style="min-height: 80px;"></textarea>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">About The Project (Detailed Description)</label>
                            <textarea class="form-control" placeholder="Write a detailed description about the project..."></textarea>
                        </div>

                        <div class="form-group full">
                            <label class="form-label">Project Highlights / Features (Comma separated)</label>
                            <input type="text" class="form-control" placeholder="e.g., Spacious Layout, Elegant Interiors, Smart Storage, Personalized Touch">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hero/Cover Image</label>
                            <div class="file-upload-box" onclick="document.getElementById('cover_image').click()" style="padding: 20px;">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h4>Click to upload cover image</h4>
                                <input type="file" id="cover_image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Gallery Images</label>
                            <div class="file-upload-box" onclick="document.getElementById('gallery_images').click()" style="padding: 20px;">
                                <i class="fa-solid fa-images"></i>
                                <h4>Click to upload gallery images</h4>
                                <input type="file" id="gallery_images" accept="image/*" multiple>
                            </div>
                        </div>

                        <div class="form-group full" style="display:flex; justify-content:flex-end; gap:15px; margin-top:10px;">
                            <button type="button" class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Cancel</button>
                            <button type="submit" class="btn-primary">Save Project</button>
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
    // Remove active class from buttons
    document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));
    
    // Show selected content and activate button
    document.getElementById('view-' + tabId).classList.add('active');
    document.getElementById('tab-' + tabId).classList.add('active');
}
</script>

<?php include 'includes/footer.php'; ?>
