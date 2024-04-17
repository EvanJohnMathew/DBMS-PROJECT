<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pulsepointpro");

if(isset($_POST['submit'])) {
    $doctor_name = $_POST["doctor_name"];
    $patient_name = $_POST["patient_name"];
    $diagnosis = $_POST["diagnosis"];
    $consultation_fees = $_POST["consultation_fees"];
    $doctor_id = $_POST["doctor_id"];
    $appointment_datetime = $_POST["appointment_datetime"];
    $appointment_creation_date = date('Y-m-d');

    $query = "INSERT INTO appointments (doctor_name, pname, diagnosis, consultation_fees, doctor, appointment_date, appointment_creation_date) 
    VALUES ('$doctor_name', '$patient_name', '$diagnosis', '$consultation_fees','$doctor_id', '$appointment_datetime', '$appointment_creation_date')";
    $query_run = mysqli_query($con, $query);
  
    if($query_run) {
        $_SESSION["status"] = "successfully.";
    } else {
        $_SESSION["status"] = "data not inserted";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointment</title>
    <link rel="stylesheet" href="css/add-appointment.css">
    <link rel="stylesheet" href="css/appointment.css">
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
        <form action="add-appointment.php" method="POST" class="inform">
            <fieldset>
                <div class="input-specification">
                    <label for="doctor_name">Doctor Name</label>
                    <input type="text" name="doctor_name" id="doctor_name" placeholder="Enter Doctor Name" required>
                </div>
                <div class="input-specification">
                    <label for="patient_name">Patient Name</label>
                    <input type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name" required>
                </div>
                <div class="input-specification">
                    <label for="diagnosis">Diagnosis</label>
                    <input type="text" name="diagnosis" id="diagnosis" placeholder="Enter Diagnosis" required>
                </div>
                <div class="input-specification">
                    <label for="consultation_fees">Consultation Fees</label>
                    <input type="text" name="consultation_fees" id="consultation_fees" placeholder="Enter Consultation Fees" required>
                </div>
                <div class="input-specification">
                    <label for="doctor_id">Doctor Id</label>
                    <input type="text" name="doctor_id" id="doctor_id" placeholder="Enter Patient Name" required>
                </div>
                <div class="input-specification">
                    <label for="appointment_datetime">Appointment Date / Time</label>
                    <input type="date" name="appointment_datetime" id="appointment_datetime" required>
                </div>
                <div class="specification-button">
                    <button type="submit" name="submit" class="btn">Submit</button>
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




