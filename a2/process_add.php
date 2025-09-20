<?php
include('db_connect.inc');
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$rate = $_POST['rate-p/h'];
$level = $_POST['level'];
$image = 'images/' . $_FILES['image']['name'];
$sqlNewImage = "SELECT COUNT(*) as total FROM skills";
$result = mysqli_query($conn, $sqlNewImage);
$row = mysqli_fetch_assoc($result);
$count = $row["total"];
$sqlImageIndex = $count + 1;
$imgPathInfo = pathinfo($_FILES['image']['name']);
$newImageName = $sqlImageIndex . '.' . $imgPathInfo['extension'];
$sql = "INSERT INTO skills (title, description, category, rate_per_hr, level, image_path) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssds", $title, $description, $category, $rate, $level, $newImageName);
$stmt->execute();
$uploadDirectory =  '/home/sh6/S4176756/public_html/wp/a2/assets/images/skills/';
if ($stmt->affected_rows > 0) {
    $newImagePath = $uploadDirectory . $newImageName;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath)) {
        echo "Image uploaded and database updated successfully.";
    } else {
        echo "Failed to upload the image.";
    }
} else {
    echo "Failed to insert data into the database.";
}

$stmt->close();
?>