<?php

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['127.0.0.1:5500']) {
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skillswap"; 
} else {
    $servername = "talsprddb02.int.its.rmit.edu.au";
    $username = "s4176756";
    $password = "8Ba1l!<3";
    $dbname = "s4176756";
}
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}