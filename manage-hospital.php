<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
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
        <div class="sebtn">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass "></i>
                <input class="search-bar" placeholder="Search..." type="text">
            </div>
            <div class="dashbtn">
                <a href="dasdboard.php">
                    <button>home</button>
                </a>
            </div>
        </div>
        <div class="table">
        <table>
                <tr>
                    <th>ID</th>
                    <th>Hospital Name</th>
                    <th>Location</th>
                    <th>Beds</th>
                    <th>Wards</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
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

                    $sql = "SELECT * FROM hospital"; // Replace 'your_table_name' with the actual name of your table
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["hid"] . "</td>";
                            echo "<td>" . $row["hname"] . "</td>";
                            echo "<td>" . $row["location"] . "</td>";
                            echo "<td>" . $row["beds"] . "</td>";
                            echo "<td>" . $row["wards"] . "</td>";
                            echo "<td>" . $row["contact"] . "</td>";
                            echo "<td><a href='edit-hospital.php?hid=" . $row['hid'] . "' style='background-color: #007bff; color: #fff; padding: 10px 20px; font-size: 14px; text-decoration: none; transition: background-color 0.3s;'>Edit</a></td>";
                            echo "<td><a href='delete-hospital.php?hid=" . $row['hid'] . "' style='background-color: #007bff; color: #fff; padding: 10px 20px; font-size: 14px; text-decoration: none;'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No records found</td></tr>";
                    }

                    $conn->close();
                ?>




            </table>
        </div>
    </div>
    <script src="js/manage hospitals.js"></script>
    <script src="js/manage appoointments.js"></script>
    <script src="js/manage doctor.js"></script>
    <script src="js/appoointments.js"></script>
</body>

</html>
