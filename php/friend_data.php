<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    // $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $sql = "SELECT * FROM friends LEFT JOIN users ON users.unique_id = friends.unique_id WHERE friend_id= {$outgoing_id} ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
        $output .= '<div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="php/images/pfp/'. $row['img'] .'" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">'. $row['username']. '</h5>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
            </div>
        </div>
    </div>';
        }
    }
    echo $output;
?>