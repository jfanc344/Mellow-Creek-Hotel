<?php
$conn = mysqli_connect("localhost", "root", "", "mp_prac");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$memberid = $_POST['MemberID'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$DOB = $_POST['DOB'];
$Phone = $_POST['Phone'];


$sql = "UPDATE member SET FirstName = '$FirstName', LastName = '$LastName', DOB = '$DOB', Phone = '$Phone' WHERE MemberID = '$memberid'";

if (mysqli_query($conn, $sql)) {
    header('Location: ../view/html/editprofile.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
