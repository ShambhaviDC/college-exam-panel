<?php
include "db.php";

$sem = $_POST['sem'];
$dept = $_POST['dept'];
$subject = $_POST['subject'];
$internal1 = $_POST['internal1'];
$internal2 = $_POST['internal2'];

$external1 = $_POST['external1'];
$ex1_college = $_POST['ex1_college'];
$ex1_email = $_POST['ex1_email'];
$ex1_contact = $_POST['ex1_contact'];
$ex1_experience = $_POST['ex1_experience'];

$external2 = $_POST['external2'];
$ex2_college = $_POST['ex2_college'];
$ex2_email = $_POST['ex2_email'];
$ex2_contact = $_POST['ex2_contact'];
$ex2_experience = $_POST['ex2_experience'];

$sql = "INSERT INTO panels 
(sem, dept, subject, internal1, internal2,
external1, ex1_college, ex1_email, ex1_contact, ex1_experience,
external2, ex2_college, ex2_email, ex2_contact, ex2_experience)

VALUES 
('$sem','$dept','$subject','$internal1','$internal2',
'$external1','$ex1_college','$ex1_email','$ex1_contact','$ex1_experience',
'$external2','$ex2_college','$ex2_email','$ex2_contact','$ex2_experience')";

if ($conn->query($sql) === TRUE) {
echo "success";
} else {
echo "ERROR: " . $conn->error;
}
?>
