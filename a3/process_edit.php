<?php
session_start();
include('includes/db_connect.inc');
$row = $_SESSION['editRow'];
$imagePathOg = $row['image_path'];
if ($_FILES != null) {
    $imagePathNew = $_FILES['image']['tmp_name'];
}
$newPath = "assets/images/skills/" . $imagePathOg;
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$rate = $_POST['rate-p/h'];
$level = $_POST['level'];
$sql = "UPDATE skills SET title=?, description=?, category=?, rate_per_hr=?, level=? WHERE skill_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $title, $description, $category, $rate, $level, $row['skill_id']);
$stmt->execute();
 if ($stmt->affected_rows > 0) {
     if (move_uploaded_file($imagePathNew, $newPath)) {
         header("Location: details.php?id='".$row['skill_id']."'");
     } else {
        header("Location: details.php?id='".$row['skill_id']."'");
     }
 } else {
}
$_SESSION['files'] = $newPath;
echo var_dump($_FILES);
$_SESSION['pathNew'] = ($imagePathNew);
$_SESSION['fileInfo'] = $_FILES;
$stmt->close();
?>