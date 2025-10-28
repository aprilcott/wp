<?php
include("includes/db_connect.inc");
$search = '%' . $conn->real_escape_string($_POST['search']) . '%'; 
$search = strtolower($search); 
$sql = "SELECT skill_id FROM skills WHERE LOWER(title) LIKE ? OR LOWER(description) LIKE ?"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param('ss', $search, $search); 
$stmt->execute(); 
$result = $stmt->get_result(); 
$row = $result->fetch_assoc();
$return = $_SESSION["returnPage"];
if ($row) {
header('Location: details.php?id="' . $row['skill_id'] . '"');
} else {
    header('Location: ' . $return);
}
?>