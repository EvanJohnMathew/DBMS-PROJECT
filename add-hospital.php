<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/doctor-edit.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        .inform {
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            background-color: #151E2F;
            margin-top: 20px;
            width: 420px;
            height: 630px;
        }
    </style>
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
        <div class="profile-section">
            <form action="add-hospital.php" method="post" class="inform">
                <div class="input-specification">
                    <label for="hospitalname">Hospital Name:</label>
                    <input type="text" id="hospitalname" name="hospitalname" required>
                </div>

                <div class="input-specification">
                    <label for="cont">Contact Number:</label>
                    <input type="tel" id="cont" name="cont" required>
                </div>

                <div class="input-specification">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="input-specification">
                    <label for="wards">Wards</label>
                    <input type="text" id="wards" name="wards" required>
                </div>

                <div class="input-specification">
                    <label for="beds">Beds</label>
                    <input type="text" id="beds" name="beds" required>
                </div>

                <div class="specifacation-button">
                <button type="submit" name="submit" class="btn">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <script src="js/manage hospitals.js"></script>
    <script src="js/manage appoointments.js"></script>
    <script src="js/manage doctor.js"></script>
    <script src="js/patient.js"></script>
</body>

</html>


<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pulsepointpro");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit'])) {

    $hname = $_POST["hospitalname"];
    $location = $_POST["address"];
    $beds = $_POST["beds"];
    $wards = $_POST["wards"];
    $contact = $_POST["cont"];

    $query = "INSERT INTO hospital (hname, location, beds, wards, contact) 
              VALUES ('$hname', '$location', '$beds', '$wards', '$contact')";
    $query_run = mysqli_query($con, $query);
  
    if($query_run) {
        $_SESSION["status"] = "Data inserted successfully.";
    } else {
        $_SESSION["status"] = "Data not inserted.";
    }
}
?>

