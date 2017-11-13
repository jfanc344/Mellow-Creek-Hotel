<?php

require_once("../model/db.php");
require_once("../model/dbfunc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

 $FirstName = !empty($_POST['FirstName'])? test_user_input(($_POST['FirstName'])): null;
 $LastName = !empty($_POST['LastName'])? test_user_input(($_POST['LastName'])): null;
 $DOB = !empty($_POST['DOB'])? test_user_input(($_POST['DOB'])): null;
 $Email = !empty($_POST['Email'])? test_user_input(($_POST['Email'])): null;
 $Phone = !empty($_POST['Phone'])? test_user_input(($_POST['Phone'])): null;
 $username = !empty($_POST['username'])? test_user_input(($_POST['username'])): null;
 $password = !empty($_POST['password'])? test_user_input(($_POST['password'])): null;
 $hashedpass = password_hash($password, PASSWORD_DEFAULT);
 $title = !empty($_POST['title'])? test_user_input(($_POST['title'])): null;
 $txt = !empty($_POST['txt'])? test_user_input(($_POST['txt'])): null;
 $name = !empty($_POST['name'])? test_user_input(($_POST['name'])): null;
 $feedback = !empty($_POST['feedback'])? test_user_input(($_POST['feedback'])): null;
 $date = date('m/d/Y h:i:s', time());
 try
 {
  if($_REQUEST['action_type'] == 'add') {
    $data = array(
      'FirstName' => $FirstName,
      'DOB' => $DOB,
      'Email' => $Email,
      'Phone' => $Phone,
      'LastName' => $LastName,
      'username' => $username,
      'password' => $hashedpass
    );

      $table="member";
      insertData($table, $data);
      header('location:../view/html/login.php');
    }

    if($_REQUEST['role'] == 'admin') {
      $data = array(
        'FirstName' => $FirstName,
        'LastName' => $LastName,
        'Username_manager' => $username,
        'password_manager' => $hashedpass
      );

        $table="manager";
        insertData($table, $data);
        header('location:../view/html/mellowcreek.php');
      }

      if($_REQUEST['role'] == 'service') {
        $data = array(
          'FirstName' => $FirstName,
          'LastName' => $LastName,
          'username_service' => $username,
          'password_service' => $hashedpass
        );

          $table="service";
          insertData($table, $data);
          header('location:../view/html/mellowcreek.php');
        }
        if($_REQUEST['action_type'] == 'news') {
          $data = array(
            'title' => $title,
            'txt' => $txt,
            'date' => $date
          );

            $table="newtbl";
            insertData($table, $data);
            header('location:../view/html/news.php');
          }

          if($_REQUEST['action_type'] == 'feedback') {
            $data = array(
              'name' => $name,
              'Email' => $Email,
              'feedback' => $feedback,
              'date' => $date
            );

              $table="feedbacktbl";
              insertData($table, $data);
              header('location:../view/html/contact.php');
            }

  }

     catch(PDOException $e)
     {
       $_SESSION['register_error'] = 'Please try again';
       header('Location: ' . $_SERVER['HTTP_REFERER']);

       die();
     }
}
?>
