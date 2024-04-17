<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pulsepointpro"; 


$conn = mysqli_connect($servername, $username, $password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
            <a href="logout.php" class="logout_btn">Logout</a>
        </div>
    </div>

    <div class="sidebar">
        <div class="myprofile-photo">
            <div class="profile">
                <input type="file" class="my_file" name="" id="">
            </div>
            <h4><?php echo $_SESSION['username']; ?></h4>
        </div>

        <a href="index.html"><i class="fa-sharp fa-solid fa-house"></i><span>Home</span></a>
        <a href="#"><i class="fa-solid fa-solid fa-user-doctor"></i><span>Doctors</span></a>
        <a href="add-doctor.html" style="display: none;"><i class="fa-solid fa-solid fa-user-doctor"></i><span>Add Doctor</span></a>
        <a href="user1.html"><i class="fa-solid fa-user"></i><span>Users</span></a>
        <a href="appointment.html"><i class="fa-solid fa-calendar-check"></i><span>Appointment</span></a>
        <a href="patient.html"><i class="fa-solid fa-hospital-user"></i><span> Patient</span></a>
    </div>

    <div class="content">
        <div class="search">
            <div class="dash-btn">
                <a href="index.html"><button>Home</button></a>
            </div>
        </div>

        <div class="carddoctor">
            <a href="user.html" class="myprofile-link">
                <div class="myprofile">
                    <img src="images/PngItem_1468479.png" alt="" srcset="">
                    <p>Manage User</p>
                    <p>click to view/update</p>
                </div>
            </a>

            <a href="editdocto.html" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/OQ6UTW0.jpg" alt="">
                    <p>Find Doctors</p>
                    <p>click to view</p>
                </div>
            </a>

            <a href="appointment.html" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/calender.jpg" alt="">
                    <p>View Appointments</p>
                    <p>click to view</p>
                </div>
            </a>
            <a href="patient.html" class="myprofile-link">
                <div class="myprofile">
                    <img class="myprofile-image" src="images/patient.jpg" alt="">
                    <p>Patient Medical History</p>
                    <p>Click to view</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
