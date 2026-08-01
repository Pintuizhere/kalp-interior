<?php
$pageTitle = 'Categories';
$currentPage = 'categories';
include 'includes/header.php';
include 'includes/sidebar.php';
require_once 'config/db.php';

$success_msg = '';
$error_msg = '';

// Handle POST request to add a new category
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_category'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));

    if (!empty($name)) {
        $stmt = $conn->prepare("INSERT INTO categories (name, slug) VALUES (?, ?)");
        if ($stmt) {
            $stmt->bind_param("ss", $name, $slug);
            if ($stmt->execute()) {
                $success_msg = "Category added successfully!";
            } else {
                $error_msg = "Database error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error_msg = "Database error: " . $conn->error;
        }
    }
}

// Handle GET request to delete a category
if (isset($_GET['delete_id'])) {
    $delete_id = (int)$_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            $success_msg = "Category deleted successfully!";
        } else {
            $error_msg = "Error deleting category.";
        }
        $stmt->close();
    }
}

// Fetch categories
$cat_query = "SELECT * FROM categories ORDER BY created_at DESC";
$cat_result = $conn->query($cat_query);
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

        <div class="page-header">
            <h1>Categories</h1>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
            
            <!-- ADD CATEGORY FORM -->
            <div class="table-wrapper" style="align-self: start; padding: 25px;">
                <h3 style="margin-top:0; margin-bottom: 20px; font-size: 16px;">Add New Category</h3>
                <form action="categories.php" method="POST">
                    <input type="hidden" name="add_category" value="1">
                    
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:500;">Name <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="name" required style="width:100%; padding:10px; border:1px solid var(--border-color); border-radius:5px;">
                        <p style="font-size: 11px; color: var(--text-muted); margin-top: 5px;">The name is how it appears on your site.</p>
                    </div>

                    <button type="submit" class="btn-primary" style="padding: 10px 20px; width:100%; justify-content:center;">
                        Add New Category
                    </button>
                </form>
            </div>

            <!-- MANAGE CATEGORIES TABLE -->
            <div class="table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($cat_result && $cat_result->num_rows > 0): ?>
                            <?php while($cat = $cat_result->fetch_assoc()): ?>
                            <tr>
                                <td><strong style="color:var(--text-dark);"><?php echo htmlspecialchars($cat['name']); ?></strong></td>
                                <td style="color:var(--text-muted);"><?php echo htmlspecialchars($cat['slug']); ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="categories.php?delete_id=<?php echo $cat['id']; ?>" class="btn-icon delete" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" style="text-align:center; padding: 20px;">No categories found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
