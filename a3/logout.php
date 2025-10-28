<?php
session_start();
$return = $_SESSION["returnPage"];
$prev = $_SESSION["Previous-page"];
session_destroy();
    if ($return == "details.php") {
    header('Location: ' . $prev);
    } else {
    header('Location: ' . $return);
    }
?>