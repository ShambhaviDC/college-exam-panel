<?php
$conn = new mysqli("localhost", "root", "", "exam_panel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
