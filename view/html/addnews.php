<?php
session_start();

require_once("../../Model/db.php");
require_once("../../Model/dbfunc.php");

if(!isset($_SESSION['Username_service'])) {
 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Add News </title>
  <!--********************* this is the header **************************-->
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



<article>
  <p class="formtitle">Add New Event/News</p>
  <form  action="../../controller\insertproccess.php" method="post">

    <label><b>Tile:</b></label>
    <input type="text" placeholder="First title.." name="title" id="title">

    <label><b>Text:</b></label>
    <input type="text" placeholder="Last evenr or news.." name="txt" id="txt" >

    <input type="hidden" name="action_type" value="news"/>

    <button class="formbtn" type="submit">Add</button>
  </form>
</article>
<!--********************* this is the footer **************************-->
  <?php include('tags/footer.html'); ?>
</div>
<body>
<html>
