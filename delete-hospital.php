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

// Check if hid is provided
if(isset($_GET['hid'])) {
    // Escape the hid to prevent SQL injection
    $hid = mysqli_real_escape_string($conn, $_GET['hid']);

    // SQL query to delete record
    $sql = "DELETE FROM hospital WHERE hid = $hid";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: manage-hospital.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No hid provided";
}

// Close connection
$conn->close();
?>
