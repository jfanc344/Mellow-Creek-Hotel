<?php
session_start();

   ?>

<!DOCTYPE html>
<html>
<head>
  <title> Contact Page </title>
  <?php include('tags/header.html'); ?>
</head>

<body>

  <div id="header">
    <img src="../images/logo2.png" alt="logo">
  </div>


  <?php

   if(isset($_SESSION['Username'])) {
     include('nav/navUser.html');
} else {
include('nav/navAnonymous.html');
}
?>

<div id="container">
  <article>
    <h1 class="heading" style="padding-bottom:1.5em;text-align:center;">Contact US</h1>

    <div id="section">
      <div class="leftside">
      <p class="sansserif"> <strong>Telephone:</strong> (+61)7/84736273 </P>
        <br>
        <p class="sansserif"> <strong>Fax:</strong> (+61)7/23453535 </P>
          <br>
          <p class="sansserif"> <strong>Email:</strong> mellowcreek@gmail.com</P>
            <br>
            <p class="sansserif"> <strong>You want to book by phone ?:</strong> 844 523 2167 *</P>
              <p class="sansserif">  (RESERVATION OFFICE NUMBER)</P>
                <br>
      </div>
      <div class="rightside">
        <div id="aboutimg">
   <img src="../images/gallery/Hotel.jpg" ></img>
 </div>
      </div>
    </div>

    <div id="section" style="margin-top:3em;">
    <p class="sansserif" >  If you want to send us feedback or ask as a question you can use the form below.</p>
    </div>

    <div id="registerForm" style="width: 70%;">
      <p class="formtitle">Feedback/Question Form </p>

    <form  action="../../controller/insertproccess.php" method="post">

      <label><b>Your Name:</b></label>
      <input type="text" placeholder="enter your name.." name="name">

      <label><b>Email:</b></label>
      <input type="text" placeholder="email.." name="Email">

      <label><b>Feedback/Question(s):</b></label>
      <textarea type="text" placeholder="enter text.." name="feedback" rows="14"></textarea>

      <input type="hidden" name="action_type" value="feedback"/>

      <button class="formbtn" type="submit">Submit</button>
    </form>
    </div>
    <!--***************************************************MODALS*********************************-->
    <?php include('modals/loginmodals.php'); ?>
  </article>
</div>
  <?php
include('tags/footer.html');
?>

</body>

</html>
