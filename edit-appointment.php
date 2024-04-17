<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/doctor-edit.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header_dash">

    <div class="loh">
            <img src="images/pulse.png" alt="My Logo" width="200" height="65">
    </div>

    <div class="right_area">
        <a href="index.php" class="logout_btn">Logout</a>
    </div>
    </div>
    <div class="sidebar">

    <div class="myprofile-photo">
        <div class="profile">
            <input type="file" class="my_file" name="" id="">
        </div>
        <h4>Admin</h4>
    </div>


        <a href="dashboard.php"><i class="fa-sharp fa-solid fa-house"></i><span>Home</span></a>
        <a href="#"><i class="fa-solid fa-solid fa-user-doctor"></i><span>Doctors</span></a>
        <a href="editdocto.php" style="display: none;"><i class="fa-solid fa-solid fa-user-doctor"></i><span>Mange Doctors</span></a>
        <a href="add-doctor.php" style="display: none;"><i class="fa-solid fa-solid fa-user-doctor"></i><span>Add Doctor</span></a>
        <a href="user.php"><i class="fa-solid fa-user"></i><span>Users</span></a>
        <a href="#"><i class="fa-solid fa-calendar-check"></i><span>Appointment</span></a>
        <a href="manage-appointment.php" style="display: none;"><i class="fa-solid fa-calendar-check"></i><span>Manage Appointment</span></a>
        <a href="add-appointment.php" style="display: none;"><i class="fa-solid fa-calendar-check"></i><span>Add Appointment</span></a>
        <a href="patient.php"><i class="fa-solid fa-hospital-user"></i><span> Patient</span></a>
        <a href="#"><i class="fa-solid fa-hospital" style="color: #ffffff;"></i><span> Hospitals</span></a>
        <a href="manage-hospital.php" style="display:none;"><i class="fa-solid fa-hospital" style="color: #ffffff;"></i><span> Manage Hospitals</span></a>
        <a href="add-hospital.php" style="display:none;"><i class="fa-solid fa-hospital" style="color: #ffffff;"></i><span> Add Hospitals</span></a>
    </div>
    <div class="content">


    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="diagnosis">Diagnosis:</label>
                <input type="text" name="diagnosis" id="diagnosis" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>


    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="consultation_fees">Consultation Fees:</label>
                <input type="text" name="consultation_fees" id="consultation_fees" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Contact -->
    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="doctor_id">Doctor ID:</label>
                <input type="text" name="doctor_id" id="doctor_id" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Rating -->
    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="doctor_name">Doctor Name:</label>
                <input type="text" name="doctor_name" id="doctor_name" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Review -->
    <form action="edit-appointment.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="appid">Appointment ID:</label>
                <input type="text" name="appid" id="appid" required>
                <label for="appointment_date">Appointment Date:</label>
                <input type="text" name="appointment_date" id="appointment_date" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>
</div>
<script src="js/manage hospitals.js"></script>
<script src="js/manage appoointments.js"></script>
<script src="js/manage doctor.js"></script>
<script src="js/appoointments.js"></script>

</body>
</html>


<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "pulsepointpro"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check which form is submitted and update the corresponding field
    if(isset($_POST['appid'])) {
        $appid = $_POST['appid'];
        $value = $_POST['patient_name'];
        $field = "pname";
    } elseif(isset($_POST['diagnosis'])) {
        $appid = $_POST['appid'];
        $value = $_POST['diagnosis'];
        $field = "diagnosis";
    } elseif(isset($_POST['consultation_fees'])) {
        $appid = $_POST['appid'];
        $value = $_POST['consultation_fees'];
        $field = "consultation_fees";
    } elseif(isset($_POST['doctor_id'])) {
        $appid = $_POST['appid'];
        $value = $_POST['doctor_id'];
        $field = "doctor";
    } elseif(isset($_POST['doctor_name'])) {
        $appid = $_POST['appid'];
        $value = $_POST['doctor_name'];
        $field = "doctor_name";
    } elseif(isset($_POST['appointment_date'])) {
        $appid = $_POST['appid'];
        $value = $_POST['appointment_date'];
        $field = "appointment_date";
    }

    // Prepare SQL statement to update appointment information
    $sql = "UPDATE appointments SET $field = ? WHERE appid = ?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $value, $appid);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Appointment information updated successfully";
    } else {
        echo "Error updating appointment information: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

