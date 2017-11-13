<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "mp_prac");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$checkindate = $_POST['checkindate'];
$checkoutdate = $_POST['checkoutdate'];
$roomtype = $_POST['roomtype'];
$memberID = $_POST['memberID'];
$numpeople = $_POST['numpeople'];
$date = date("Y/m/d");
$totalprice = $_POST['result'];

$sql = "INSERT INTO `booking`(`MemberID`, `DateIn`, `DateOut`, `NumPeople`, `RoomType`, `totalprice`)
        VALUES ('$memberID','$checkindate','$checkoutdate','$numpeople','$roomtype','$totalprice')";




if (mysqli_query($conn, $sql)) {

  $bookingID = mysqli_insert_id($conn) ;
  $sql1 = "INSERT INTO `invoice`(`invoiceID`, `date`, `MemberID`, `bookingID`) VALUES (NULL,'$date','$memberID','$bookingID')";

    if (mysqli_query($conn, $sql1)) {
    $_SESSION['invoice'] = 'true';
    header('Location: ../view/html/invoice.php');
  } else {
    $_SESSION['Booking_error'] = 'ERROR: Fail to create Booking.
    please make sure all fields are filled!';
    header('Location: ../view/html/booking.php');
  }


} else {
  $_SESSION['Booking_error'] = 'ERROR: Fail to create Booking.
  please make sure all fields are filled!';
  header('Location: ../view/html/booking.php');
}


mysqli_close($conn);
?>
