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

// Check if appid is provided
if(isset($_GET['appid'])) {
    // Escape the appid to prevent SQL injection
    $appid = mysqli_real_escape_string($conn, $_GET['appid']);

    // SQL query to delete record
    $sql = "DELETE FROM appointments WHERE appid = $appid";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: manage-appointment.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No appid provided";
}

// Close connection
$conn->close();
?>
