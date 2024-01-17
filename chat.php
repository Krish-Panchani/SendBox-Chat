<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>

//HTML header 
<?php include_once "header.php"; ?>
<?php include_once "php/check_friends.php"; ?>

<body>
  <section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
    <div class="px-4 mx-auto max-w-screen-xl min-h-screen z-10 relative">

      <section class="chat-area flex justify-center">
        <div class="flex-1 justify-center flex flex-col max-w-md min-h-sm max-h-screen">
          <?php
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          } else {
            header("location: users.php");
          }
          ?>

          <div class="flex sm:items-center justify-between py-3 border-b-2 border-gray-200 bg-blue-900">
            <div class="relative flex items-center space-x-4 ">
              <a href="users.php" class="back-icon"><i class="fas fa-arrow-left text-white"></i></a>
              <div class="relative">

                
                <img class="w-10 sm:w-12 h-10 sm:h-12 rounded-full" src="php/images/pfp/<?php echo $row['img']; ?>">
              </div>
              <div class="flex flex-col leading-tight">
                <div class="text-2xl mt-1 flex items-center">
                  <span class="text-lg font-bold text-gray-100 mr-3"><?php echo $row['username'] ?></span>
                </div>
                <span class="text-sm text-gray-400"><?php echo $row['status']; ?></span>
              </div>
            </div>
          </div>

          <div class="chat-box flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">

          </div>

          <form action="#" class="typing-area mx-2 my-2">
            <div class="flex">
              <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

              <textarea name="message" id="message" rows="1" 
              oninput="this.rows = Math.min(3, this.value.split('\n').length);" 
              class="resize-none input-field w-full focus:outline-none focus:placeholder-gray-400 text-gray-100 placeholder-gray-600 bg-transparent rounded-l-md px-2 py-3 mr-1" 
              placeholder="Type a message here..." 
              autocomplete="off"></textarea>

              <button 
              onclick="document.getElementById('message').rows = 1;"
              class="inline-flex items-center justify-center rounded-r-md px-4 py-3 transition duration-500 ease-in-out text-white bg-blue-500 hover:bg-blue-400 focus:outline-none">
              <i class="fab fa-telegram-plane"></i>
            </button>

            </div>
          </form>
        </div>
      </section>

    </div>
    <div class="bg-gradient-to-b to-transparent from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
  </section>

  <style>
    .scrollbar-w-2::-webkit-scrollbar {
      width: 0.25rem;
      height: 0.25rem;
    }


    .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
      background-color: #0d47a1;
    }

    .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
      border-radius: 0.25rem;
    }
  </style>


  <script>
    const el = document.getElementById('messages')
    el.scrollTop = el.scrollHeight
  </script>


  <script src="javascript/chat.js"></script>
  <script src="javascript/delete_msg.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>
