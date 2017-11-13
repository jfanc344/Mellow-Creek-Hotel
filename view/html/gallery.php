<?php
session_start();

   ?><!DOCTYPE html>
   <html>
   <head>
     <title> Gallery </title>
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



<div id="gallerytop">
<img class="gallerytopimg" src="../images/gallery/sea.jpg" alt="breakfast">
</div>

<h1 class="heading" style="text-align:center;margin-bottom:1em;">PHOTO GALLERY</h1>

<div id="gallerynavigation">
<a class="jumplinks" href="#jump1">OUTSIDE</a>
<a class="jumplinks" href="#jump2">ROOMS</a>
<a class="jumplinks" href="#jump3">SERVICES</a>
<a class="jumplinks" href="#jump4">NEAR ATRACTIONS</a>
</div>

<div id="jump1"></div>
<div class="gallarytitlescont">
<h1 class="gallerytitles" >OUTSIDE</h1>
</div>

<div class="gallerysection">

<div class="gallarycont">
  <img class="galleryimg" src="../images/gallery/luxury.jpg" alt="outsidepool">
<div class="gallarytextcont"> <p class="gallerytext">Pool at night...</p> </div>
 </div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/swiming.jpg" alt="swimming pool">
<div class="gallarytextcont"> <p class="gallerytext">Swimming pool...</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/sunset.jpeg" alt="sun set">
<div class="gallarytextcont"> <p class="gallerytext">Enjoy the sun set..</p>  </div>
</div>
</div>

<div class="gallerysection">
<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/sunbeds.jpg" alt="sunbeds">
<div class="gallarytextcont"> <p class="gallerytext">Outside sunbeds...</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/sunbeds2.jpg" alt="sunbedpool">
<div class="gallarytextcont"> <p class="gallerytext">Ultimate relaxation...</p> </div>
</div>

</div>

<div id="jump2"></div>
<div class="gallarytitlescont">
<h1 class="gallerytitles" >ROOMS</h1>
</div>

<div class="gallerysection">
  <div>
<div class="gallarycont">
  <img class="galleryimg" src="../images/gallery/room.jpeg" alt="room1">
<div class="gallarytextcont"> <p class="gallerytext">Relaxing...</p> </div>
 </div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/room3.jpg" alt="room3">
<div class="gallarytextcont"> <p class="gallerytext">Anything that you need will be at your service...</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/room2.jpg" alt="room2">
<div class="gallarytextcont"> <p class="gallerytext">comfortable..</p>  </div>
</div>

</div>
</div>

<div id="jump3"></div>
<div class="gallarytitlescont">
<h1 class="gallerytitles" >SERVICES</h1>
</div>

<div class="gallerysection">
<div class="gallarycont">
  <img class="galleryimg" src="../images/gallery/massage.jpeg" alt="massage room">
<div class="gallarytextcont"> <p class="gallerytext">With professionals...</p> </div>
 </div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/gym.jpg" alt="gym room">
<div class="gallarytextcont"> <p class="gallerytext">Exercise wont be a problem...</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/sauna.jpg" alt="sauna">
<div class="gallarytextcont"> <p class="gallerytext">Sauna..</p> </div>
</div>
</div>
<div class="gallerysection">
<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/breakfast.jpeg" alt="breakfast">
<div class="gallarytextcont"> <p class="gallerytext">Enjoy your free breakfast..</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/restaurant.jpg" alt="restaurant">
<div class="gallarytextcont"> <p class="gallerytext">Hungry?..</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/bar.jpeg" alt="bar">
<div class="gallarytextcont"> <p class="gallerytext">We got you covered..</p> </div>
</div>
</div>


<div id="jump4"></div>
<div class="gallarytitlescont">
<h1 class="gallerytitles" >NEAR ATRACTIONS</h1>
</div>

<div class="gallerysection">
<div class="gallarycont">
  <img class="galleryimg" src="../images/gallery/tanahlot.jpg" alt="tanahlot">
<div class="gallarytextcont"> <p class="gallerytext">Tanah Lot...</p> </div>
 </div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/mountbatur.jpg" alt="mountbatur">
<div class="gallarytextcont"> <p class="gallerytext">Mount Batur...</p> </div>
</div>

<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/museum.jpg" alt="museum">
<div class="gallarytextcont"> <p class="gallerytext">Neka art Museum..</p> </div>
</div>
</div>
<div class="gallerysection">
<div class="gallarycont">
<img class="galleryimg" src="../images/gallery/diving.jpg" alt="diving">
<div class="gallarytextcont"> <p class="gallerytext">Scuba Diving..</p> </div>
</div>


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
