<?php
//print($SERVER['PHP_SELF']);
//var_dump($_SERVER);
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "skillswap";
    
    } else {
    $servername = "talsprddb02.int.its.rmit.edu.au";
    $username = "s4176756";
    $password = "8Ba1l!<3";
    $dbname = "s4176756";
    }
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    print("help");
    die("Connection failed: ". $conn->connect_error);
}
?>