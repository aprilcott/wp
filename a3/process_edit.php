<?php
session_start();
include('includes/db_connect.inc');
$row = $_SESSION['editRow'];
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$rate = $_POST['rate-p/h'];
$level = $_POST['level'];
$newImageName = $row['image_path'];
$sql = "UPDATE skills SET title=?, description=?, category=?, rate_per_hr=?, level=? WHERE skill_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $title, $description, $category, $rate, $level, $row['skill_id']);
$stmt->execute();
$uploadDirectory =  'assets/images/skills/';
if ($stmt->affected_rows > 0) {
    $newImagePath = $row['image_path'];
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory)) {
        header('Location: details.php?id='.$sqlImageIndex);
    } else {
    }
} else {
}

$stmt->close();
?>