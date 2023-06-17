<?php
session_start();
$_NAV['current_pos'] = 'friend';
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: auth/login.php");
}
?>
<?php include_once "header.php"; ?>


<section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
  <div class="px-4 mx-auto max-w-screen-xl min-h-screen z-10 relative">
    <?php require 'comp/_nav.php' ?>
    <?php include_once "php/alerts.php"; ?>
    <?php include_once "comp/search.php"; ?>
    <?php include_once "php/search.php"; ?>

    <div class="relative shadow-md sm:rounded-lg">
      <h4 class="pt-2 text-white font-bold text-xl">Friend Requests</h4>
      <div class="flex justify-between items-center py-4 bg-white dark:bg-gray-900">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <tbody>

            <?php
            $uniqe_id = $_SESSION['unique_id'];
            $pending = 'Pending';
            $sql = "SELECT * FROM friend_req LEFT JOIN users ON users.unique_id = friend_req.from_req_id WHERE (to_req_id = {$uniqe_id}) ORDER BY req_id";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
              while ($row = mysqli_fetch_assoc($query)) {
                if ($row['to_req_id'] === $uniqe_id) {
                  echo '
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="flex items-center py-4 px-2 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 rounded-full" src=php/images/pfp/' . $row['img'] . ' alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">' . $row['username'] . '</div>
                                <div class="font-normal text-gray-500">' . $row['username'] . '' . $row['hastag'] . '</div>
                            </div>  
                        </th>
                        <td class="py-4">
                            <a href="php/freq.php?accept_req=' . $row['from_req_id'] . '" class="font-medium text-green-700 dark:text-blue-500 hover:underline">Accept</a>
                          </td>
                        <td class="py-4">
                            <a href="php/freq.php?ignore_req=' . $row['from_req_id'] . '" class="font-medium text-red-700 dark:text-blue-500 hover:underline">Ignore</a>
                          </td>
                    </tr>
                        ';
                } else {
                  echo '
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                      
                <th scope="row" class="flex items-center py-4 px-2 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-3">
                        <div class="text-base font-semibold">No any Friend Request Available</div>
                    </div>  
                </th>
                <td role="columnheader"
                    class="text-gray-600 font-normal pr-8 text-left text-sm tracking-normal leading-4">
                    </td>
                  <td role="columnheader"
                    class="text-gray-600 font-normal pr-8 text-left text-sm tracking-normal leading-4">
                  </td>
              </tr>';
                }
              }
            } else {
              echo '
                          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    
              <th scope="row" class="flex items-center py-4 px-2 text-gray-900 whitespace-nowrap dark:text-white">
                  <div class="pl-3">
                      <div class="text-base font-semibold">No any Friend Request Available</div>
                  </div>  
              </th>
              <td role="columnheader"
                  class="text-gray-600 font-normal pr-8 text-left text-sm tracking-normal leading-4">
                  </td>
                <td role="columnheader"
                  class="text-gray-600 font-normal pr-8 text-left text-sm tracking-normal leading-4">
                </td>
            </tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php
    if (isset($_GET['searchTerm'])) {
    } else {
      $sql2 = "SELECT * FROM friends WHERE friend_id = {$_SESSION['unique_id']}";
      $query = mysqli_query($conn, $sql2);
      $ResultCount = mysqli_num_rows($query);
      echo '<h4 class="pt-2 text-white font-bold text-xl">Your Friends</h4>';
      echo '<span class="text-green-800 text-sm font-semibold px-2.5 py-2">' . $ResultCount . ' Friends Found...</span>';

      $sql = "SELECT * FROM friends LEFT JOIN users ON users.unique_id = friends.unique_id WHERE friend_id= {$_SESSION['unique_id']} ORDER BY user_id DESC";
      $query = mysqli_query($conn, $sql);
      $output = "";
      if (mysqli_num_rows($query) == 0) {
        $output .= "";
      } elseif (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          $output .= '
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
            <img class="w-10 rounded-full" src="php/images/pfp/' . $row['img'] . '" alt="Jese image">
            <div class="pl-2">
              <div class="text-base font-semibold">' . $row['username'] . '</div>
              <div class="font-normal text-gray-500">' . $row['username'] . '' . $row['hastag'] . '</div>
            </div>
          </th>
          <td class="py-4 px-6">
            <a href="profile.php?user_id=' . $row['unique_id'] . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Profile</a>
          </td>
          <td class="py-4 px-3">
            <a href="chat.php?user_id=' . $row['unique_id'] . '" class="font-medium hover:underline">
            <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2.5 text-center">Message</button>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    ';
        }
      }
      echo $output;
    }
    ?>



  </div>
  <!-- <div class="bg-gradient-to-b to-transparent from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div> -->
</section>

<?php require 'comp/_footer.php' ?>
<script src="javascript/search.js"></script>
<script src="javascript/users.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>