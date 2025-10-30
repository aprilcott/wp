<?php
session_start();
$return = $_SESSION["returnPage"];
$prev = $_SESSION["Previous-page"];
session_destroy();
header('Location: index.php');
?>