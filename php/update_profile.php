
<?php
if(isset($_POST['update_profile'])){

    $unique_id = $_SESSION['unique_id'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  $row = mysqli_fetch_assoc($sql);

$full_username = $username . $row['hastag'];

$update_pfp_query = mysqli_query($conn, "UPDATE `users` SET `email` = '{$email}', `username` = '{$username}', `full_username` = '{$full_username}', `about` = '{$about}' WHERE `users`.`unique_id` = $unique_id;");

$_SESSION['alertSuccess'] = 'Profile Details Updated.';
}
?>