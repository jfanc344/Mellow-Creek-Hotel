<?php
session_start();

     // First connect to the database via your connection insert file
     require_once("../../model/db.php");
     require_once("../../model/dbfunc.php");


     if(!isset($_SESSION['Username_manager'])) {
      header('Location: login.php');
    }
   ?>

<!DOCTYPE html>
   <html>
   <head>
     <title> View Feedback </title>
     <?php include('tags/header.html'); ?>
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
     <article>


       <div id="gallerynavigation" style="margin-top:3em;">
       <a class="jumplinks" href="#jump1" style="width: 33.3%;">Members</a>
       <a class="jumplinks" href="#jump2" style="width: 33.3%;">Custumer service</a>
       <a class="jumplinks" href="#jump3" style="width: 33.3%;">Admin / Manager</a>
       </div>

<div id="jump1"></div>
       <h1 class="heading" style="padding-bottom:1.5em;color: #1E90FF;">MEMBERS</h1>


       <div id="editusertitle">
         <div class="usersleft">
           <p class="userstext"><strong>FULL NAME</strong></p>
         </div>
         <div class="usersleft">
           <p class="userstext"><strong>CONTACT EMAIL</strong></p>
         </div>
         <div class="usersright">
           <p class="userstext"><strong>DATE OF BIRTH</strong></p>

         </div>
       </div>

<?php
$table = selectData( 'member', array('order_by' => 'MemberID' ));
if ( !empty($table) ) {
  $count = 0;
  foreach ( $table as $user ) {
$count++;

?>
<div id="edituserssec">
  <div class="usersleft">
    <p class="userstext"> <?php echo $user['FirstName'];?> <?php echo $user['LastName']; ?></p>
  </div>
  <div class="usersleft">
    <p class="userstext"> <?php echo $user['Email'];?> </p>
  </div>
  <div class="usersright">
    <p class="userstext"> <?php echo $user['DOB'];?> </p>
    <div class="userbuttons">
    <a class="deleteEvent"  href='../../Controller/deleteprocess.php?action_type=member&MemberID=<?php echo $user['MemberID'];?>'>DELETE</a>
  </div>
  </div>
</div>

<?php
  }
}
?>


<div id="jump2"></div>
<h1 class="heading" style="padding-bottom:1.5em;color: #1E90FF;">CUSTOMER SERVICE</h1>

       <div id="editusertitle">
         <div class="usersleft">
           <p class="userstext"><strong>FULL NAME</strong></p>
         </div>
         <div class="usersleft">
           <p class="userstext"><strong></strong></p>
         </div>
         <div class="usersright">
           <p class="userstext"><strong></strong></p>

         </div>
       </div>

<?php
$table = selectData( 'service', array('order_by' => 'serviceID' ));
if ( !empty($table) ) {
  $count = 0;
  foreach ( $table as $user ) {
$count++;

?>
<div id="edituserssec">
  <div class="usersleft">
    <p class="userstext"> <?php echo $user['FirstName'];?> <?php echo $user['LastName']; ?></p>
  </div>
  <div class="usersleft">

  </div>
  <div class="usersright">

    <div class="userbuttons">
    <a class="deleteEvent"  href='../../Controller/deleteprocess.php?action_type=service&serviceID=<?php echo $user['serviceID'];?>'>DELETE</a>
  </div>
  </div>
</div>

<?php
  }
}
?>


<div id="jump3"></div>
<h1 class="heading" style="padding-bottom:1.5em;color: #1E90FF;">ADMIN / MANAGER</h1>

       <div id="editusertitle">
         <div class="usersleft">
           <p class="userstext"><strong>FULL NAME</strong></p>
         </div>
         <div class="usersleft">
           <p class="userstext"><strong></strong></p>
         </div>
         <div class="usersright">
           <p class="userstext"><strong></strong></p>

         </div>
       </div>

<?php
$table = selectData( 'manager', array('order_by' => 'managerID' ));
if ( !empty($table) ) {
  $count = 0;
  foreach ( $table as $user ) {
$count++;

?>
<div id="edituserssec">
  <div class="usersleft">
    <p class="userstext"> <?php echo $user['FirstName'];?> <?php echo $user['LastName']; ?></p>
  </div>
  <div class="usersleft">

  </div>
  <div class="usersright">

    <div class="userbuttons">
    <a class="deleteEvent"  href='../../Controller/deleteprocess.php?action_type=manager&managerID=<?php echo $user['managerID'];?>'>DELETE</a>
  </div>
  </div>
</div>

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
