<?php
session_start();
include('includes/db_connect.inc');
$name = $_POST['name'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$dbLogin = "SELECT * FROM users WHERE username=?";
$stmtLogin = $conn->prepare($dbLogin);
$stmtLogin->bind_param("s", $name);
$stmtLogin->execute();
$resultLogin = $stmtLogin->get_result();
$row =mysqli_fetch_assoc($resultLogin);
if (sha1($password) <> $row["password"]) {
    $_SESSION['flash_error_id'] = 3;
    $_SESSION['flash_error'] = "Could not find username or password";

    header('Location: login.php');
    exit;
} else {
    $_SESSION['userName'] = $row['username'];
    $_SESSION['userID'] = $row['user_id'];
    header('Location: index.php');
}

?>