<?php
session_start();
$row = $_SESSION["editRow"];
include('includes/db_connect.inc');
$sql = "delete FROM skills where skill_id = ?";
$stmt = $conn->prepare($sql);
if (file_exists("assets/images/skills/" . $row["image_path"])) {
    unlink("assets/images/skills/" . $row["image_path"]);
}
$stmt->bind_param("i", $row['skill_id']);
$stmt->execute();
header('Location: skills.php');
?>