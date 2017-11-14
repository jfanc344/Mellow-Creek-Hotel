<?php
session_start();

$target_dir = "../view/images/profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  $_SESSION['already_exists'] = 'true';
  header('Location: ../view/html/editprofile.php');
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $_SESSION['image_size'] = 'true';
  header('Location: ../view/html/editprofile.php');
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['format'] = 'true';
  header('Location: ../view/html/editprofile.php');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $_SESSION['bad_upload'] = 'true';
  header('Location: ../view/html/editprofile.php');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";



        $conn = mysqli_connect("localhost", "root", "", "mp_prac");
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $memberid = $_POST['MemberID'];
        $file_name = $_FILES['fileToUpload']['name'];


        $sql = "UPDATE `member` SET `image`= '$file_name' WHERE MemberID = '$memberid'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['uploaded'] = 'true';
            header('Location: ../view/html/editprofile.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
