<?php
require_once("../model/db.php");
require_once("../model/dbfunc.php");

if($_REQUEST['action_type'] == 'news') {
  if(!empty($_GET['id'])){
    $table="newtbl";
    $condition = array('id' => $_GET['id']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/news.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}

if($_REQUEST['action_type'] == 'users') {
  if(!empty($_GET['MemberID'])){
    $table="member";
    $condition = array('MemberID' => $_GET['MemberID']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/editusers.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}

if($_REQUEST['action_type'] == 'feedback') {
  if(!empty($_GET['feedbackid'])){
    $table="feedbacktbl";
    $condition = array('feedbackid' => $_GET['feedbackid']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/viewfeedback.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}
if($_REQUEST['action_type'] == 'member') {
  if(!empty($_GET['MemberID'])){
    $table="member";
    $condition = array('MemberID' => $_GET['MemberID']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/viewallusers.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}
if($_REQUEST['action_type'] == 'service') {
  if(!empty($_GET['serviceID'])){
    $table="service";
    $condition = array('serviceID' => $_GET['serviceID']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/viewallusers.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}
if($_REQUEST['action_type'] == 'manager') {
  if(!empty($_GET['managerID'])){
    $table="manager";
    $condition = array('managerID' => $_GET['managerID']);
  try
  {
    //function call
    deleteData($table,$condition);
    header('location:../view/html/viewallusers.php');
  }
  catch(PDOException $e){
    echo "Error: ".$e -> getMessage();
    die();
   }
  }
}
 ?>
