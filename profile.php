<?php
session_start();
$_NAV['current_pos'] = 'profile';
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>
<section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
  <div class="px-4 mx-auto max-w-screen-xl min-h-screen z-10 relative">

<?php require 'comp/_nav.php' ?>
<?php include_once "php/alerts.php"; ?>

<?php
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if (mysqli_num_rows($sql) > 0) {
  $row = mysqli_fetch_assoc($sql);
} else {
  header("location: users.php");
}
?>

<?php
    $sql2 = "SELECT * FROM friends WHERE friend_id = {$_GET['user_id']}";
    $query = mysqli_query($conn, $sql2);
    $ResultCount = mysqli_num_rows($query);
    $Friend_count = '<span class="text-green-500 text-sm font-semibold py-2">' . $ResultCount . ' Friends</span>';
    ?>
<div class="w-full max-w-sm  border rounded-lg shadow-md border-gray-200 mx-auto">

  <div class="flex flex-col items-center py-6">
    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="php/images/pfp/<?php echo $row['img']; ?>" alt="profile image" />
    <h5 class="mb-1 text-xl font-medium text-white"><?php echo $row['full_username']; ?></h5>
    <p class="mb-1 text-sm font-sm text-white"><?php echo nl2br(htmlspecialchars($row['about']), false); ?></p>

    <?php echo $Friend_count;?>

    <div class="flex mt-4 space-x-3 md:mt-6">
      <!-- PHP for check users friend status -->
      <?php
      $sql2 = mysqli_query($conn, "SELECT * FROM friends WHERE unique_id = '{$user_id}' AND friend_id = '{$_SESSION['unique_id']}'");
      $sql3 = mysqli_query($conn, "SELECT * FROM friend_req WHERE (from_req_id = {$user_id} AND to_req_id = {$_SESSION['unique_id']}) OR (from_req_id = {$_SESSION['unique_id']} AND to_req_id = {$user_id})");
      if (!$sql2 || mysqli_num_rows($sql2) > 0) {
        echo '<a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white border border-gray-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">Friends</a>';
        echo ' <a href="chat.php?user_id=' . $row['unique_id'] . '" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Message</a>';

      } elseif (!$sql3 || mysqli_num_rows($sql3) > 0) {
        $row = mysqli_fetch_assoc($sql3);
        echo '<a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300">' . $row["status"] . '</a>';
        echo '<a href="php/freq.php?cancel=' . $user_id . '" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Cancel</a>';
      } else {
        echo '<a href="php/freq.php?to_user_id=' . $user_id . '" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add Friend</a>';
      }
      ?>
    </div>
  </div>
</div>

</div>
  <div class="bg-gradient-to-b to-transparent from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</section>

<?php require 'comp/_footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>