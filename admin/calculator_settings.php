<?php
$pageTitle = 'Calculator Settings';
$currentPage = 'calculator';
require_once 'config/db.php';

$success_msg = '';
$error_msg = '';

// Handle POST actions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';
    
    // Breakdowns & PDF Template save
    if ($action == 'save_breakdowns') {
        if (isset($_POST['settings']) && is_array($_POST['settings'])) {
            $stmt = $conn->prepare("UPDATE calculator_settings SET setting_value = ? WHERE setting_key = ?");
            foreach ($_POST['settings'] as $key => $value) {
                $stmt->bind_param("ss", $value, $key);
                $stmt->execute();
            }
            $stmt->close();
            $success_msg = "Settings updated successfully!";
        }
        
        // Handle PDF upload
        if (isset($_FILES['appended_pdf']) && $_FILES['appended_pdf']['error'] == 0) {
            $allowed = ['pdf'];
            $filename = $_FILES['appended_pdf']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (in_array(strtolower($ext), $allowed)) {
                $newname = 'appended_brochure_' . time() . '.pdf';
                $destination = '../assets/images/' . $newname;
                if (move_uploaded_file($_FILES['appended_pdf']['tmp_name'], $destination)) {
                    $pdf_url = 'assets/images/' . $newname;
                    $conn->query("INSERT INTO calculator_settings (setting_key, setting_value) VALUES ('appended_pdf_path', '$pdf_url') ON DUPLICATE KEY UPDATE setting_value='$pdf_url'");
                    $success_msg = "Settings and PDF uploaded successfully!";
                }
            } else {
                $error_msg = "Invalid file type. Only PDF is allowed.";
            }
        }
    }
    
    // Add/Edit Category
    if ($action == 'save_category') {
        $id = (int)($_POST['id'] ?? 0);
        $name = $conn->real_escape_string($_POST['name']);
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
        $icon = $conn->real_escape_string($_POST['icon']);
        
        if ($id > 0) {
            $conn->query("UPDATE calc_categories SET name='$name', slug='$slug', icon='$icon' WHERE id=$id");
        } else {
            $conn->query("INSERT INTO calc_categories (name, slug, icon) VALUES ('$name', '$slug', '$icon')");
        }
        $success_msg = "Category saved!";
    }
    
    // Add/Edit Type
    if ($action == 'save_type') {
        $id = (int)($_POST['id'] ?? 0);
        $category_slug = $conn->real_escape_string($_POST['category_slug']);
        $name = $conn->real_escape_string($_POST['name']);
        $sqft = (int)$_POST['sqft'];
        $icon = $conn->real_escape_string($_POST['icon']);
        
        if ($id > 0) {
            $conn->query("UPDATE calc_types SET category_slug='$category_slug', name='$name', sqft=$sqft, icon='$icon' WHERE id=$id");
        } else {
            $conn->query("INSERT INTO calc_types (category_slug, name, icon, sqft) VALUES ('$category_slug', '$name', '$icon', $sqft)");
        }
        $success_msg = "Type saved!";
    }
    
    // Add/Edit Style
    if ($action == 'save_style') {
        $id = (int)($_POST['id'] ?? 0);
        $name = $conn->real_escape_string($_POST['name']);
        $percent = (float)$_POST['percent_value'];
        $icon = $conn->real_escape_string($_POST['icon']);
        
        if ($id > 0) {
            $conn->query("UPDATE calc_styles SET name='$name', percent_value=$percent, icon='$icon' WHERE id=$id");
        } else {
            $conn->query("INSERT INTO calc_styles (name, icon, percent_value) VALUES ('$name', '$icon', $percent)");
        }
        $success_msg = "Style saved!";
    }
    
    // Add/Edit Package
    if ($action == 'save_package') {
        $id = (int)($_POST['id'] ?? 0);
        $category_slug = $conn->real_escape_string($_POST['category_slug']);
        $name = $conn->real_escape_string($_POST['name']);
        $price = (int)$_POST['price_per_sqft'];
        $pdf_specs = $conn->real_escape_string($_POST['pdf_specs']);
        
        if ($id > 0) {
            $conn->query("UPDATE calc_packages SET category_slug='$category_slug', name='$name', price_per_sqft=$price, pdf_specs='$pdf_specs' WHERE id=$id");
        } else {
            // New packages won't have the SVG out of the box unless added, but keep it simple
            $conn->query("INSERT INTO calc_packages (category_slug, name, price_per_sqft, pdf_specs) VALUES ('$category_slug', '$name', $price, '$pdf_specs')");
        }
        $success_msg = "Package saved!";
    }
    
    // Add/Edit Addon
    if ($action == 'save_addon') {
        $id = (int)($_POST['id'] ?? 0);
        $name = $conn->real_escape_string($_POST['name']);
        $percent = (float)$_POST['percent_value'];
        
        if ($id > 0) {
            $conn->query("UPDATE calc_addons SET name='$name', percent_value=$percent WHERE id=$id");
        } else {
            $conn->query("INSERT INTO calc_addons (name, percent_value) VALUES ('$name', $percent)");
        }
        $success_msg = "Add-on saved!";
    }
}

// Handle GET Actions (Delete)
if (isset($_GET['delete'])) {
    $table = $conn->real_escape_string($_GET['delete']);
    $id = (int)$_GET['id'];
    if (in_array($table, ['calc_categories', 'calc_types', 'calc_styles', 'calc_packages', 'calc_addons'])) {
        $conn->query("DELETE FROM $table WHERE id=$id");
        $success_msg = "Item deleted successfully!";
    }
}

// Fetch all data
$categories = $conn->query("SELECT * FROM calc_categories ORDER BY id ASC");
$types = $conn->query("SELECT * FROM calc_types ORDER BY category_slug ASC, id ASC");
$styles = $conn->query("SELECT * FROM calc_styles ORDER BY percent_value ASC");
$packages = $conn->query("SELECT * FROM calc_packages ORDER BY category_slug ASC, price_per_sqft ASC");
$addons = $conn->query("SELECT * FROM calc_addons ORDER BY id ASC");

$settings = [];
$res = $conn->query("SELECT setting_key, setting_value FROM calculator_settings");
if ($res) {
    while($row = $res->fetch_assoc()) {
        $settings[$row['setting_key']] = $row['setting_value'];
    }
}

include 'includes/header.php';
include 'includes/sidebar.php';
?>
<style>
.tabs-header { display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 2px solid var(--border-color); }
.tab-btn { background: none; border: none; padding: 10px 20px; cursor: pointer; font-size: 14px; font-weight: 500; color: var(--text-muted); border-bottom: 2px solid transparent; margin-bottom: -2px; }
.tab-btn.active { color: var(--primary-color); border-bottom-color: var(--accent-color); }
.tab-content { display: none; }
.tab-content.active { display: block; }
.form-panel { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
.form-group { margin-bottom: 15px; }
.form-label { display: block; margin-bottom: 5px; font-weight: 500; font-size: 13px; }
.form-control { width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 5px; }
.btn-primary { background: var(--accent-color); color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
.admin-table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden; }
.admin-table th, .admin-table td { padding: 15px; text-align: left; border-bottom: 1px solid var(--border-color); }
.admin-table th { background: #f8fafc; font-weight: 600; font-size: 12px; text-transform: uppercase; color: var(--text-muted); }
.action-btns { display: flex; gap: 10px; }
.btn-icon { color: var(--text-muted); transition: 0.3s; }
.btn-icon:hover { color: var(--accent-color); }
.btn-icon.delete:hover { color: #ef4444; }
</style>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        <?php if(!empty($success_msg)): ?>
            <div style="background:#d4edda; color:#155724; padding:15px; border-radius:5px; margin-bottom:20px;">
                <?php echo $success_msg; ?>
            </div>
        <?php endif; ?>
        
        <div class="page-header">
            <h1>Calculator Live Editor</h1>
            <p style="color:var(--text-muted); margin-top:5px;">Manage all variables and pricing for the cost calculator.</p>
        </div>

        <div class="tabs-header">
            <button class="tab-btn active" onclick="openTab(event, 'tab-categories')">Categories</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-types')">Types & SqFt</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-styles')">Design Styles</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-packages')">Packages & PDF</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-addons')">Add-ons</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-breakdowns')">Cost Breakdown</button>
            <button class="tab-btn" onclick="openTab(event, 'tab-pdf-template')">PDF Template</button>
        </div>

        <!-- CATEGORIES TAB -->
        <div id="tab-categories" class="tab-content active">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                <div class="form-panel" style="align-self: start;">
                    <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Add/Edit Category</h3>
                    <form method="POST">
                        <input type="hidden" name="action" value="save_category">
                        <input type="hidden" name="id" id="cat_id" value="0">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="cat_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Icon Class (e.g. fa-solid fa-house)</label>
                            <input type="text" name="icon" id="cat_icon" required class="form-control">
                        </div>
                        <button type="submit" class="btn-primary">Save Category</button>
                        <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="resetForm('cat')">Reset</button>
                    </form>
                </div>
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead><tr><th>Icon</th><th>Name</th><th>Slug</th><th>Action</th></tr></thead>
                        <tbody>
                            <?php while($row = $categories->fetch_assoc()): ?>
                            <tr>
                                <td><i class="<?php echo $row['icon']; ?>"></i></td>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td><?php echo $row['slug']; ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="javascript:void(0)" class="btn-icon" onclick="editCat(<?php echo $row['id']; ?>, '<?php echo addslashes($row['name']); ?>', '<?php echo addslashes($row['icon']); ?>')"><i class="fa-solid fa-pen"></i></a>
                                        <a href="?delete=calc_categories&id=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- TYPES TAB -->
        <div id="tab-types" class="tab-content">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                <div class="form-panel" style="align-self: start;">
                    <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Add/Edit Specific Type</h3>
                    <form method="POST">
                        <input type="hidden" name="action" value="save_type">
                        <input type="hidden" name="id" id="type_id" value="0">
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <select name="category_slug" id="type_cat" class="form-control" required>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Name (e.g. 1 BHK)</label>
                            <input type="text" name="name" id="type_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Default SqFt Area</label>
                            <input type="number" name="sqft" id="type_sqft" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Icon Class</label>
                            <input type="text" name="icon" id="type_icon" required class="form-control">
                        </div>
                        <button type="submit" class="btn-primary">Save Type</button>
                        <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="resetForm('type')">Reset</button>
                    </form>
                </div>
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead><tr><th>Category</th><th>Icon</th><th>Name</th><th>SqFt</th><th>Action</th></tr></thead>
                        <tbody>
                            <?php while($row = $types->fetch_assoc()): ?>
                            <tr>
                                <td><span style="text-transform:uppercase; font-size:10px; padding:3px 8px; background:#eee; border-radius:10px;"><?php echo $row['category_slug']; ?></span></td>
                                <td><i class="<?php echo $row['icon']; ?>"></i></td>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td><?php echo $row['sqft']; ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="javascript:void(0)" class="btn-icon" onclick="editType(<?php echo $row['id']; ?>, '<?php echo addslashes($row['category_slug']); ?>', '<?php echo addslashes($row['name']); ?>', <?php echo $row['sqft']; ?>, '<?php echo addslashes($row['icon']); ?>')"><i class="fa-solid fa-pen"></i></a>
                                        <a href="?delete=calc_types&id=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- STYLES TAB -->
        <div id="tab-styles" class="tab-content">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                <div class="form-panel" style="align-self: start;">
                    <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Add/Edit Design Style</h3>
                    <form method="POST">
                        <input type="hidden" name="action" value="save_style">
                        <input type="hidden" name="id" id="style_id" value="0">
                        <div class="form-group">
                            <label class="form-label">Style Name</label>
                            <input type="text" name="name" id="style_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Price Adjustment % (e.g. -8 for -8%, 15 for +15%)</label>
                            <input type="number" step="0.01" name="percent_value" id="style_pct" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Icon Class</label>
                            <input type="text" name="icon" id="style_icon" required class="form-control">
                        </div>
                        <button type="submit" class="btn-primary">Save Style</button>
                        <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="resetForm('style')">Reset</button>
                    </form>
                </div>
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead><tr><th>Icon</th><th>Style Name</th><th>Adjustment %</th><th>Action</th></tr></thead>
                        <tbody>
                            <?php while($row = $styles->fetch_assoc()): ?>
                            <tr>
                                <td><i class="<?php echo $row['icon']; ?>"></i></td>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td style="color: <?php echo $row['percent_value'] > 0 ? '#166534' : ($row['percent_value'] < 0 ? '#b91c1c' : '#333'); ?>">
                                    <?php echo ($row['percent_value'] > 0 ? '+' : '') . $row['percent_value'] . '%'; ?>
                                </td>
                                <td>
                                    <div class="action-btns">
                                        <a href="javascript:void(0)" class="btn-icon" onclick="editStyle(<?php echo $row['id']; ?>, '<?php echo addslashes($row['name']); ?>', <?php echo $row['percent_value']; ?>, '<?php echo addslashes($row['icon']); ?>')"><i class="fa-solid fa-pen"></i></a>
                                        <a href="?delete=calc_styles&id=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- PACKAGES TAB -->
        <div id="tab-packages" class="tab-content">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                <div class="form-panel" style="align-self: start;">
                    <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Add/Edit Package</h3>
                    <form method="POST">
                        <input type="hidden" name="action" value="save_package">
                        <input type="hidden" name="id" id="pkg_id" value="0">
                        <div class="form-group">
                            <label class="form-label">Category Area</label>
                            <select name="category_slug" id="pkg_cat" class="form-control" required>
                                <option value="standard">Standard (Residential/Commercial)</option>
                                <option value="kitchen">Modular Kitchen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Package Name (e.g. Premium)</label>
                            <input type="text" name="name" id="pkg_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Price per SqFt / RFT (₹)</label>
                            <input type="number" name="price_per_sqft" id="pkg_price" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">PDF Specifications Format (HTML)</label>
                            <textarea name="pdf_specs" id="pkg_pdf" class="form-control" style="font-family:monospace; font-size:12px; min-height:200px;"></textarea>
                            <p style="font-size:11px; color:#666; margin-top:5px;">This HTML is dynamically injected into the downloaded PDF quote.</p>
                        </div>
                        <button type="submit" class="btn-primary">Save Package</button>
                        <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="resetForm('pkg')">Reset</button>
                    </form>
                </div>
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead><tr><th>Category</th><th>Package</th><th>Price</th><th>Action</th></tr></thead>
                        <tbody>
                            <?php while($row = $packages->fetch_assoc()): ?>
                            <tr>
                                <td><span style="text-transform:uppercase; font-size:10px; padding:3px 8px; background:#eee; border-radius:10px;"><?php echo $row['category_slug']; ?></span></td>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td>₹<?php echo number_format($row['price_per_sqft']); ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="javascript:void(0)" class="btn-icon" onclick="editPackage(<?php echo $row['id']; ?>, '<?php echo addslashes($row['category_slug']); ?>', '<?php echo addslashes($row['name']); ?>', <?php echo $row['price_per_sqft']; ?>, `<?php echo htmlspecialchars($row['pdf_specs']); ?>`)"><i class="fa-solid fa-pen"></i></a>
                                        <a href="?delete=calc_packages&id=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ADDONS TAB -->
        <div id="tab-addons" class="tab-content">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
                <div class="form-panel" style="align-self: start;">
                    <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Add/Edit Add-on</h3>
                    <form method="POST">
                        <input type="hidden" name="action" value="save_addon">
                        <input type="hidden" name="id" id="addon_id" value="0">
                        <div class="form-group">
                            <label class="form-label">Add-on Name (e.g. Civil work)</label>
                            <input type="text" name="name" id="addon_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Cost % (of base subtotal)</label>
                            <input type="number" step="0.01" name="percent_value" id="addon_pct" required class="form-control">
                        </div>
                        <button type="submit" class="btn-primary">Save Add-on</button>
                        <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="resetForm('addon')">Reset</button>
                    </form>
                </div>
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead><tr><th>Name</th><th>Percent Value</th><th>Action</th></tr></thead>
                        <tbody>
                            <?php while($row = $addons->fetch_assoc()): ?>
                            <tr>
                                <td><strong><?php echo $row['name']; ?></strong></td>
                                <td>+<?php echo $row['percent_value']; ?>%</td>
                                <td>
                                    <div class="action-btns">
                                        <a href="javascript:void(0)" class="btn-icon" onclick="editAddon(<?php echo $row['id']; ?>, '<?php echo addslashes($row['name']); ?>', <?php echo $row['percent_value']; ?>)"><i class="fa-solid fa-pen"></i></a>
                                        <a href="?delete=calc_addons&id=<?php echo $row['id']; ?>" class="btn-icon delete" onclick="return confirm('Delete?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- COST BREAKDOWN TAB -->
        <div id="tab-breakdowns" class="tab-content">
            <div class="form-panel">
                <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">Cost Breakdown Percentages</h3>
                <p style="font-size:12px; color:#666; margin-bottom: 20px;">Ensure these total up to 100% per category. The system will calculate specific costs out of the subtotal based on these percentages. The remaining percentage automatically goes to 'Decorative'.</p>
                <form method="POST">
                    <input type="hidden" name="action" value="save_breakdowns">
                    
                    <h4 style="margin-bottom:15px; padding-bottom:5px; border-bottom:1px solid #eee;">Residential Breakdown</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom:10px;">
                        <div class="form-group">
                            <label class="form-label">Furniture (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_furniture]" value="<?php echo $settings['bd_residential_furniture'] ?? ($settings['bd_furniture'] ?? 28.5); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Wardrobes (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_wardrobes]" value="<?php echo $settings['bd_residential_wardrobes'] ?? ($settings['bd_wardrobes'] ?? 20.4); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kitchen (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_kitchen]" value="<?php echo $settings['bd_residential_kitchen'] ?? ($settings['bd_kitchen'] ?? 15.5); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">False Ceiling (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_false_ceiling]" value="<?php echo $settings['bd_residential_false_ceiling'] ?? ($settings['bd_false_ceiling'] ?? 9.7); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Electrical (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_electrical]" value="<?php echo $settings['bd_residential_electrical'] ?? ($settings['bd_electrical'] ?? 8.9); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Design (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_design]" value="<?php echo $settings['bd_residential_design'] ?? ($settings['bd_design'] ?? 7.0); ?>" class="form-control breakdown-input res-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Paint (%)</label>
                            <input type="number" step="0.01" name="settings[bd_residential_paint]" value="<?php echo $settings['bd_residential_paint'] ?? ($settings['bd_paint'] ?? 7.5); ?>" class="form-control breakdown-input res-input">
                        </div>
                    </div>
                    <div style="margin-bottom: 30px; font-weight: bold; padding: 10px; background: #eee; display: inline-block; border-radius: 5px;">
                        Residential Total: <span id="res-total">0</span>% (Remaining allocated to 'Decorative')
                    </div>

                    <h4 style="margin-bottom:15px; padding-bottom:5px; border-bottom:1px solid #eee;">Commercial Breakdown</h4>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom:10px;">
                        <div class="form-group">
                            <label class="form-label">Furniture (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_furniture]" value="<?php echo $settings['bd_commercial_furniture'] ?? ($settings['bd_furniture'] ?? 28.5); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Wardrobes (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_wardrobes]" value="<?php echo $settings['bd_commercial_wardrobes'] ?? ($settings['bd_wardrobes'] ?? 20.4); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kitchen (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_kitchen]" value="<?php echo $settings['bd_commercial_kitchen'] ?? ($settings['bd_kitchen'] ?? 15.5); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">False Ceiling (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_false_ceiling]" value="<?php echo $settings['bd_commercial_false_ceiling'] ?? ($settings['bd_false_ceiling'] ?? 9.7); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Electrical (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_electrical]" value="<?php echo $settings['bd_commercial_electrical'] ?? ($settings['bd_electrical'] ?? 8.9); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Design (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_design]" value="<?php echo $settings['bd_commercial_design'] ?? ($settings['bd_design'] ?? 7.0); ?>" class="form-control breakdown-input com-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Paint (%)</label>
                            <input type="number" step="0.01" name="settings[bd_commercial_paint]" value="<?php echo $settings['bd_commercial_paint'] ?? ($settings['bd_paint'] ?? 7.5); ?>" class="form-control breakdown-input com-input">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px; font-weight: bold; padding: 10px; background: #eee; display: inline-block; border-radius: 5px;">
                        Commercial Total: <span id="com-total">0</span>% (Remaining allocated to 'Decorative')
                    </div>

                    <div style="margin-top: 20px;">
                        <button type="submit" class="btn-primary">Save Breakdowns</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- PDF TEMPLATE TAB -->
        <div id="tab-pdf-template" class="tab-content">
            <div class="form-panel">
                <h3 style="margin-top:0; margin-bottom:20px; font-size:16px;">PDF Export Template HTML</h3>
                <p style="font-size:12px; color:#666; margin-bottom: 20px;">Edit the raw HTML of the PDF Quotation here. Be careful, as invalid HTML can break the PDF generation! The IDs in the HTML are used by the system to inject values dynamically.</p>
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="save_breakdowns">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                        <div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label class="form-label" style="margin-bottom:10px;">Append Static PDF (Optional brochure/T&C)</label>
                                <?php if(!empty($settings['appended_pdf_path'])): ?>
                                    <div style="margin-bottom: 10px; font-size: 12px; color: green;">
                                        Currently appended: <a href="../<?php echo $settings['appended_pdf_path']; ?>" target="_blank">View File</a>
                                    </div>
                                <?php endif; ?>
                                <input type="file" name="appended_pdf" accept="application/pdf" class="form-control" style="padding: 5px;">
                                <small style="color: #666; font-size:11px;">Upload a standard PDF to automatically attach it to the end of user estimates.</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label">PDF Export Template HTML</label>
                                <textarea name="settings[pdf_template_html]" id="pdf_template_editor" class="form-control" style="height: 400px; font-family: monospace; font-size: 11px;"><?php echo htmlspecialchars($settings['pdf_template_html'] ?? ''); ?></textarea>
                            </div>
                            <div style="margin-top: 20px;">
                                <button type="submit" class="btn-primary">Save Settings & Upload</button>
                                <button type="button" class="btn-primary" style="background:#ccc; color:#333; margin-left:10px;" onclick="document.getElementById('pdf_preview_frame').srcdoc = document.getElementById('pdf_template_editor').value.replace('display: none;', 'display: block;');">Refresh Preview</button>
                            </div>
                        </div>
                        <div>
                            <h4 style="margin-bottom:10px; font-size: 13px;">Live Preview</h4>
                            <div style="border: 1px solid var(--border-color); border-radius: 5px; overflow: hidden; height: 500px; background: #eee; position: relative;">
                                <?php 
                                    $preview_html = $settings['pdf_template_html'] ?? '';
                                    // Remove display: none so the preview is visible
                                    $preview_html = str_replace('display: none;', 'display: block;', $preview_html);
                                ?>
                                <iframe id="pdf_preview_frame" style="width: 794px; height: 1123px; border: none; transform: scale(0.44); transform-origin: top left; position: absolute; top: 0; left: 0;" srcdoc="<?php echo htmlspecialchars($preview_html); ?>"></iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }
    tablinks = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).classList.add("active");
    evt.currentTarget.classList.add("active");
}

function resetForm(prefix) {
    document.getElementById(prefix+'_id').value = 0;
    if(prefix == 'cat') {
        document.getElementById('cat_name').value = '';
        document.getElementById('cat_icon').value = '';
    }
    if(prefix == 'type') {
        document.getElementById('type_name').value = '';
        document.getElementById('type_sqft').value = '';
        document.getElementById('type_icon').value = '';
    }
    if(prefix == 'style') {
        document.getElementById('style_name').value = '';
        document.getElementById('style_pct').value = '';
        document.getElementById('style_icon').value = '';
    }
    if(prefix == 'pkg') {
        document.getElementById('pkg_name').value = '';
        document.getElementById('pkg_price').value = '';
        document.getElementById('pkg_pdf').value = '';
    }
    if(prefix == 'addon') {
        document.getElementById('addon_name').value = '';
        document.getElementById('addon_pct').value = '';
    }
}

function editCat(id, name, icon) {
    document.getElementById('cat_id').value = id;
    document.getElementById('cat_name').value = name;
    document.getElementById('cat_icon').value = icon;
}
function editType(id, cat, name, sqft, icon) {
    document.getElementById('type_id').value = id;
    document.getElementById('type_cat').value = cat;
    document.getElementById('type_name').value = name;
    document.getElementById('type_sqft').value = sqft;
    document.getElementById('type_icon').value = icon;
}
function editStyle(id, name, pct, icon) {
    document.getElementById('style_id').value = id;
    document.getElementById('style_name').value = name;
    document.getElementById('style_pct').value = pct;
    document.getElementById('style_icon').value = icon;
}
function editPackage(id, cat, name, price, pdf) {
    document.getElementById('pkg_id').value = id;
    document.getElementById('pkg_cat').value = cat;
    document.getElementById('pkg_name').value = name;
    document.getElementById('pkg_price').value = price;
    document.getElementById('pkg_pdf').value = pdf;
}
function editAddon(id, name, pct) {
    document.getElementById('addon_id').value = id;
    document.getElementById('addon_name').value = name;
    document.getElementById('addon_pct').value = pct;
}

// Breakdown Total Calculation
function updateTotals() {
    let resSum = 0;
    document.querySelectorAll('.res-input').forEach(inp => resSum += parseFloat(inp.value || 0));
    const resTotal = document.getElementById('res-total');
    if (resTotal) {
        resTotal.innerText = resSum.toFixed(2);
        resTotal.style.color = (resSum > 100) ? 'red' : '#333';
    }

    let comSum = 0;
    document.querySelectorAll('.com-input').forEach(inp => comSum += parseFloat(inp.value || 0));
    const comTotal = document.getElementById('com-total');
    if (comTotal) {
        comTotal.innerText = comSum.toFixed(2);
        comTotal.style.color = (comSum > 100) ? 'red' : '#333';
    }
}
document.querySelectorAll('.breakdown-input').forEach(inp => inp.addEventListener('input', updateTotals));
updateTotals();
</script>

<?php include 'includes/footer.php'; ?>
