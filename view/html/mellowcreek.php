<?php
session_start();

   ?>

<html>
<head>
  <title> HOME </title>
  <?php include('tags/header.html'); ?>
</head>


<body>

  <div id="header">
    <img src="../images/logo2.png" alt="logo">
  </div>


  <?php

  if(!isset($_SESSION['Username'])) {
    if(!isset($_SESSION['Username_service'])) {
       if(isset($_SESSION['Username_manager'])) {
          include('nav/navADMIN.html');
         }else {
           include('nav/navAnonymous.html');
         }

      } else {
        include('nav/navService.html');
      }
} else {
 include('nav/navUser.html');
}

   ?>

<div id="homeimg"> <img src="../images/indexmain.jpg" alt="horizontalview"></div>

<div id="container">
  <article>
    <h1 class="heading">Mellow Creek Hotel</h1>
    <h2 class="subtitle"> Feel welcome</h2>

<div id="section">
  <div class="leftside">
  <p class="sansserif"> "Out Team at Mellow Creek Hotel cant wait to welcome you to Balis brightes hotel. Please let me know if there is
         anything we can do to make your stay better! jfanc@gmail.com or +61 484736273."</P>
           <p class="hotelmanager"> Mr Michael SHARP. Hotel Manager.</p>
    <p class="sansserif"> Discover the joy of Balis 5 Star Mellow Creek Hotel, an elegant
     retreat Bali hotel situated in a prime beachfront location. Experience a sea breeze
      through coconut palms. See the beatiful sunset on your own private balcony. One of the best locations in the world for a holiday,
      with lots of avtivities and new experiences. We can assure you will love it here.</p>
      <p class="sansserif">You can make a reservation right away, just head over to the booking page, you can also feel free to contact one
      of our hotels staff and book direcly with them. (conatct details in contact page.) </p>
  </div>
  <div class="rightside">
  <div id="Hotelextramenu">
  <h1 class="extratitle"> Hotel Extras</h1>
  <hr>
  <p class="dots"> <img src="../images/icons/goldstar.png" alt="star1"></img> FREE pickup/ drop off to International Airport every 30 minutes.</p>
  <p class="dots"> <img src="../images/icons/goldstar.png" alt="star1"></img> Breakfast included for every customer(Additional food can be order in the reception).</p>
  <p class="dots"> <img src="../images/icons/goldstar.png" alt="star1"></img> The Social all day dining: sweet treats, tasty snacks & reimagined classics</p>

  </div>
  </div>
</div>

<div id="serbox">
<div class="serviceleft">
  <div class="service"><img src="../images/icons/parking1.png" alt="parking"> Public indoor parking</div>
  <div class="service"><img src="../images/icons/delivery.png" alt="delivery"> Room Food delivery</div>
  <div class="service"><img src="../images/icons/disability.jpg" alt="disability"> Accessibility for people with reduced mobility</div>

</div>

<div class="serviceright">
  <div class="service"><img src="../images/icons/wifi.ico" alt="parking"> Free ultra fast WIFI</div>
  <div class="service"><img src="../images/icons/gym.jpg" alt="gym"> Fitness centre</div>
  <div class="service"><img src="../images/icons/restaurant.png" alt="restaurant"> 1 restrurant(s)</div>
</div>

</div>
<div id="serboxshowmore" onclick="showmore()" >
<div class="service" style="margin:0 auto;">See all services<img  id="showmoreimg" src="../images/icons/arrow.png" alt="arrow"> </div>
</div>

<div id="serbox2">
<div class="serviceleft">
  <div class="service"><img src="../images/icons/chechin.png" alt="checkin"> Online check-in</div>
  <div class="service"><img src="../images/icons/bar.ico" alt="bar"> 1 bar(s)</div>
  <div class="service"><img src="../images/icons/breakfast.png" alt="breakfast"> Free breakfast</div>
  <div class="service"><img src="../images/icons/bus.png" alt="bus"> Free shuttle to airport</div>

</div>

<div class="serviceright">
  <div class="service"><img src="../images/icons/fitness.png" alt="fitness"> Fitness centre</div>
  <div class="service"><img src="../images/icons/massage.png" alt="massage"> Massage</div>
  <div class="service"><img src="../images/icons/smoking.png" alt="smoking"> 100% smoking free</div>
  <div class="service"><img src="../images/icons/aircon.png" alt="aircon">Air conditioned</div>
</div>

</div>
<div id="serboxshowmore2" onclick="showless()" >
<div class="service" style="margin:0 auto;">Show Less<img id="showlessimg" src="../images/icons/arrow.png" alt="arrow"> </div>
</div>

<div id="googlemap">
  <div class="googlecont">
  <p class="sansserif"> <strong>HOTEL LOCATION:</strong></p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63100.902927150935!2d115.14092201092373!3d-8.709923655760957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDInMzYuOCJTIDExNcKwMTAnMDEuMyJF!5e0!3m2!1sen!2sau!4v1504577086666" width="90%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div id="hotelroominfo">
<div id="hotelroominfoimg">
  <img  src="../images/gallery/room3.jpg" alt="hotelroom">
  <p class="roominfo">  32 Pantai Kuta</p>
  <p class="roominfo"> BALI</p>
  <p class="roominfo"> INDONESIA</p>
  <p class="roominfo"> Tel: (+61)7/84736273</p>
  <p class="roominfo"> Fax: (+61)7/23453535</p>
  <hr>
  <div style="padding-bottom:1em;">
  <div class="txtleft" style="width:49%;float:left;border-right:solid 1px #696969;"> <p class="roominfo" style="padding-top:0;"> Check-in from 14h00</p> </div>
  <div class="txtleft" style="width:50%;float:right;"> <p class="roominfo" style="padding-top:0;"> Check-out up to 11h00</p> </div>
  </div>
  <form id="googleform" action="booking.php"><button id="bookroomfromgooogle">Book Room </button></form>

</div>
    </div>
</div>
  </div>
<!--***************************************************MODALS*********************************-->
<?php include('modals/loginmodals.php'); ?>

  </article>
</div>
<!--***************************************************FOOTER*********************************-->
  <?php
include('tags/footer.html');
?>
<p class="footerinfo">These prices may be based on different room types.</p>
<p class="footerinfo"> Depending on the country, these prices may not include taxes,
  may include VAT only or may include all taxes (VAT and city tax).</p>
  <p class="footerinfo"> The price is only guaranteed at the time of reservation. Hotel classifications (1 to 5 stars for France) correspond
  to criteria laid down by local regulations.</p>

</body>

</html>
