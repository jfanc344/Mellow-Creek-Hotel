<?php
session_start();

require_once("../../Model/db.php");
require_once("../../Model/dbfunc.php");


if(!isset($_SESSION['Username'])) {
   header('Location: login.php');
 }
   ?>

<!DOCTYPE html>
<html>
<head>
  <title> Edit Profile </title>
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


<div id="container">
  <article>

    <?php
    if(isset($_SESSION['Username'])) {
  $connection = mysqli_connect("localhost", "root", "", "mp_prac");
  $username = $_SESSION['Username'];
  $query = "SELECT * FROM member WHERE Username = '$username'"; //You don't need a ; like you do in SQL
  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  ?>
   <form id=" " action="../../controller/updateprofile.php" method="post">
  <div class="gallarytitlescont">
  <h1 class="gallerytitles" >Personal Info</h1>
  </div>
  <label class="profiletext"> <strong>First Name:</strong> </label>
  <input type="text" class="profileinput" name="FirstName" value="<?php echo $row['FirstName']?>"/>
  <label class="profiletext"> <strong>Last Name:</strong></label>
  <input type="text" class="profileinput" name="LastName" value="<?php echo $row['LastName']?>"/>
  <label class="profiletext"> <strong>Date of Birth:</strong></label>
  <input type="text" class="profileinput" name="DOB" value="<?php echo $row['DOB']?>"/>
  <label class="profiletext"> <strong>Phone Number:</strong></label>
  <input type="text" class="profileinput" name="Phone" value="<?php echo $row['Phone']?>"/>

  <input type="hidden" name="MemberID" value="<?php echo $row["MemberID"];?>"/>
    <input type="hidden" name="action_type" value="update"/><br>
  <input type="submit" class="formbtn" name="submit" value="update">
</form>

  <?php
  }
  mysqli_close($connection); //Make sure to close out the database connection
  }
  ?>





  </article>
</div>

<?php
include('tags/footer.html');
?>

</body>

</html>
