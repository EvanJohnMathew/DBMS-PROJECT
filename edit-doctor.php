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


    <!-- Update Doctor Name -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="dname">Doctor Name:</label>
                <input type="text" name="dname" id="dname" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Gender -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="dgender">Doctor Gender:</label>
                <input type="text" name="dgender" id="dgender" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>


    <!-- Update Doctor Specialization -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="specialization">Doctor Specialization:</label>
                <input type="text" name="specialization" id="specialization" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Contact -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="dcontact">Doctor Contact:</label>
                <input type="text" name="dcontact" id="dcontact" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Rating -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="rating">Doctor Rating:</label>
                <input type="text" name="rating" id="rating" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Review -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="review">Doctor Review:</label>
                <input type="text" name="review" id="review" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Hospital -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="hospital">Doctor Hospital:</label>
                <input type="text" name="hospital" id="hospital" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Patient -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="patient">Doctor Patient:</label>
                <input type="text" name="patient" id="patient" required>
            </div>
            <div class="specifacation-button">
                <button type="submit" class="btn">Update</button>
            </div>
        </fieldset>
    </form>

    <!-- Update Doctor Medical Record -->
    <form action="edit-doctor.php" method="post" class="inform">
        <fieldset>
            <div class="input-specification">
                <label for="did">Doctor ID:</label>
                <input type="text" name="did" id="did" required>
                <label for="medical_rec">Doctor Medical Record:</label>
                <input type="text" name="medical_rec" id="medical_rec" required>
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
    if(isset($_POST['did'])) {
        $did = $_POST['did'];
        $value = $_POST['dname'];
        $field = "dname";
    } elseif(isset($_POST['dname'])) {
        $did = $_POST['did'];
        $value = $_POST['dname'];
        $field = "dname";
    } elseif(isset($_POST['dgender'])) {
        $did = $_POST['did'];
        $value = $_POST['dgender'];
        $field = "dgender";
    } elseif(isset($_POST['specialization'])) {
        $did = $_POST['did'];
        $value = $_POST['specialization'];
        $field = "specialization";
    } elseif(isset($_POST['dcontact'])) {
        $did = $_POST['did'];
        $value = $_POST['dcontact'];
        $field = "dcontact";
    } elseif(isset($_POST['rating'])) {
        $did = $_POST['did'];
        $value = $_POST['rating'];
        $field = "rating";
    } elseif(isset($_POST['review'])) {
        $did = $_POST['did'];
        $value = $_POST['review'];
        $field = "review";
    } elseif(isset($_POST['hospital'])) {
        $did = $_POST['did'];
        $value = $_POST['hospital'];
        $field = "hospital";
    } elseif(isset($_POST['patient'])) {
        $did = $_POST['did'];
        $value = $_POST['patient'];
        $field = "patient";
    } elseif(isset($_POST['medical_rec'])) {
        $did = $_POST['did'];
        $value = $_POST['medical_rec'];
        $field = "medical_rec";
    }

    // Prepare SQL statement to update doctor information
    $sql = "UPDATE doctor SET $field = ? WHERE did = ?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $value, $did);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Doctor information updated successfully";
    } else {
        echo "Error updating doctor information: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
