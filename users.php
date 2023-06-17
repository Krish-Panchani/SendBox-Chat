<?php
session_start();
$_NAV['current_pos'] = 'user';
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: /sendbox");
}
?>
<?php include_once "header.php"; ?>

<section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
  <div class="px-4 mx-auto max-w-screen-xl min-h-screen z-10 relative">


    <?php require 'comp/_nav.php' ?>
    <?php include_once "php/alerts.php"; ?>

    <div class="w-full max-w-md p-4 shadow-md sm:p-8 my-4 items-center justify-center mx-auto drop-shadow-2xl">
      <div class="flex items-center justify-between mb-4 ">
        <h5 class="text-xl font-bold leading-none text-white">Your Chats</h5>
</div>
      <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-400 ">

          <?php
          $outgoing_id = $_SESSION['unique_id'];
          $sql2 = "SELECT * FROM friends LEFT JOIN users ON users.unique_id = friends.unique_id WHERE friend_id= {$outgoing_id} AND last_msg_id > 0 ORDER BY last_msg_id DESC";
          $query2 = mysqli_query($conn, $sql2);
          $userscount = mysqli_num_rows($query2);
          
          if ($userscount == 0){
            echo ' 
            <span class="text-gray-400">No Any chat found! Search & Make some Friends to Chat with them.</span>
            ';
          }
          while ($row = mysqli_fetch_assoc($query2)) {
            $sql3 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
            $query3 = mysqli_query($conn, $sql3);
            $row2 = mysqli_fetch_assoc($query3);
            (mysqli_num_rows($query3) > 0) ? $result = htmlspecialchars($row2['msg']) : $result = "No message available";
            $msg = $result;
            if (isset($row2['outgoing_msg_id'])) {
              ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
            } else {
              $you = "";
            }
            if ($row['status'] == 'Active now') {
              $status = '<div class="h-1.5 w-1.5 rounded-full bg-green-400 mr-2"></div>';
            } else {
              $status = '<div class="h-1.5 w-1.5 rounded-full bg-red-500 mr-2"></div>';
            }
            echo '
                  <li class="py-3 sm:py-4 ">
                <a href="chat.php?user_id=' . $row['unique_id'] . '">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="php/images/pfp/' . $row['img'] . '" alt="Neil image">
                                ' . $status . '
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium  truncate text-white">
                                  ' . $row['username'] . '
                                </p>
                                <p class="text-sm truncate text-gray-400">' . $you . htmlspecialchars($msg) . '</p>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-white">
                            <span class="text-xs text-gray-400">' . $row['full_username'] . '
                            </div>
                        </div>
                        </a>
                    </li>
            
             ';
          }
          ?>
        </ul>
      </div>
    </div>

  </div>
  <div class="bg-gradient-to-b to-transparent from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</section>

<?php require 'comp/_footer.php' ?>

<script src="javascript/users.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>