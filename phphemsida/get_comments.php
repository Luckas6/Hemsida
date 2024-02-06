<?php
include 'db_connection.php';

// Fetch comments from the database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $connection->query($sql);

// Convert the result into an array
$comments = $result->fetch_all(MYSQLI_ASSOC);

// Send comments as JSON
header('Content-Type: application/json');
echo json_encode($comments);
?>