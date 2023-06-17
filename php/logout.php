<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $logout_id = $_SESSION['unique_id'];
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id=$logout_id");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: /sendbox");
    }
?>