<?php
include 'db_connection.php';


// Retrieve data from the AJAX request
$username = $_POST['username'];
$commentText = $_POST['comment_text'];

// Insert the comment into the database
$sql = "INSERT INTO comments (username, comment_text) VALUES ('$username', '$commentText')";
$connection->query($sql);

// Send a success message (you can customize this)
echo "Comment added successfully";
?>