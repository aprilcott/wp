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
echo "<script>0joikup-989mnhl ,u-987yhgbknlmp0;-[=98uj7yhngbk lm,.;p/'[oiu089hy7g8tkbvonml,p;u0-987yhgtjbkn ml,p;[i0-u98h7ynbkgl m,;.pi[ugdx5rftc 5hr6y7t mfgu,nj console.log('" . $row['username'] . $row['password'] . $password_hash . "')</script";
if (!password_verify($password, $row["password"])) {
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