<?php
// Database connection for Office 1
$host = 'localhost';
$db = 'feedback_system'; // Database for Office 1
$user = 'root'; // replace with your DB username
$pass = ''; // replace with your DB password

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete feedback based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM feedback1 WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        // Successfully deleted, do nothing
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
