<?php
include('includes/db_connect.inc');
$name = $_POST['name'];
$bio = $_POST['bio'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = date(('Y-m-d HH:MM:SS'));
$sql = "INSERT INTO `users`(`username`, `email`, `password`, `bio`, `joined_at`) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $password, $bio, $date);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}
if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}
if ($stmt->affected_rows > 0) {
        header('Location: index.php');
} else {
    print("failed");
}

$stmt->close();
?>