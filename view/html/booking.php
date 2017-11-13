<?php
session_start();

if(!isset($_SESSION['Username'])) {
   header('Location: login.php');
}


 if(isset($_SESSION['Username'])) {
$connection = mysqli_connect("localhost", "root", "", "mp_prac");
$username = $_SESSION['Username'];
$query = "SELECT * FROM member WHERE Username = '$username'"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through resourcebundle_get_error_message
   ?>

<html>
<head>
  <title> Booking </title>
  <?php include('tags/header.html'); ?>

</head>

<body>

  <div id="header">
    <img src="../images/logo2.png" alt="logo">
  </div>


  <?php

  if(isset($_SESSION['Username'])) {
    include('nav/navUser.html');
  }

   ?>
   <form id="bookingform" action="../../controller/bookingprocess.php" method="post">
     <div id="main-image">
       <img src="../images/aboutmain.jpg" alt="">
       <h1 class="book-title">Book Room</h1>
       <div id="main-image-booking">
         <div class="booking-dates-left">
         <label class="booking-label">Check In Date:</lable><input type="date" id="checkindate" name="checkindate" class="bokkingdates" onchange="document.getElementById('checkoutdate').min=this.value;" onchange="cal();">
         </div>
         <div class="booking-dates-right">
         <label class="booking-label">Check Out Date:</lable><input type="date" id="checkoutdate" name="checkoutdate" class="bokkingdates" onchange="cal();calculate();">
       </div>
     </div>
</div>
<div id="container">
  <article>

    <div class="errorbox" style="margin-top:2em; width:60%;">
       <p class="errortxt" style="font-size: 1.2em;">
    <?php
    if(isset($_SESSION['Booking_error'])) {
      //the user has previosly attempted a logged in
      echo 'ERROR: Fail to create Booking.
      please make sure all fields are filled!<br>
      (Note: If you already have a booking you are not allowed to create another).';
      unset($_SESSION['Booking_error']);
    }


    ?>
  </p>
</div>

<div id="bookpage-rooms-container">
  <h2 class="rooms-title">Select Room Type</h2>
  <hr style="color:#D3D3D3;width:90%;margin-bottom:2em;">

<div class="booking-rooms">
  <div class="room-image-left">
    <img src="../images/gallery/room2.jpg" alt="single">
  </div>

  <div class="room-text-right">
    <h3 class="info-title">Single</h3>
    <p class="room-info"> Equipped with the new Sweet Bed by Mellow Creek bedding, the generous sized rooms offer everything you
       need for a comfortable stay: 1 queen size beds, large desk area, internet, LCD TV. No rollaway.</p>
       <p class="room-info" style="margin-top:1em;"> <strong>Max Capasity:</strong> 2 Adults, 1 Child</p>
       <div class="room-icons"><img src="../images/icons/wifi1.png" alt="wifi"><img src="../images/icons/aircon1.png" alt="aircon">
       <img src="../images/icons/tv.png" alt="tv"><img src="../images/icons/bed.png" alt="bed">(1)</div>
       <h3 class="info-title" style="margin-top:3em;">$120.00 USD /Per Night</h3>


       <div class="button-labels">

       <label for="single_room" class="ratiobtn"  >Select</label>
       </div>

  </div>
  </div>

  <div class="booking-rooms">
    <div class="room-image-left">
      <img src="../images/gallery/doublebed.jpg" alt="double">
    </div>

    <div class="room-text-right">
      <h3 class="info-title">Double</h3>
      <p class="room-info"> Equipped with the new Sweet Bed by ibis bedding, the generous sized rooms
        offer everything you need for a comfortable stay: 2 queen size beds, large desk area, internet, LCD TV. No rollaway.</p>
         <p class="room-info" style="margin-top:1em;"> <strong>Max Capasity:</strong> 4 Adults, 2 Child</p>
         <div class="room-icons"><img src="../images/icons/wifi1.png" alt="wifi"><img src="../images/icons/aircon1.png" alt="aircon">
         <img src="../images/icons/tv.png" alt="tv"><img src="../images/icons/bed.png" alt="bed">(2)</div>
         <h3 class="info-title" style="margin-top:3em;">$160.00 USD /Per Night</h3>


         <div class="button-labels">

         <label for="double_room" class="ratiobtn" >Select</label>
         </div>

    </div>
    </div>


    <div class="booking-rooms">
      <div class="room-image-left">
        <img src="../images/gallery/family.jpg" alt="family">
      </div>

      <div class="room-text-right">
        <h3 class="info-title">Family</h3>
        <p class="room-info"> Equipped with the new Sweet Bed by Mellow Creek bedding, the generous sized rooms offer everything you
           need for a comfortable stay: 3 queen size beds, large desk area, internet, LCD TV. No rollaway.</p>
           <p class="room-info" style="margin-top:1em;"> <strong>Max Capasity:</strong> 6 Adults, 3 Child</p>
           <div class="room-icons"><img src="../images/icons/wifi1.png" alt="wifi"><img src="../images/icons/aircon1.png" alt="aircon">
           <img src="../images/icons/tv.png" alt="tv"><img src="../images/icons/bed.png" alt="bed">(3)</div>
           <h3 class="info-title" style="margin-top:3em;">$210.00 USD /Per Night</h3>


           <div class="button-labels">

           <label for="family_room" class="ratiobtn" >Select</label>
           </div>

      </div>
      </div>


      <div class="box"></div>

<form class="" id="bookingfrm" action="index.html" method="post">

</form>
</div>

<div id="jump1">
<div id="bookpage-rooms-container">
  <h2 class="rooms-title">Complete Booking</h2>
  <p class="sans-serif" style="text-align:center;">Note: The room reservation will be under the details that you registered with.</>
  <hr style="color:#D3D3D3;width:90%;margin-bottom:2em;">


<div class="booking-rooms">
<p class="booking-question-text">Room Type:</p>
<label  class="bookingform-labels1">Single
<input type="radio" id="single_room" name="roomtype" value="single" onchange="calculate()">
</label>
<label class="bookingform-labels1">Double
<input type="radio" id="double_room" name="roomtype" value="double" onchange="calculate()">
</label>
<label class="bookingform-labels1">Family
<input type="radio" id="family_room" name="roomtype" value="family" onchange="calculate()">
</label>
</div>

<div class="booking-rooms" style="display:block;">
<label class="booking-form-lavels">Number of adults</label>
<input type="text" name="numpeople" id="numpeople" class="booking-form-inputs" pattern="[0-9]{1}" >

<div ><label class="booking-form-labels">Cost per Night (prices change depending on room chosen)</label><input type="text" id="costpernight" name="nightcost" disabled/></div>

<div id="numdays"><label class="booking-form-labels">Number of days (To change number of days please go to the top of the page)</label><input type="text" class="textbox" id="numdays2" name="numdays" oninput="calculate()"  disabled/></div>
<label class="booking-form-labels">Total Price</label>
<div class="totalprice-div"><input type="text" name="result" id="result" readonly/><div class="button-labels-calculate">
<label onclick="calculate();" >Calculate</label>
</div><p style="margin-left:2em;">(calculate if the total price is not displayed.)</p></div>


<label class="booking-form-labels">Payment</label>
<div id="paypal">
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" border="0" alt="Now Accepting PayPal"></a><div style="text-align:center"><a href="https://www.paypal.com/webapps/mpp/how-paypal-works"><font size="2" face="Arial" color="#0079CD">How PayPal Works</font></a></div></td></tr></table><!-- PayPal Logo -->
</div>
<input type="hidden" name="memberID" value="<?php echo $row["MemberID"] ?>">

<button class="formbtn" >Book</button>




</div>


</div>






</form>

  <?php
  }
  }
  ?>

  </article>
</div>
  <?php
include('tags/footer.html');
?>

</body>

</html>
