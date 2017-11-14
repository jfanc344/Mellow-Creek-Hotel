<?php
session_start();

if(!isset($_SESSION['Username'])) {
   header('Location: login.php');
}

if(!isset($_SESSION['invoice'])) {
  //$_SESSION['no_booking'] = 'true';
   header('Location: booking.php');
}

 if(isset($_SESSION['Username'])) {
$connection = mysqli_connect("localhost", "root", "", "mp_prac");
$username = $_SESSION['Username'];
$query = "SELECT *
          FROM member
          LEFT JOIN booking as booking
          ON member.MemberID = booking.MemberID
          LEFT JOIN invoice as invoice
          ON member.MemberID = invoice.MemberID
          WHERE Username = '$username'"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through resourcebundle_get_error_message
   ?>

<html>
<head>
  <title> Invoice </title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/ds8.css">
  <script src="../js/java.js" type="text/javascript" defer="defer"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="../js/ajax.js" type="text/javascript" defer="defer">
</script>

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

<div id="container">
  <article>

<div id="bookpage-rooms-container">
      <div id="confirmation">
        <img src="../images/icons/tick.png" alt="tick"><p class="confirmation-text"> Your booking with Mellow Creek</p>
      </div>


<p class="sansserif" style="margin-top:2em;"> <strong>Booking under:</strong> <?php echo $row ['FirstName'] ?> <?php echo $row ['LastName'] ?></p>
<p class="sansserif" style="margin-top:2em;"> <strong>Booking Number:</strong> <?php echo $row ['BookingID'] ?></p>
<p class="sansserif" style="margin-top:2em;"> <strong>Booking date:</strong> <?php echo $row ['date'] ?></p>

<div id="invoice-container" style="margin-top:3em;">

  <div class="invoice-title">
    <h3 class="invoice-box-titles">Room Description</h3>
</div>

<div class="invoice-title">
  <h3 class="invoice-box-titles">Check-in Date</h3>
</div>

<div class="invoice-title">
  <h3 class="invoice-box-titles">Check-out Date</h3>
</div>

<div class="invoice-title">
  <h3 class="invoice-box-titles">Total </h3>
</div>

</div>

<div id="invoice-container">

  <div class="info-box">
    <p class="invoice-info-text" s><?php echo $row ['RoomType'] ?></p>
</div>

<div class="info-box">
  <p class="invoice-info-text" ><?php echo $row ['DateIn'] ?></p>
</div>

<div class="info-box">
  <p class="invoice-info-text" ><?php echo $row ['DateOut'] ?></p>
</div>
<div class="info-box">
  <p class="invoice-info-text" > $<?php echo $row ['totalprice'] ?> USD</p>
</div>

</div>



<p class="sansserif" style="margin-top:0.5em;"><strong>If you have not paid yet you will have to do it at reception. </strong></p>
<p class="sansserif" style="margin-bottom:2em;margin-top:0.5em;">If you have questions, comments or concerns, please contact our expert customer support team or go to the contact page.</p>
<form class="" action="mellowcreek.php">
<button id="exitinvoice" class="formbtn" style="margin-bottom:2em;">DONE</button>
</form>

<input type="hidden" id="ajaxbookingID" value="<?php echo $row['BookingID'];?>">
<button class="deleteEvent"   id="deletereservation" >DELETE</button>

<!-- The Modal -->


<script>

</script>

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
