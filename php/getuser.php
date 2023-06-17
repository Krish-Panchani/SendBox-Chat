<?php
  session_start();

  include_once "config.php";
        // Insert the record
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_GET["searchTerm"]);

    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (username LIKE '%{$searchTerm}%' OR hastag LIKE '%{$searchTerm}%' OR full_username LIKE '%{$searchTerm}%') ";
    // $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (username LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
  $ResultCount = mysqli_num_rows($query);
    if(mysqli_num_rows($query) > 0){
      echo '<span class="text-green-800 text-sm font-semibold px-2.5 py-2">' . $ResultCount . ' Result Found</span>';
      while($row = mysqli_fetch_assoc($query)){
        echo '
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <tbody>
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
      <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
        <img class="w-10 h-10 rounded-full" src="php/images/pfp'. $row['img'] .'" alt="Profile Pic">
        <div class="pl-3">
          <div class="text-base font-semibold">' . $row['username']. '</div>
          <div class="font-normal text-gray-500">' . $row['username']. '' . $row['hastag']. '</div>
        </div>
      </th>
      <td class="py-4 px-6">
                <a href="profile.php?user_id='. $row['unique_id'] .'" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Profile
    </tr>
  </tbody>
</table>
</div>
        ';
      }
    }else{
      echo '<span class="text-red-800 text-sm font-semibold px-2.5 py-0.5">0 Result Found</span>';
        // $output .= 'No user found related to your search term';
        
    }

?>