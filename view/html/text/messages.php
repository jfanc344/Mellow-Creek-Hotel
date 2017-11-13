<?php
session_start();

if(isset($_POST['show']) && $_POST['show']=='content') {

  $conn = mysqli_connect("localhost", "root", "", "mp_prac");

  $name = $_POST['name'];
  $feedback = $_POST['feedback'];
  $Email = $_POST['Email'];
  $date = date('m/d/Y h:i:s', time());


  $query = "INSERT INTO `feedbacktbl`(`name`, `Email`, `feedback`, `date`)
            VALUES ('$name', '$feedback', '$Email', '$date') ";

  $result = mysqli_query($conn, $query);
  $data = array();

  while ($row = mysqli_fetch_array($result))
  {
  echo $row['message']." - ".$row['date'];
  echo "<br />";
  }
}


?>
