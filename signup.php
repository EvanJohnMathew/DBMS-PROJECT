<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pulsepointpro");

if(isset($_POST['signup'])) {

  $name = $_POST['fullname'];
  $username = $_POST[ 'username' ];
  $email = $_POST['email'];
  $password = $_POST['password']; 
  $dob = $_POST['dob'];
  $usertype = $_POST['user_type'];
  $gender = $_POST['gender_option']; 
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $insurance_info = $_POST['insurance_info'];
  $emergency_contact = $_POST['emergency_contact'];

  $query = "INSERT INTO logindetails (fullname,username,email,PASSWORD,dob,usertype,gender,phone,address,insurance_info,emergency_contact) VALUES('$name','$username','$email','$password','$dob','$usertype','$gender','$phone','$address','$insurance_info','$emergency_contact')";
  $query_run = mysqli_query($con, $query);
  
  if($query_run)
  {
    $_SESSION["status"] = "successfully.";
    header("Location: login.php");
  }
  else
  {
    $_SESSION["status"] = "data not inserted";
    header("Location: signup.php");
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="styleslog.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    .input-box input[type="date"] {
      padding-right: 30px;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url(login.jpg) no-repeat;
      background-size: cover;
      background-position: center;
    }

    .toggle-box {
      display: flex; /* Use flexbox */
      justify-content: center; /* Center items horizontally */
      margin-bottom: 20px;
    }

    .toggle-box input[type="radio"] {
      display: none;
    }

    .toggle-box label {
      display: inline-block;
      margin: 0 5px; /* Add margin between labels */
      padding: 15px 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      color: #333;
    }

    .toggle-box label:hover {
      background-color: #f0f0f0;
    }

    .toggle-box input[type="radio"]:checked + label {
      background-color: #007bff;
      color: #fff;
      border-color: #007bff;
    }

  </style>
</head>
<body>
  <div class="wrapper">
    <form action="signup.php" method="post">
      <h1>Sign Up</h1>
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="fullname" id="fullname" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" id="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Email Address" name="email" id="email" required>
        <i class='bx bx-envelope'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" id="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="date" placeholder="Date of Birth" name="dob" id="dob" required style="width: 337px;">
      </div>
      <div class="input-box">
        <i class='bx bxs-user' ></i>
        <select name="gender_option" id="gender-select" class="hidden-select">
          <option class="co" value="" disabled selected>Select Gender</option>
          <option class="co" value="Male">Male</option>
          <option class="co" value="Female">Female</option>
          <option class="co" value="Other">Other</option>
        </select>
      </div>    
      <div class="input-box toggle-box">
        <input type="radio" id="Doctor" name="user_type" value="doctor">
        <label for="doctor">Doctor</label>
        <input type="radio" id="Patient" name="user_type" value="patient">
        <label for="patient">Patient</label>
        <input type="radio" id="Admin" name="user_type" value="admin">
        <label for="admin">Admin</label>
      </div>
      <div class="input-box">
        <input type="tel" placeholder="Phone Number" name="phone" id="phone" required>
        <i class='bx bx-phone'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Address" name="address" id="address" required>
        <i class='bx bx-map'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Insurance Information (optional)" name="insurance_info" id="insurance_info">
        <i class='bx bx-shield'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Emergency Contact (optional)" name="emergency_contact" id="emergency_contact">
        <i class='bx bx-user'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" required> I agree to the <a href="#">Terms and Conditions</a></label>
      </div>
      <button type="submit" name="signup" class="btn">Sign Up</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.php">Log In</a></p>
      </div>
    </form>
  </div>
</body>
</html>

