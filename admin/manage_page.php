<?php
require_once 'config/db.php';

$page_target = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageTitle = 'Manage ' . ucfirst($page_target) . ' Page';
$currentPage = 'page_' . $page_target;

include 'includes/header.php';
include 'includes/sidebar.php';

$success_msg = '';
$error_msg = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_content'])) {
    if (isset($_POST['content']) && is_array($_POST['content'])) {
        $stmt = $conn->prepare("UPDATE page_content SET content_value = ? WHERE page_name = ? AND section_key = ?");
        
        $success = true;
        foreach ($_POST['content'] as $section_key => $content_value) {
            $stmt->bind_param("sss", $content_value, $page_target, $section_key);
            if (!$stmt->execute()) {
                $success = false;
            }
        }
        $stmt->close();
        
        if ($success) {
            $success_msg = ucfirst($page_target) . " page content updated successfully!";
        } else {
            $error_msg = "Error updating some content. Please try again.";
        }
    }
}

// Fetch current content
$content_data = [];
$stmt = $conn->prepare("SELECT section_key, content_value FROM page_content WHERE page_name = ?");
$stmt->bind_param("s", $page_target);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $content_data[$row['section_key']] = $row['content_value'];
}
$stmt->close();

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
            <h1 style="margin:0;">Manage <?php echo ucfirst($page_target); ?> Page</h1>
            <p style="color:var(--text-muted); margin-top:5px;">Edit the text content that appears on the frontend <?php echo $page_target; ?> page.</p>
        </div>

        <div class="table-wrapper" style="padding: 30px;">
            <form action="manage_page.php?page=<?php echo $page_target; ?>" method="POST">
                <input type="hidden" name="save_content" value="1">
                
                <?php if ($page_target == 'home'): ?>
                    
                    <h3 style="margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Hero Section</h3>
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Hero Title <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="content[hero_title]" value="<?php echo val('hero_title', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Hero Description <span style="color:#ef4444;">*</span></label>
                        <textarea name="content[hero_desc]" rows="3" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px; font-family:inherit;"><?php echo val('hero_desc', $content_data); ?></textarea>
                    </div>

                    <h3 style="margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Statistics Section</h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 1 Value</label>
                            <input type="text" name="content[stat_projects]" value="<?php echo val('stat_projects', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 1 Label</label>
                            <input type="text" name="content[stat_projects_label]" value="<?php echo val('stat_projects_label', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 2 Value</label>
                            <input type="text" name="content[stat_experience]" value="<?php echo val('stat_experience', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 2 Label</label>
                            <input type="text" name="content[stat_experience_label]" value="<?php echo val('stat_experience_label', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 3 Value</label>
                            <input type="text" name="content[stat_clients]" value="<?php echo val('stat_clients', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 3 Label</label>
                            <input type="text" name="content[stat_clients_label]" value="<?php echo val('stat_clients_label', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 4 Value</label>
                            <input type="text" name="content[stat_satisfaction]" value="<?php echo val('stat_satisfaction', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                        <div class="form-group">
                            <label style="display:block; margin-bottom:8px; font-weight:500;">Stat 4 Label</label>
                            <input type="text" name="content[stat_satisfaction_label]" value="<?php echo val('stat_satisfaction_label', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        </div>
                    </div>

                <?php elseif ($page_target == 'about'): ?>
                    
                    <h3 style="margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Main About Section</h3>
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Main Heading <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="content[main_heading]" value="<?php echo val('main_heading', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Sub Heading <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="content[sub_heading]" value="<?php echo val('sub_heading', $content_data); ?>" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Main Text Content <span style="color:#ef4444;">*</span></label>
                        <textarea name="content[main_text]" rows="8" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px; font-family:inherit;"><?php echo val('main_text', $content_data); ?></textarea>
                    </div>
                    
                    <h3 style="margin-bottom: 20px; color: var(--primary-color); border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Vision & Mission</h3>
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Vision Text <span style="color:#ef4444;">*</span></label>
                        <textarea name="content[vision_text]" rows="3" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px; font-family:inherit;"><?php echo val('vision_text', $content_data); ?></textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 30px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Mission Text <span style="color:#ef4444;">*</span></label>
                        <textarea name="content[mission_text]" rows="3" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px; font-family:inherit;"><?php echo val('mission_text', $content_data); ?></textarea>
                    </div>

                <?php else: ?>
                    <p>Page configuration not found.</p>
                <?php endif; ?>

                <?php if(in_array($page_target, ['home', 'about'])): ?>
                <button type="submit" class="btn-primary" style="padding: 10px 25px;">
                    <i class="fa-solid fa-floppy-disk"></i> Save Changes
                </button>
                <?php endif; ?>
            </form>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
