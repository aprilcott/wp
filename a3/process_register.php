<?php
session_start();
include('includes/db_connect.inc');
$name = $_POST['name'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];

$dbName = "SELECT * FROM users WHERE username=?";
$dbEmail = "SELECT * FROM users WHERE email=?";
$stmtName = $conn->prepare($dbName);
$stmtName->bind_param("s", $name);
$stmtName->execute();
$resultName = $stmtName->get_result();
$stmtEmail = $conn->prepare($dbEmail);
$stmtEmail->bind_param("s", $email);
$stmtEmail->execute();
$resultEmail = $stmtEmail->get_result();

$row =mysqli_fetch_assoc($resultName);
$row_email =mysqli_fetch_assoc($resultEmail);
print($row_email["email"]);
if (!empty($row) || !empty($row_email)) {
    $_SESSION['flash_error'] = "Email or username is already taken.";
    $_SESSION['flash_bio'] = $bio;
    $_SESSION['flash_error_id'] = 1;
    header('Location: register.php');
    exit;
} else if ($password <> $passwordConfirm) {
    $_SESSION['flash_error'] = "Passwords do not match.";
    $_SESSION['flash_bio'] = $bio;
    $_SESSION['flash_name'] = $name;
    $_SESSION['flash_email'] = $email;
    $_SESSION['flash_error_id'] = 2;
    header('Location: register.php');
    exit;
} else {
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$date = date(('Y-m-d H:i:s'));
$sql = "INSERT INTO `users`(`username`, `email`, `password`, `bio`, `joined_at`) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $password_hash, $bio, $date);
$stmt->execute();
if ($stmt->affected_rows > 0) {
        header('Location: index.php');
} else {
        print("Help me");
}
}
$stmt->close();
?>