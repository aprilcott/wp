<?php
session_start();
include('includes/db_connect.inc');
$name = $_POST['name'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$dbLogin = "SELECT * FROM users WHERE username=? and password=?";
$stmtLogin = $conn->prepare($dbLogin);
$stmtLogin->bind_param("ss", $name, $password_hash);
$stmtLogin->execute();
$resultLogin = $stmtLogin->get_result();

$row =mysqli_fetch_assoc($resultLogin);
if (empty($row)) {
    $_SESSION['flash_error'] = "Username or password is incorrect";
    $_SESSION['flash_error_id'] = 3;
    header('Location: login.php');
    exit;
} else {
    $_SESSION['flash_error'] = "Login succesful";
    header('Location: login.php');
}

?>