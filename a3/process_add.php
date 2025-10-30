<?php
session_start();
include('includes/db_connect.inc');
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$rate = $_POST['rate-p/h'];
$level = $_POST['level'];
$image = 'images/' . $_FILES['image']['name'];
$sqlNewImage = "SELECT skill_id FROM skills ORDER BY skill_id DESC LIMIT 1";
$result = mysqli_query($conn, $sqlNewImage);
$row = mysqli_fetch_assoc($result);
$count = $row["skill_id"] + 1;
$sqlImageIndex = $count;
$imgPathInfo = pathinfo($_FILES['image']['name']);
$newImageName = $sqlImageIndex . '.' . $imgPathInfo['extension'];
$sql = "INSERT INTO skills (skill_id, user_id, title, description, category, rate_per_hr, level, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iissssds", $count, $_SESSION['userID'], $title, $description, $category, $rate, $level, $newImageName);
$stmt->execute();
$uploadDirectory =  'assets/images/skills/';
if ($stmt->affected_rows > 0) {
    $newImagePath = $uploadDirectory . $newImageName;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath)) {
        header('Location: details.php?id='.$sqlImageIndex);
    } else {
        header('Location: index.php');
        
    }
} else {
}

$stmt->close();
?>