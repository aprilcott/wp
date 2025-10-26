<?php
include('includes/db_connect.inc');
$name = $_POST['name'];
$bio = $_POST['bio'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = date(('d-m-Y'));
$sql = "INSERT INTO `users`(`username`, `email`, `password`, `bio`, `joined_at`) VALUES ('?','?','?','?','?')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $password, $bio, $date);
$stmt->execute();
if ($stmt->affected_rows > 0) {
        header('Location: details.php?id='.$sqlImageIndex);
} else {
}

$stmt->close();
?>