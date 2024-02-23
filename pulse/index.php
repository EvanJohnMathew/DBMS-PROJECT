<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="index.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email" id="email"required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" id="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
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
    if (isset($_POST['email']) && isset($_POST['password'])) {
      // Replace these with your actual database connection details
      $servername = "localhost";
      $username = "root";
      $password = '';
      $dbname = "pulsepointpro";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Prepare and execute query
      $sql = "SELECT * FROM logindetails WHERE email = ? ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $result = $stmt->get_result();

      // Check if user exists
      if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (($_POST['password']==$user['PASSWORD'])) {
          
          // Start session and store user data (replace with secure session management)
        //   session_start();
        //   $_SESSION['user_id'] = $user['id'];
        //   $_SESSION['email'] = $user['email'];
        ?>

    <script>window.location="home.php?id=$user[id]";</script>
    ?><?php
        } else {
          echo "<script>alert('Invalid Password');</script>";
        }
      } else {
        echo "<script>alert('Invalid Email');</script>";
      }

      // Close connection
      $conn->close();
    }
  ?>

