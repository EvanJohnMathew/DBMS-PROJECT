<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | Example.com</title>
  <link rel="stylesheet" href="styleslog.css">
</head>
<body>
  <div class="wrapper">
    <form action="forgetpass.php" method="post">
      <h1>Forgot Password</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email" id="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="New Password" name="new_password" id="new_password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm New Password" name="confirm_new_password" id="confirm_new_password" required>
      </div>
      <button type="submit" class="btn">Reset Password</button>
    </form>
  </div>
</body>
</html>


<?php

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'pulsepointpro'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST['email'];
  $password = $_POST['confirm_new_password'];
  $newpassword = $_POST['new_password'];

  if ($password == $newpassword) {

      $sql = "UPDATE logindetails SET PASSWORD = ('$password') WHERE email =('$email')";
      if (mysqli_query($conn, $sql)) {
          echo "Record Updated Successfully!";
          header("Location: login.php");
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  } else {

      echo "<script>alert('Passwords do not match');</script>";
  }

}

?>
