<?php
session_start();

   ?>

<!DOCTYPE html>
<html>
<head>
  <title> Contact Page </title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/ds8.css">
  <script src="../js/java.js" type="text/javascript" defer="defer"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="../js/ajax.js" type="text/javascript" defer="defer"></script>
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


      <label><b>Your Name:</b></label>
      <input type="text" placeholder="enter your name.." name="name" id="name">

      <label><b>Email:</b></label>
      <input type="text" placeholder="email.." name="Email" id="Email">

      <label><b>Feedback/Question(s):</b></label>
      <textarea type="text" placeholder="enter text.." name="feedback" rows="14" id="feedback"></textarea>

      <input type="button" class="formbtn" value="Send" style="display:inline;"  id="call_back_btn"/>
      <textarea id="responseText" rows="8"></textarea>
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
