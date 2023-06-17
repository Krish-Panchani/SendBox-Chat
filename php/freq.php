<?php 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: /sendbox");
  }
?>
<?php
//sending Friend Request
        if(isset($_GET['to_user_id'])){
        $from_id = $_SESSION['unique_id'];
        $to_id = mysqli_real_escape_string($conn, $_GET['to_user_id']);
        
        $sql = mysqli_query($conn, "INSERT INTO friend_req (from_req_id, to_req_id)
                                        VALUES ({$from_id}, {$to_id})") or die();
        header("location: ../profile.php?user_id=". $to_id ."");
        $_SESSION['alertSuccess'] = 'Friend Request Sent.';
    }
        ?>
<?php
//Cancel Friend Request
if(isset($_GET['cancel'])){
  $from_id = $_SESSION['unique_id'];
  $to_id = mysqli_real_escape_string($conn, $_GET['cancel']);
  
  $sql = mysqli_query($conn, "DELETE FROM `friend_req` WHERE (`from_req_id`=$from_id AND `to_req_id`=$to_id) OR (`from_req_id`=$to_id AND `to_req_id`=$from_id)") or die();
  header("location: ../profile.php?user_id=". $to_id ."");
  $_SESSION['alertError'] = 'Friend Request Canceled';
}
        ?>
<?php
//Accepting Friend Request
        if(isset($_GET['accept_req'])){
        $to_id = $_SESSION['unique_id'];
        $from_id = mysqli_real_escape_string($conn, $_GET['accept_req']);
        
        $sql = mysqli_query($conn, "INSERT INTO friends (unique_id, friend_id)
                                        VALUES ({$from_id}, {$to_id})") or die();
        $sql2 = mysqli_query($conn, "INSERT INTO friends (unique_id, friend_id)
                                        VALUES ({$to_id}, {$from_id})") or die();
        $sql3 = mysqli_query($conn, "DELETE FROM `friend_req` WHERE (`from_req_id`=$from_id AND `to_req_id`=$to_id) OR (`from_req_id`=$to_id AND `to_req_id`=$from_id)") or die();
        header("location: ../friends.php");
    }
        ?>
<?php
//Ignoring Friend Request
        if(isset($_GET['to_user_id'])){
        $from_id = $_SESSION['unique_id'];
        $to_id = mysqli_real_escape_string($conn, $_GET['ignore_req']);
        
        $sql = mysqli_query($conn, "DELETE FROM `friend_req` WHERE (`from_req_id`=$from_id AND `to_req_id`=$to_id) OR (`from_req_id`=$to_id AND `to_req_id`=$from_id)") or die();
        header("location: ../friends.php");
    }
        ?>