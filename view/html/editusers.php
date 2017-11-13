<?php
session_start();

     // First connect to the database via your connection insert file
     require_once("../../model/db.php");
     require_once("../../model/dbfunc.php");


     if(!isset($_SESSION['Username_service'])) {
      header('Location: login.php');
    }
   ?>

<!DOCTYPE html>
   <html>
   <head>
     <title> Edit Users </title>
     <?php include('tags/header.html'); ?>
   </head>
   <body>

     <div id="header">
       <img src="../images/logo2.png" alt="logo">
     </div>


     <?php

        if(isset($_SESSION['Username_service'])) {
        include('nav/navService.html');
      }
?>


   <div id="container">
     <article>

       <h1 class="heading" style="padding-bottom:1.5em;">Members</h1>


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
    <a class="deleteEvent"  href='../../Controller/Deleteprocess.php?action_type=users&MemberID=<?php echo $user['MemberID'];?>'>DELETE</a>
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
