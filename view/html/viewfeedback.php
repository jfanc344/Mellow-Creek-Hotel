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

       <h1 class="heading" style="padding-bottom:1.5em;">Feedback</h1>


<?php
$table = selectData( 'feedbacktbl', array('order_by' => 'feedbackid' ));
if ( !empty($table) ) {
  $count = 0;
  foreach ( $table as $user ) {
$count++;

?>
<div id="feedbackadmin">
  <div class="deletebtnsec">
  <a class="deleteEvent"  href='../../Controller/Deleteprocess.php?action_type=feedback&feedbackid=<?php echo $user['feedbackid'];?>'>DELETE</a>
</div>
  <p class="adminfeedback"><strong>Users name:</strong> <?php echo $user['name']; ?></p>
  <p class="adminfeedback" style="margin-bottom:2em;"><strong>Users email:</strong> <?php echo $user['Email'];?> </p>
  <p class="adminfeedback" style="margin-bottom:2em;" ><strong>Feedback/Question:</strong> <?php echo $user['feedback'];?> </p>
  <p class="adminfeedback"><strong>date:</strong> <?php echo $user['date'];?> </p>

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
