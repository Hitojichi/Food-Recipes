<?php

  include 'config.php';

  error_reporting(0);

  session_start();

  if(isset($_SESSION['username'])) {
    header("Location: index.php");
  }

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = md5($_POST['password']);
    $repwd    = md5($_POST['repwd']);

    if ($password == $repwd) {
      
      $sql    = "SELECT * FROM user WHERE email='$email'";
      $result = mysqli_query($conn, $sql);

      if(!$result -> num_rows > 0) {
        
        $sql    = "INSERT INTO user (username, email, phone, password)
                   VALUES ('$username', '$email', '$phone', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result) {
          
          header("Location: login.php");
          $username           = "";
          $email              = "";
          $phone              = "";
          $_POST['password']  = "";
          $_POST['repwd']     = "";
        } else {
          
          echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
      } else {

        echo "<script>alert('Woops! Email Sudah Terdaftar')</script>";
      }
    } else {

      echo "<script>alert('Password Tidak Sesuai')</script>";
    }
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Food-Recipes-userlogin</title>

      <link rel="stylesheet" type="text/css" href="../css/signup.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
   <div class="content">
    <div class="navigation-bar" id="help">
      <div id="navigation-container">
        <ul id="ra">
          <li><a href="../index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href = "signup.php">SignUp</a></li>
        </ul>
      </div>
    </div> 
  </div>
  <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:50px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
    <form name="loginuser"action="" method="POST">
                <input type="text"  name="username" placeholder="Your Username.." required>
                <input type="email"  name="email" placeholder="Your Email.." required
                <input type="number"  name="phone"placeholder="Your mobile number.." required>
                <input type="password" name="password"  placeholder="Enter password.." required>
                <input type="password" name="repwd"  placeholder="Re-enter password.." required>
                <button name="submit" id="s" class="btn">Register</button>
      <a style="color:white;" href="login.php"><p>Already a user? Login</p></a>
    </form>
  </div>
  <br><br>
  <div class="footer">
    <div class="navigation-bar">
      <div id="navigation-container">
        <ul>
          <li>
            <img src="../image/logo.gif">
  </li>
  <li>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  </li>
  <li>
    Contact Us:
    Email:foodrecipes@gmail.com
  </li>
  </ul>
    </div>
</div> 
</div>
  </body>
</html>
              
