<?php
session_start();
  include_once "config.php";

if (isset($_GET['delete_msg_id'])) {
    $delete_id = $_GET['delete_msg_id'];
    $sql_delete_msg = mysqli_query($conn, "DELETE FROM `messages` WHERE `messages`.`msg_id` = $delete_id");
  }
?>