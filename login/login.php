<?php

  include 'config.php';

  error_reporting(0);

  session_start();

  //untuk tetap masuk ke user
  if(isset($_SESSION['username'])) {
    header("Location: ../main.php");
  }

  if(isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //get query dari database
    $sql    = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result -> num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: ../main.php");
    } else{

      echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
  }

?>

<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <title>Food-Recipes-userlogin</title>

      <link rel="stylesheet" type="text/css" href="../css/userlogin.css">
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
  <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">

    <form name="loginuser" action="" method="POST">
      <input type="email"  name="email" placeholder="Your email address..." value="<?php echo $email; ?>" required>
      <input type="password" name="password" placeholder="Your password.." value="<?php echo $_POST['password']; ?>" required>
      <button id="s" name="submit" class="btn">Submit</button>
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
              
