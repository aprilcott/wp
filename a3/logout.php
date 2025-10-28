<?php
session_start();
header('Location: ' . $_SESSION["returnPage"]);
$return = $_SESSION["returnPage"];
session_destroy();
header('Location: ' . $return);
?>