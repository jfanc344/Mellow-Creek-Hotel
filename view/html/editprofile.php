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





<form action="../../controller/uploadimage.php" method="post" enctype="multipart/form-data">
  <div class="gallarytitlescont">
  <h1 class="gallerytitles" >Personal Info</h1>
  </div>
    <div id="image_edit_user"><img  onerror="src='../images/icons/profile.png'" src="../images/profile/<?php echo $row['image']?>"/>
       Select image to upload:
       <input type="file" name="fileToUpload" id="fileToUpload1" style="margin-bottom:1em;">
       <input type="submit" class="edit-user-image-btn" style="margin:0 auto;"value="Upload Image" name="submit"></div>


    <input type="hidden" name="MemberID" value="<?php echo $row["MemberID"];?>"/>

</form>

<div class="errorbox" style="margin-top:2em; width:60%;">
  <?php
  if(isset($_SESSION['image_size'])) {
    echo "ERROR: The image is too large.";
    unset($_SESSION['image_size']);
  }
  if(isset($_SESSION['already_exists'])) {
    echo "\n ERROR: The image name already exists, rename the image.";
    unset($_SESSION['already_exists']);
  }
  if(isset($_SESSION['format'])) {
    echo "\n Only JPG, JPEG, PNG & GIF files are allowed.";
    unset($_SESSION['format']);
  }
  if(isset($_SESSION['bad_upload'])) {
    echo " \n Something went wrong with the upload";
    unset($_SESSION['bad_upload']);
  }

  ?>
</div>
<div class="success-box" style="margin-top:2em; width:60%;">
  <?php

  if(isset($_SESSION['uploaded'])) {
    echo 'SUCCESS, reload the page.';
    unset($_SESSION['uploaded']);
  }
  ?>
</div>

   <form id=" " action="../../controller/updateprofile.php" method="post">


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
