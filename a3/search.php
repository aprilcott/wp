<?php
session_start();
include("includes/db_connect.inc");
$search = '%' . $conn->real_escape_string($_POST['search']) . '%'; 
$search = strtolower($search); 
$sql = "SELECT skill_id FROM skills WHERE LOWER(title) LIKE ? OR LOWER(description) LIKE ? "; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param('ss', $search, $search); 
$stmt->execute(); 
$result = $stmt->get_result(); 
$row = $result->fetch_assoc();
$_SESSION['search'] = $search;
$_SESSION['row'] = $row;

$return = $_SESSION["returnPage"];
if ($row != null) {
header('Location: details.php?id="' . $row['skill_id'] . '"');
} else {
    if ($return == "details.php") {
    header('Location: ' . $_SESSION["Previous-page"]);
    } else {
    header('Location: ' . $return);

    }
}
?>