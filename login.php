<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="styleslog.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="login.php" method ="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="forgetpass.php">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="signup.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>

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




if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $username = $_POST["email"];
    $password = $_POST["password"];


    $sql = "select * from logindetails where email = '$username' and PASSWORD = '$password'";  
    $result = mysqli_query($conn, $sql);  
 
    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);  
           
    if($count >0){        

        header("Location: dashboard.php");
        echo "<script>alert('Login successful!');</script>";
        exit;
    } else {

        echo "<script>alert('Login unsuccessful!');</script>";
        header("Location: signup.php");
        exit;
    }
} 
?>
