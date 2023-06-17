<!-- On click message btn check users is friend or not. -->

<?php

$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

$sql = mysqli_query($conn, "SELECT * FROM friends WHERE unique_id = '{$user_id}' AND friend_id = '{$_SESSION['unique_id']}'");

if (mysqli_num_rows($sql) == 0){

    header('location: friends.php');
    $_SESSION['alertError'] = 'Add person to friend list for Chatting';
}

?>