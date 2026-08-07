<?php
require 'admin/config/db.php';
$conn->query("ALTER TABLE blogs ADD COLUMN slug VARCHAR(255) AFTER title");
$conn->query("UPDATE blogs SET slug = REPLACE(LOWER(title), ' ', '-') WHERE slug IS NULL OR slug = ''");
echo "Done";
?>
