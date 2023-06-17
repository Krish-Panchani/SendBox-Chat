<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();

$sql2 = "SELECT msg_id FROM `messages` WHERE outgoing_msg_id = $outgoing_id";
$result = mysqli_query($conn, $sql2);
while($row = mysqli_fetch_assoc($result)){
    $latest_id = $row['msg_id'] ;
}

$sql3 = mysqli_query($conn, "UPDATE `friends` SET `last_msg_id` = '$latest_id' WHERE `unique_id` = $incoming_id OR `friend_id` = $incoming_id;") or die();

}

    else{
        header("location: /sendbox");
    }

}
?>