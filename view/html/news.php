<?php
session_start();

     // First connect to the database via your connection insert file
     require_once("../../model/db.php");
     require_once("../../model/dbfunc.php");
   ?>

<!DOCTYPE html>
   <html>
   <head>
     <title> News </title>
     <?php include('tags/header.html'); ?>
   </head>
   <body>

     <div id="header">
       <img src="../images/logo2.png" alt="logo">
     </div>


     <?php

      if(!isset($_SESSION['Username'])) {
        if(isset($_SESSION['Username_service'])) {
        include('nav/navService.html');
      } else { include('nav/navAnonymous.html');
      }
   } else {
     include('nav/navUser.html');
   }
?>

   <div id="container">
     <article>

       <?php
       if(isset($_SESSION['Username_service'])) { ?>
       <a class="deleteEvent" style="margin-top:3em;" href="addnews.php">+ ADD NEW </a>
         <?php } ?>

       <h1 class="heading" style="padding-bottom:1.5em;text-align:center;">News and Events</h1>



<?php
$table = selectData( 'newtbl', array('order_by' => 'id' ));
if ( !empty($table) ) {
  $count = 0;
  foreach ( $table as $user ) {
$count++;

?>
<div class="newssection">


  <div class="eventdate">
    <p class="newsdate"> Last Updated: <?php echo $user['date']; ?></p>
  </div>

<div class="eventtitle">
  <p class="newstitle"> <?php echo $user['title']; ?></p>
</div>




<div class="eventtext">
  <p class="sansserif" > <?php echo $user['txt']; ?></P>
</div>
    <?php
    if(isset($_SESSION['Username_service'])) { ?>
      <a class="deleteEvent" href='../../Controller/deleteprocess.php?action_type=news&id=<?php echo $user['id'];?>'>Delete</a>
      <?php } ?>
</div>

<?php
  }
}
?>
<!--***************************************************MODALS*********************************-->
<?php include('modals/loginmodals.php'); ?>
     </article>

     </div>
     <?php
   include('tags/footer.html');
   ?>


   </body>

   </html>
