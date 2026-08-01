<?php
$pageTitle = 'Projects';
$currentPage = 'projects';
$success_msg = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Backend logic disabled for UI demonstration purposes
    $success_msg = "Project added successfully! (UI Demo Mode)";
}

include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Manage Projects</h1>
            <button class="btn-primary" onclick="addProject()">
                <i class="fa-solid fa-plus"></i> Add New Project
            </button>
        </div>

        <?php if($success_msg): ?>
            <div style="background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <?php echo $success_msg; ?>
            </div>
            <script>
                // Automatically switch to the correct tab if there was a message
                document.addEventListener('DOMContentLoaded', () => switchTab('manage'));
            </script>
        <?php endif; ?>
        <?php if($error_msg): ?>
            <div style="background: #fee2e2; color: #991b1b; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <?php echo $error_msg; ?>
            </div>
        <?php endif; ?>



        <!-- MANAGE PROJECTS VIEW -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search projects...">
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Location</th>
                            <th>Category</th>
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
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon" onclick="editProject(); return false;"><i class="fa-solid fa-pen"></i></a>
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
                            <td>
                                <div class="action-btns">
                                    <a href="#" class="btn-icon" onclick="editProject(); return false;"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#" class="btn-icon delete"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ADD PROJECT VIEW (INLINE EDITOR) -->
        <div class="tab-content" id="view-add-project">
            
            <div class="live-editor-toolbar" style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 15px 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                <div>
                    <h3 id="live-editor-title" style="margin: 0; display: flex; align-items: center; gap: 10px; color: var(--text-dark);">
                        <i class="fa-solid fa-wand-magic-sparkles" style="color: var(--accent-color);"></i> Live Add Project
                    </h3>
                    <p style="margin: 5px 0 0; color: #666; font-size: 13px;">Click directly on any text or image below to edit it.</p>
                </div>
                <div>
                    <button class="btn-primary" style="background:#f1f5f9; color:var(--text-main); margin-right: 10px;" onclick="switchTab('manage')">Cancel</button>
                    <button class="btn-primary" onclick="saveLiveProject()" id="btn-save-project">
                        <i class="fa-solid fa-floppy-disk"></i> Save Project
                    </button>
                </div>
            </div>
            
            <div class="preview-panel" style="width: 100%; height: 75vh; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <iframe id="editor-iframe" src="editor-project.php" style="width: 100%; height: 100%; border: none;"></iframe>
            </div>

            <!-- Hidden Form for Image Uploads triggered by iframe -->
            <form id="live-add-form" style="display:none;" action="projects.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="hidden_cover_image" name="cover_image" accept="image/*">
                <!-- Data fields to submit to backend -->
                <input type="hidden" name="title" id="hdn_title">
                <input type="hidden" name="location" id="hdn_location">
                <input type="hidden" name="category" id="hdn_category">
                <input type="hidden" name="property_type" id="hdn_property_type">
                <input type="hidden" name="area" id="hdn_area">
                <input type="hidden" name="year" id="hdn_year">
                <input type="hidden" name="style" id="hdn_style">
                <input type="hidden" name="scope" id="hdn_scope">
                <input type="hidden" name="short_desc" id="hdn_short_desc">
                <input type="hidden" name="about_title" id="hdn_about_title">
                <input type="hidden" name="about_subtitle" id="hdn_about_subtitle">
                <input type="hidden" name="long_desc" id="hdn_long_desc">
            </form>

        </div>

    <div class="admin-footer">
        <div>© 2025 Kalp Interior Design Studio. All rights reserved.</div>
    </div>
</div>

<script>
function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));
    document.getElementById('view-' + tabId).classList.add('active');
    
    const tabBtn = document.getElementById('tab-' + tabId);
    if(tabBtn) tabBtn.classList.add('active');
}

function addProject() {
    document.getElementById('live-editor-title').innerHTML = '<i class="fa-solid fa-wand-magic-sparkles" style="color: var(--accent-color);"></i> Live Add Project';
    document.getElementById('btn-save-project').innerHTML = '<i class="fa-solid fa-floppy-disk"></i> Save Project';
    
    // Optional: Reset iframe to clear state if it was an edit previously
    // document.getElementById('editor-iframe').src = 'editor-project.php';
    
    switchTab('add-project');
}

function editProject() {
    document.getElementById('live-editor-title').innerHTML = '<i class="fa-solid fa-wand-magic-sparkles" style="color: var(--accent-color);"></i> Live Edit Project';
    document.getElementById('btn-save-project').innerHTML = '<i class="fa-solid fa-floppy-disk"></i> Update Project';
    
    // In a real app, you would pass the project ID to the iframe here (e.g. editor-project.php?id=1)
    
    switchTab('add-project');
}

document.addEventListener('DOMContentLoaded', () => {
    const iframe = document.getElementById('editor-iframe');
    const fileInput = document.getElementById('hidden_cover_image');
    
    // Listen for image clicks inside the iframe
    iframe.addEventListener('load', () => {
        const doc = iframe.contentDocument || iframe.contentWindow.document;
        
        doc.querySelectorAll('.hero-main-img').forEach(img => {
            img.style.cursor = 'pointer';
            img.title = 'Click to change cover image';
            img.addEventListener('click', () => {
                fileInput.click();
            });
        });
    });

    // Handle Cover Image Preview
    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                try {
                    const doc = iframe.contentDocument || iframe.contentWindow.document;
                    const mainImg = doc.querySelector('.hero-main-img');
                    if (mainImg) mainImg.src = e.target.result;
                } catch (err) {}
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function saveLiveProject() {
    const iframe = document.getElementById('editor-iframe');
    const doc = iframe.contentDocument || iframe.contentWindow.document;
    
    // Extract text values safely
    const getText = (selector) => {
        const el = doc.querySelector(selector);
        return el ? el.innerText.trim() : '';
    };

    const getHtml = (selector) => {
        const el = doc.querySelector(selector);
        return el ? el.innerHTML.trim() : '';
    };

    // Populate hidden inputs
    document.getElementById('hdn_title').value = getText('.project-title').replace(/\n/g, ' ');
    document.getElementById('hdn_location').value = getText('.location-pin').replace('Location', '').trim();
    document.getElementById('hdn_category').value = getText('.meta-value:nth-of-type(1)');
    document.getElementById('hdn_property_type').value = getText('.meta-value:nth-of-type(2)');
    document.getElementById('hdn_area').value = getText('.meta-value:nth-of-type(3)');
    document.getElementById('hdn_year').value = getText('.meta-value:nth-of-type(4)');
    document.getElementById('hdn_style').value = getText('.meta-value:nth-of-type(5)');
    document.getElementById('hdn_scope').value = getText('.meta-value:nth-of-type(6)');
    
    document.getElementById('hdn_short_desc').value = getText('.short-desc');
    document.getElementById('hdn_about_title').value = getText('.section-title').split('\n')[0];
    document.getElementById('hdn_about_subtitle').value = getText('.signature-text');
    document.getElementById('hdn_long_desc').value = getHtml('.long-desc-container');

    // For Top Features and Highlights, we can capture them dynamically and add to form, 
    // but for MVP we are just submitting the main form.
    
    document.getElementById('btn-save-project').innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Saving...';
    
    // Submit the form
    document.getElementById('live-add-form').submit();
}
</script>

<?php include 'includes/footer.php'; ?>
