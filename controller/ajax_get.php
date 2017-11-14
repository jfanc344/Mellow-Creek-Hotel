<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
 $name = $_GET['name'];
 $Email = $_GET['Email'];
 $feedback = $_GET['feedback'];
 $date = date("Y/m/d");

 $conn = mysqli_connect("localhost", "root", "", "mp_prac");

 $sql= "INSERT INTO `feedbacktbl`(`feedbackid`, `name`, `Email`, `feedback`, `date`) VALUES (NULL, '$name', '$Email', '$feedback', '$date')";

 if (mysqli_query($conn, $sql)) {

   echo "YOUR FEEDBACK HAS BEEN SEND WITH THE FOLLOWING- \n NAME: $name \n EMAIL: $Email \n FEEDBACK: $feedback" ;

 }else{
   echo 'There was an error.';
 }
}


?>
