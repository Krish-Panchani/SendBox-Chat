<?php
session_start();
$_NAV['current_pos'] = 'myprofile';
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>
<?php include_once "php/update_pfp.php"; ?>
<?php include_once "php/update_profile.php"; ?>

<?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_assoc($sql);
    } else {
      header("location: users.php");
    }
    ?>

    <!-- Edit-Profile modal -->
    <div id="edit_profile-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-800 hover:text-white" data-modal-toggle="edit_profile-modal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium  text-white">Edit your profile</h3>
            <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium  text-white">Your email</label>
                <input type="email" name="email" id="email" class=" border text-sm rounded-lg  block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" value="<?php echo $row['email']; ?>" required>
              </div>
              <div>
                <label for="username" class="block mb-2 text-sm font-medium  text-white">Username</label>
                <div class="flex">
                  <span class="inline-flex items-center px-3 text-sm border border-r-0 rounded-l-md bg-gray-600 text-gray-400 border-gray-600">
                    @
                  </span>
                  <input type="text" id="username" name="username" onkeyup="nospaces(this)" maxlength="30" class="rounded-lg  block flex-1 min-w-0 w-full text-sm p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white " value="<?php echo $row['username']; ?>">
                  <span class="inline-flex items-center px-3 text-sm border border-r-0 rounded-r-md bg-gray-600 text-gray-400 border-gray-600">
                    <?php echo $row['hastag']; ?>
                  </span>
                </div>
                <div><span class="text-sm text-gray-400">Maximum 30 Latter allowed</span></div>
              </div>
              <div>

                <label for="about" class="block mb-2 text-sm font-medium  text-white">About Me</label>
                <textarea id="about" name="about" maxlength="90" class="block p-2.5 w-full text-sm   rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white " maxlength="200"><?php echo $row['about']; ?></textarea>

                <div><span class="text-sm text-gray-400">Maximum 90 Latter allowed</span></div>
              </div>
              <div class="flex justify-between">
                <a href="#" class="text-sm  hover:underline text-blue-500">Lost Password?</a>
              </div>
              <button type="submit" name="update_profile" class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Edit
                now</button>


            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Edit-Profile PIC modal -->
    <div id="edit_profile_pic-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
      <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-800 hover:text-white" data-modal-toggle="edit_profile_pic-modal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium text-white">Edit your profile Pic</h3>
            <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">


              <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">

                <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                  Profile Photo <span class="text-red-600"> </span>
                </label>

                <div class="text-center">
                  <!-- Current Profile Photo -->
                  <div class="mt-2">
                    <img src="php/images/pfp/<?php echo $row['img']; ?>" id="preview" class="w-40 h-40 m-auto rounded-full shadow">
                  </div>

                  <label for="pfp" class="inline-flex items-center px-4 py-2 bg-white border  rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3">
                    Select New Photo
                  </label>
                  <input type="file" id="pfp" name="pfp" accept="image/*" class="hidden items-center px-4 py-2 bg-white border  rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3">
                </div>
              </div>
              <button type="submit" name="update_pfp" class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Save Profile Pic</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
  <div class="px-4 mx-auto max-w-screen-xl min-h-screen z-10 relative">

    <?php require 'comp/_nav.php' ?>

    <?php include_once "php/alerts.php"; ?>

    

    <?php
    $sql2 = "SELECT * FROM friends WHERE friend_id = {$_SESSION['unique_id']}";
    $query = mysqli_query($conn, $sql2);
    $ResultCount = mysqli_num_rows($query);
    $Friend_count = '<span class="text-green-500 text-sm font-semibold py-2">' . $ResultCount . ' Friends</span>';
    ?>

    <div class="border border-gray-200 rounded-lg shadow-md  mx-auto">
      <div class="flex flex-col pl-5 py-10 items-center">
        <div class="flex">
          <div class="mb-3 flex flex-col items-center px-3">
            <img class="w-24 h-24 rounded-full shadow-lg" src="php/images/pfp/<?php echo $row['img']; ?>" alt="profile image" />
            <button class="text-xs font-semibold hover:text-blue-500 text-gray-400" type="button" data-modal-toggle="edit_profile_pic-modal">
              Change Avtar
            </button>
          </div>



          <div class="flex flex-col px-3">
            <h5 class="mb-1 text-xl font-bold text-gray-100">
              <?php echo $row['username']; ?>
            </h5>
            <h5 class="mb-1 text-xl text-gray-200">
              <?php echo $row['full_username']; ?>
            </h5>
            <p class="mb-1 text-l font-small text-gray-300">
              <?php echo nl2br(htmlspecialchars($row['about']), false); ?>
            </p>
            <?php echo $Friend_count; ?>
          </div>
        </div>
        <div class="flex mt-4 space-x-3 md:mt-6">
          <button class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" type="button" data-modal-toggle="edit_profile-modal">
            Edit Profile
          </button>
        </div>
      </div>
    </div>

  </div>
    <div class="bg-gradient-to-b to-transparent from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</section>

<?php require 'comp/_footer.php' ?>
<script>
  function nospaces(t){
  if(t.value.match(/\s/g)){
    t.value=t.value.replace(/\s/g,'');
  }
}
</script>
<script src="javascript/pfp_edit.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>