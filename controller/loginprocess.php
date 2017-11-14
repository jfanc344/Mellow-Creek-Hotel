<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "mp_prac");



///////////////////////// MEMBER LOGIN /////////////////////////
if(isset($_POST['login'])) {

if(empty($_POST["Username"]) || empty($_POST["Password"])){
  echo '<script>alert("Both Fields are required")</script>';
}
else {

  $username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, $_POST["Password"]);

  $query4 = "SELECT * FROM member WHERE Username = '$username'";
  $result4 = mysqli_query($conn, $query4);

  while($row = mysqli_fetch_array($result4)){
  $invoice = $row['MemberID'];
}


  $query = "SELECT * FROM member WHERE Username = '$username'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_array($result)) {
      if(password_verify($password, $row["Password"])){
        //return true;
        $_SESSION["Username"] = $username;
        //
        $result2 = mysqli_query($conn, "SELECT MemberID FROM invoice WHERE MemberID = '$invoice'");
          if(mysqli_num_rows($result2) == 0) {
             header("location:../view/html/mellowcreek.php");
          } else {
            $_SESSION["invoice"] = $invoice;
            header("location:../view/html/mellowcreek.php");
          }
      }
      else{
        $_SESSION['login_error'] = 'bad login, try again';
        header('Location: ../view/html/login.php');
      }
    }
  }
  else {
    $_SESSION['login_error'] = 'bad login, try again';
    header('Location: ../view/html/login.php');
  }
}
}

///////////////////////// ADMIN LOGIN /////////////////////////
if(isset($_POST['admin'])) {

if(empty($_POST["Username"]) || empty($_POST["Password"])){
  echo '<script>alert("Both Fields are required")</script>';
}
else {
  $username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, $_POST["Password"]);
  $query = "SELECT * FROM manager WHERE Username_manager = '$username'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_array($result)) {
      if(password_verify($password, $row["Password_manager"])){
        //return true;
        $_SESSION["Username_manager"] = $username;
        //header("location:../view/html/memberhome.php");
        header("location:../view/html/mellowcreek.php");
      }
      else{
        $_SESSION['login_error'] = 'bad login, try again';
        header('Location: ../view/html/login_manager.php');
      }
    }
  }
  else {
    $_SESSION['login_error'] = 'bad login, try again';
    header('Location: ../view/html/login_manager.php');
  }
}
}

///////////////////////// Custumer Service LOGIN /////////////////////////
if(isset($_POST['service'])) {

if(empty($_POST["Username"]) || empty($_POST["Password"])){
  echo '<script>alert("Both Fields are required")</script>';
}
else {
  $username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, $_POST["Password"]);
  $query = "SELECT * FROM service WHERE Username_service = '$username'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_array($result)) {
      if(password_verify($password, $row["Password_service"])){
        //return true;
        $_SESSION["Username_service"] = $username;
        //header("location:../view/html/memberhome.php");
        header("location:../view/html/mellowcreek.php");
      }
      else{
        $_SESSION['login_error'] = 'bad login, try again';
        header('Location: ../view/html/login_service.php');
      }
    }
  }
  else {
    $_SESSION['login_error'] = 'bad login, try again';
    header('Location: ../view/html/login_service.php');
  }
}
}


 ?>
