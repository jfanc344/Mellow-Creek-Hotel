<?php
session_start();

   ?>

<!DOCTYPE html>
<html>
<head>
  <title> About </title>
  <?php include('tags/header.html'); ?>
</head>

<body>

  <div id="header">
    <img src="../images/logo2.png" alt="logo">
  </div>


  <?php

   if(isset($_SESSION['Username'])) {
     include('nav/navUser.html');
    } else { include('nav/navAnonymous.html');
}
?>

<div id="homeimg"> <img src="../images/aboutmain.jpg" alt="horizontalviewimage"></div>

<div id="container">
  <article>
    <h1 class="heading" style="padding-bottom:1.5em;text-align:center;">ABOUT</h1>

    <div id="section">
      <div class="leftside">
      <p class="sansserif"> Our Hotel is a 5 star hotel located in Blai, Indonisia. A great location not far from many of balis best attractions/lanmarks.
        It is a great hotel for anyone who is loking to the ultimate holiday with a small budget.</P>
        <br>
        <p class="sansserif"> It is just meters away from the sea breeze and not too far from the international airport. Come and enjoy the <thead>
           amazing land and all its unique experience.
        </thead></p>
      </div>
      <div class="rightside">
        <div id="aboutimg">
   <img src="../images/gallery/Hotel.jpg" ></img>
 </div>
      </div>
    </div>

    <div id="section" style="margin-top:3em;">
    <p class="sansserif" style=""> The Hotel was found in 2017 along with this website. The purpose was to provide a way in
     which people could book a rooms online. The website is new and it may have some bugs, you can report them using the feedback form located in the 'contact page'.</p>
    </div>

    <div id="section" style="margin-top:3em;">
  <p class="sansserif" ><strong style="text-align:center;">(NOTE: This hotel is fictitious, it is part of a TAFE brisbane project. Anything here is just for learning purposes. ) </strong></p>
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
