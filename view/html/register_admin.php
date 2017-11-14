<?php
session_start();

if(!isset($_SESSION['Username_manager'])) {
 header('Location: login.php');
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

  <?php
  if(isset($_SESSION['Username_manager'])) {
    include('nav/navADMIN.html');
  }
   ?>


  <div id="container">
    <div id="backgroundimg">

<div id="registerForm">
  <p class="formtitle">Sign up Admin/Manager</p>
  <div class="errorbox">
     <p class="hotelmanager"> <?php
     if(isset($_SESSION['register_error'])) {
       //the user has previosly attempted a logged in
       echo 'Please try again';
       unset($_SESSION['register_error']);
     }
     ?> </p>
  </div>
<form id="register" name="register" action="../../controller/insertproccess.php" method="post" onsubmit="return Validate()">

  <label><b>First Name:</b></label>
  <input type="text" placeholder="First name.." name="FirstName" id="FirstName" pattern="[a-zA-Z0-9]+">
  <div id="fname_error" class="val_error"></div>

  <label><b>Last Name:</b></label>
  <input type="text" placeholder="Last Name.." name="LastName" id="LastName" pattern="[a-zA-Z0-9]+">
  <div id="lname_error" class="val_error"></div>

  <label><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" pattern="[a-zA-Z0-9]+">
    <div id="username_error" class="val_error"></div>

    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" pattern="[a-zA-Z0-9]{5,16}" required>
    <div id="pass_error" class="val_error"></div>

    <label><b>Confirm Password:</b></label>
    <input type="password" placeholder="Re-Enter Password" id="password2" name="password2" required >
    <div id="pass2_error" class="val_error"></div>

  <input type="hidden" name="role" value="admin"/>

  <button  class="formbtn"  type="submit">Continue</button>
</form>
</div>
      </div>

      </div>

      <?php
    include('tags/footer.html');
    ?>
</body>


</html>
