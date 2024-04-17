<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulsepointpro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID is provided
if(isset($_GET['id'])) {
    // Escape the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // SQL query to delete record
    $sql = "DELETE FROM doctor WHERE did = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: editdocto.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided";
}

// Close connection
$conn->close();
?>
