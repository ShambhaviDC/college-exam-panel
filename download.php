<?php
include "db.php";

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=Exam_Panel_List.csv");

$output = fopen("php://output", "w");

fputcsv($output, array("Semester","Department","Subject","Internal1","Internal2","External1","External2"));

$result = $conn->query("SELECT * FROM panels");

while($row = $result->fetch_assoc()){
    fputcsv($output, $row);
}

fclose($output);
exit;
?>
