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

?><!DOCTYPE html>
<html>
<head>
  <title> Register </title>
  <?php include('tags/header.html'); ?>
  <script src="../js/validation.js" type="text/javascript" defer="defer"></script>
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
    <div id="backgroundimg">

<div id="registerForm">
  <p class="formtitle">Sign up </p>

<form id="register" name="register" action="../../controller/insertproccess.php" method="post" onsubmit="return Validate()">

  <label><b>First Name:</b></label>
  <input type="text" placeholder="First name.." name="FirstName" id="FirstName" pattern="[a-zA-Z0-9]+">
  <div id="fname_error" class="val_error"></div>

  <label><b>Last Name:</b></label>
  <input type="text" placeholder="Last Name.." name="LastName" id="LastName" pattern="[a-zA-Z0-9]+">
  <div id="lname_error" class="val_error"></div>

  <label><b>Email:</b></label>
  <input type="text" placeholder="email.." name="Email" id="Email">
  <div id="email_error" class="val_error"></div>

  <label><b>Date of Birth:</b></label>
  <input type="date" style="margin-left:10%;margin-bottom:1em;" placeholder="date of birth.." name="DOB" id="DOB" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
  <div id="dob_error" class="val_error"></div>

  <label><b>Phone:</b></label>
  <input type="text" placeholder="Phone.." name="Phone" id="Phone" pattern="[0-9]{5,10}">
  <div id="phone_error" class="val_error"></div>

  <label><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" pattern="[a-zA-Z0-9]+">
    <div id="username_error" class="val_error"></div>

    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" pattern="[a-zA-Z0-9]{5,16}">
    <div id="pass_error" class="val_error"></div>

    <label><b>Confirm Password:</b></label>
    <input type="password" placeholder="Re-Enter Password" id="password2" name="password2" >
    <div id="pass2_error" class="val_error"></div>

    <a href="text/terms.php" style="display:in-line; margin-left:10%;">Terms and Conditions</a>
    <input type="checkbox" id="terms" name="terms" onclick="checkTerms()" style="display:in-line;" >

  <input type="hidden" name="action_type" value="add"/>


  <button class="formbtn" id="btncheck" name="submit" type="submit" disabled>Continue</button>
</form>

</div>

</div>
      </div>



      <?php
    include('tags/footer.html');
    ?>




<!--***************************************************MODALS*********************************-->
<?php include('modals/loginmodals.php'); ?>


</body>


</html>
