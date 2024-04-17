<?php

session_start();


$servername = "localhost";
$username = "root"; 
$password = "";
$database = "pulsepointpro";


$con = mysqli_connect($servername, $username, $password, $database);


if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

function getUserCount($con) {
    $sql = "SELECT COUNT(*) as total FROM logindetails";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row["total"];
    return $count;
}

function getDoctorCount($con) {
    $sql = "SELECT COUNT(*) as total FROM doctor";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row["total"];
    return $count;
}

function getAppointmentCount($con) {
    $sql = "SELECT COUNT(*) as total FROM appointments";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row["total"];
    return $count;
}

function getPatientCount($con) {
    $sql = "SELECT COUNT(*) as total FROM patient";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row["total"];
    return $count;
}

function getHospitalCount($con) {
    $sql = "SELECT COUNT(*) as total FROM hospital";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row["total"];
    return $count;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/style.css">
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
        <div class="carddoctor">
            <a href="user.php" class="myprofile-link">
                <div class="myprofile">
                    <img src="images/PngItem_1468479.png" alt="" srcset="">
                    <p>Manage Users</p>
                    <p>Total Users: <?php echo getUserCount($con); ?></p>
                </div>
            </a>

            <a href="editdocto.php" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/OQ6UTW0.jpg" alt="">
                    <p>Manage Doctors</p>
                    <p>Total Doctors: <?php echo getDoctorCount($con); ?></p>
                </div>
            </a>

            <a href="manage-appointment.php" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/calender.jpg" alt="">
                    <p>Hospital Appointments</p>
                    <p>Appointments: <?php echo getAppointmentCount($con); ?></p>
                </div>
            </a>

            <a href="patient.php" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/patient.jpg" alt="">
                    <p>Patients</p>
                    <p>Patients Record collected: <?php echo getPatientCount($con); ?></p>
                </div>
            </a>

            <a href="manage-hospital.php" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/hospital.jpg" alt="">
                    <p>Hospital</p>
                    <p>Hospitals: <?php echo getHospitalCount($con); ?></p>
                </div>
            </a>
        </div>
    </div>
    <script src="js/manage hospitals.js"></script>
    <script src="js/manage appoointments.js"></script>
    <script src="js/manage doctor.js"></script>
</body>
</html>
