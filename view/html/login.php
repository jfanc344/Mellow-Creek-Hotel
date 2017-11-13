<?php
session_start();

// if any user type is logged in then go to home//
if(isset($_SESSION['Username'])) {
header('Location: ./mellowcreek.php');
}
if(isset($_SESSION['Username_manager'])) {
  header('Location: ./mellowcreek.php');
}
  if(isset($_SESSION['Username_service'])) {
    header('Location: ./mellowcreek.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
  <title> Login</title>
  <?php include('tags/header.html'); ?>
</head>

<body>
  <div id="header">
    <img src="../images/logo2.png" alt="logo">
  </div>

  <ul>
    <div id="ulconteent">
    <li><a href="mellowcreek.php">HOME</a></li>
    <li><a href="news.php">NEWS</a></li>
    <li><a href="gallery.php">GALLERY</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <li><a href="contact.php">CONTACT US</a></li>
  </div>
    <div class="navright">
    <div class="dropdown">
      <form action="register.php" >
      <button class="dropbtn"><div class="iconProfile"><img src="../images/icons/Register.png" alt="register">
      </div>SIGN UP
      </button>
    </form>
    </div>
    <div class="dropdown">
      <button class="dropbtn"><div class="iconProfile"><img src="../images/icons/chechin.png" alt="login">
      </div>LOGIN
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="login.php">Member</a>
        <a href="login_service.php">Customer Service</a>
        <a href="login_manager.php">Admin/Manager</a>
      </div>
    </div>
  </div>
  </ul>

  <div id="container">
    <div id="backgroundimg2">

<div id="registerForm">
  <p class="formtitle">LOG IN</p>
  <div class="errorbox">
     <p class="errortxt">
        <?php
        if(isset($_SESSION['login_error'])) {
          //the user has previosly attempted a logged in
          echo 'Wrong username or password, try again';
          unset($_SESSION['login_error']);
        }
        ?>
      </p>
  </div>
<form action="../../controller/loginprocess.php" method="post">
  <label><b>Username:</b></label>
  <input type="text" name="Username" id="Username">
  <label><b>Password:</b></label>
  <input type="password" name="Password" id="Password">
  <button class="formbtn" type="submit" name="login" id="login" value="login">Log in</button>
</form>
</div>
    </div>

      </div>

      <?php
    include('tags/footer.html');
    ?>
</body>


</html>
