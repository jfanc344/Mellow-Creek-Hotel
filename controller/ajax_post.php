<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

 $ajaxbookingID = $_POST['ajaxbookingID'];

$conn = mysqli_connect("localhost", "root", "", "mp_prac");

 $sql= "DELETE FROM `booking` WHERE BookingID = '$ajaxbookingID'";

 if (mysqli_query($conn, $sql)) {

   unset($_SESSION['invoice']);
   $_SESSION['deleted'] = 'true';
  echo 'deleted!';
 }else{
   echo 'Fail.';
 }
}


?>
