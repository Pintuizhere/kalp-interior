<?php
$pageTitle = 'Projects';
$currentPage = 'projects';
require_once 'config/db.php';

$success_msg = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $client_name = $_POST['client_name'] ?? '';
    $category = $_POST['category'] ?? '';
    $property_type = $_POST['property_type'] ?? '';
    $location = $_POST['location'] ?? '';
    $area = $_POST['area'] ?? '';
    $style = $_POST['style'] ?? '';
    $scope = $_POST['scope'] ?? '';
    $year = $_POST['year'] ?? '';
    $status = $_POST['status'] ?? 'Planning';
    $short_desc = $_POST['short_desc'] ?? '';
    $long_desc = $_POST['long_desc'] ?? '';
    
    // Advanced Text Fields
    $about_title = $_POST['about_title'] ?? '';
    $about_subtitle = $_POST['about_subtitle'] ?? '';

    // Process Top Features to JSON
    $top_features = [];
    if (isset($_POST['top_feature_title']) && is_array($_POST['top_feature_title'])) {
        foreach ($_POST['top_feature_title'] as $index => $tf_title) {
            $tf_desc = $_POST['top_feature_desc'][$index] ?? '';
            if (!empty(trim($tf_title))) {
                $top_features[] = ['title' => trim($tf_title), 'desc' => trim($tf_desc)];
            }
        }
    }
    $top_features_json = json_encode($top_features);

    // Process Project Highlights to JSON
    $project_highlights = [];
    if (isset($_POST['highlight_title']) && is_array($_POST['highlight_title'])) {
        foreach ($_POST['highlight_title'] as $index => $hl_title) {
            $hl_desc = $_POST['highlight_desc'][$index] ?? '';
            if (!empty(trim($hl_title))) {
                $project_highlights[] = ['title' => trim($hl_title), 'desc' => trim($hl_desc)];
            }
        }
    }
    $project_highlights_json = json_encode($project_highlights);

    $upload_dir = '../uploads/projects/';
    $cover_image_path = '';

    // Handle Cover Image
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['cover_image']['tmp_name'];
        $name = basename($_FILES['cover_image']['name']);
        $unique_name = time() . '_cover_' . $name;
        if (move_uploaded_file($tmp_name, $upload_dir . $unique_name)) {
            $cover_image_path = 'uploads/projects/' . $unique_name;
        }
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO projects (title, client_name, category, property_type, location, area, style, scope, year, status, short_desc, long_desc, about_title, about_subtitle, top_features, project_highlights, cover_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$title, $client_name, $category, $property_type, $location, $area, $style, $scope, $year, $status, $short_desc, $long_desc, $about_title, $about_subtitle, $top_features_json, $project_highlights_json, $cover_image_path]);
        $project_id = $pdo->lastInsertId();

        // Handle Categorized Gallery Images
        $gallery_categories = ['Living Room', 'Bedroom', 'Kitchen', 'Dining', 'Bathroom', 'Other Spaces'];

        foreach ($gallery_categories as $cat) {
            $input_name = 'gallery_' . strtolower(str_replace(' ', '_', $cat));
            
            if (isset($_FILES[$input_name])) {
                $gallery_files = $_FILES[$input_name];
                for ($i = 0; $i < count($gallery_files['name']); $i++) {
                    if ($gallery_files['error'][$i] === UPLOAD_ERR_OK) {
                        $g_tmp_name = $gallery_files['tmp_name'][$i];
                        $g_name = basename($gallery_files['name'][$i]);
                        $g_unique_name = time() . '_' . rand(100, 999) . '_' . $g_name;
                        
                        if (move_uploaded_file($g_tmp_name, $upload_dir . $g_unique_name)) {
                            $g_path = 'uploads/projects/' . $g_unique_name;
                            $img_stmt = $pdo->prepare("INSERT INTO project_images (project_id, image_path, category) VALUES (?, ?, ?)");
                            $img_stmt->execute([$project_id, $g_path, $cat]);
                        }
                    }
                }
            }
        }
        $success_msg = "Project added successfully!";
    } catch (PDOException $e) {
        $error_msg = "Error adding project: " . $e->getMessage();
    }
}

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
                <form action="projects.php" method="POST" enctype="multipart/form-data">
                    
                    <!-- Section 1: Basic Information -->
                    <h3 style="margin: 20px 0 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">1. Basic Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Project Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. MODERN 4 BHK APARTMENT" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="e.g. Mumbai, India">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="client_name" class="form-control" placeholder="Enter client name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Main Category</label>
                            <select name="category" class="form-control">
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Office Space</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Property Type</label>
                            <input type="text" name="property_type" class="form-control" placeholder="e.g. Apartment">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Area</label>
                            <input type="text" name="area" class="form-control" placeholder="e.g. 2,350 sq. ft.">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Design Style</label>
                            <input type="text" name="style" class="form-control" placeholder="e.g. Modern Minimal">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Scope of Work</label>
                            <input type="text" name="scope" class="form-control" placeholder="e.g. Full Interior Design">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Year of Completion</label>
                            <input type="text" name="year" class="form-control" placeholder="e.g. 2024">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option>Planning</option>
                                <option>In Progress</option>
                                <option>Completed</option>
                            </select>
                        </div>
                        <div class="form-group full">
                            <label class="form-label">Short Description (Hero Text)</label>
                            <textarea name="short_desc" class="form-control" placeholder="Brief summary of the project..." style="min-height: 80px;"></textarea>
                        </div>
                    </div>

                    <!-- Section 2: Top Features -->
                    <h3 style="margin: 30px 0 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">2. Top 4 Features</h3>
                    <div class="form-grid">
                        <?php for($i=1; $i<=4; $i++): ?>
                        <div class="form-group full" style="background: #f8fafc; padding: 15px; border-radius: 8px;">
                            <label style="font-weight: bold; margin-bottom: 10px; display: block;">Feature <?php echo $i; ?></label>
                            <input type="text" name="top_feature_title[]" class="form-control" placeholder="Feature Title (e.g. Thoughtful Design)" style="margin-bottom: 10px;">
                            <input type="text" name="top_feature_desc[]" class="form-control" placeholder="Feature Description">
                        </div>
                        <?php endfor; ?>
                    </div>

                    <!-- Section 3: About The Project -->
                    <h3 style="margin: 30px 0 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">3. About The Project</h3>
                    <div class="form-grid">
                        <div class="form-group full">
                            <label class="form-label">About Main Title</label>
                            <input type="text" name="about_title" class="form-control" placeholder="e.g. CRAFTED FOR COMFORT.">
                        </div>
                        <div class="form-group full">
                            <label class="form-label">About Signature Subtitle (Accent color)</label>
                            <input type="text" name="about_subtitle" class="form-control" placeholder="e.g. Designed for Living.">
                        </div>
                        <div class="form-group full">
                            <label class="form-label">Detailed Description</label>
                            <textarea name="long_desc" class="form-control" placeholder="Write a detailed description about the project... (You can use HTML tags like <p> for multiple paragraphs)" style="min-height: 150px;"></textarea>
                        </div>
                    </div>

                    <!-- Section 4: Project Highlights -->
                    <h3 style="margin: 30px 0 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">4. Project Highlights</h3>
                    <div class="form-grid">
                        <?php for($i=1; $i<=4; $i++): ?>
                        <div class="form-group full" style="background: #f8fafc; padding: 15px; border-radius: 8px;">
                            <label style="font-weight: bold; margin-bottom: 10px; display: block;">Highlight <?php echo $i; ?></label>
                            <input type="text" name="highlight_title[]" class="form-control" placeholder="Highlight Title (e.g. Spacious Layout)" style="margin-bottom: 10px;">
                            <input type="text" name="highlight_desc[]" class="form-control" placeholder="Highlight Description">
                        </div>
                        <?php endfor; ?>
                    </div>

                    <!-- Section 5: Media & Gallery -->
                    <h3 style="margin: 30px 0 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">5. Media & Gallery</h3>
                    <div class="form-grid">
                        <div class="form-group full">
                            <label class="form-label" style="font-size: 16px;">Hero/Cover Image (Required)</label>
                            <div class="file-upload-box" onclick="document.getElementById('cover_image').click()" style="padding: 20px; background: #fffbeb; border-color: #EAB136;">
                                <i class="fa-solid fa-cloud-arrow-up" style="color: #EAB136;"></i>
                                <h4>Click to upload cover image</h4>
                                <input type="file" name="cover_image" id="cover_image" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group full">
                            <label class="form-label" style="font-size: 16px;">Categorized Gallery Images</label>
                            <p style="color: #666; font-size: 13px; margin-bottom: 15px;">You can upload multiple images for each room/category.</p>
                        </div>

                        <?php 
                        $cats = ['Living Room', 'Bedroom', 'Kitchen', 'Dining', 'Bathroom', 'Other Spaces'];
                        foreach($cats as $cat): 
                            $inputId = 'gallery_' . strtolower(str_replace(' ', '_', $cat));
                        ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo $cat; ?></label>
                            <div class="file-upload-box" onclick="document.getElementById('<?php echo $inputId; ?>').click()" style="padding: 15px;">
                                <i class="fa-solid fa-images"></i>
                                <h4 style="font-size: 13px;">Upload <?php echo $cat; ?> images</h4>
                                <input type="file" name="<?php echo $inputId; ?>[]" id="<?php echo $inputId; ?>" accept="image/*" multiple>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="form-group full" style="display:flex; justify-content:flex-end; gap:15px; margin-top:30px;">
                            <button type="button" class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Cancel</button>
                            <button type="submit" class="btn-primary" style="padding: 15px 30px; font-size: 16px;">
                                <i class="fa-solid fa-floppy-disk"></i> Save Complete Project
                            </button>
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
