<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pulsepointpro");

if(isset($_POST['submit'])) {

    $dname = $_POST["dname"];
    $dgender = $_POST["dgender"];
    $specialization = $_POST["specialization"];
    $dcontact = $_POST["dcontact"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];
    $hospital = $_POST["hospital"];
    $patient = $_POST["patient"];
    $medical_rec = $_POST["medical_rec"];

  $query = "INSERT INTO doctor (dname, dgender, specialization, dcontact, rating, review, hospital, patient, medical_rec) 
  VALUES ('$dname', '$dgender', '$specialization', '$dcontact', '$rating', '$review', '$hospital', '$patient', '$medical_rec')";
  $query_run = mysqli_query($con, $query);
  
  if($query_run)
  {
    $_SESSION["status"] = "successfully.";
  }
  else
  {
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
    <title>Add Doctor</title>
    <link rel="stylesheet" href="css/add-doctor.css">
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
        <div class="sebtn">
            <div class="dashbtn">
                <a href="#">
                    <button>home</button>
                </a>
            </div>
        </div>

        <!-- start doctors -->
        <form action="add-doctor.php" method="POST" class="inform">
            <fieldset>
                <div class="input-specification">
                    <label for="dname">Doctor Name</label>
                    <input type="text" required name="dname" id="dname" placeholder="Enter Doctor Name">
                </div>
                <div class="input-specification">
                    <label for="dgender">Doctor Gender</label>
                    <input type="text" required name="dgender" id="dgender" placeholder="Enter Doctor Gender">
                </div>
                <div class="input-specification">
                    <label for="specialization">Doctor Specialization</label>
                    <input type="text" required name="specialization" id="specialization" placeholder="Enter Doctor Specialization">
                </div>
                <div class="input-specification">
                    <label for="dcontact">Doctor Contact</label>
                    <input type="text" required name="dcontact" id="dcontact" placeholder="Enter Doctor Contact">
                </div>
                <div class="input-specification">
                    <label for="rating">Rating</label>
                    <select name="rating" id="rating" required>
                        <option value="">Select Rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="input-specification">
                    <label for="review">Review</label>
                    <input type="text" required name="review" id="review" placeholder="Enter Review">
                </div>
                <div class="input-specification">
                    <label for="hospital">Hospital</label>
                    <input type="text" required name="hospital" id="hospital" placeholder="Enter Hospital">
                </div>
                <div class="input-specification">
                    <label for="patient">Patient</label>
                    <input type="text" required name="patient" id="patient" placeholder="Enter Patient">
                </div>
                <div class="input-specification">
                    <label for="medical_rec">Medical Record</label>
                    <input type="text" required name="medical_rec" id="medical_rec" placeholder="Enter Medical Record">
                </div>
                <div class="specifacation-button">
                    <button type="submit" name="submit" class="btn">Submit</button>
                </div>
            </fieldset>
        </form>
        <!-- end doctors -->
    </div>
    <script src="js/manage hospitals.js"></script>
    <script src="js/manage appoointments.js"></script>
    <script src="js/manage doctor.js"></script>
    <script src="js/specilaization.js"></script>
</body>
</html>


