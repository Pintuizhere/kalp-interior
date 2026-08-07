<?php
require 'admin/config/db.php';
$sql = "ALTER TABLE news_offers ADD COLUMN offer_badge_text VARCHAR(100) DEFAULT NULL";
if ($conn->query($sql) === TRUE) {
    echo "Column added successfully";
} else {
    echo "Error: " . $conn->error;
}
