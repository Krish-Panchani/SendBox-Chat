<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: ../users.php");
}
?>

<?php include_once "../header.php"; ?>
<?php include_once "../php/alerts.php"; ?>

<?php
if (isset($_GET['auth'])) {

  if ($_GET['auth'] == 'login') {

    require 'login.php';
  }

  if ($_GET['auth'] == 'signup') {

    require 'signup.php';
  }
}

?>



<a href="https://forms.gle/7UngoJz64XsFANT68" class="flex justify-center drop-shadow-lg">
                <div class="inline-flex justify-center items-center py-2 px-2 pr-4 my-4 text-sm rounded-full bg-blue-900 text-blue-300 hover:bg-blue-800 mx-auto">
                <span class="text-xs bg-white rounded-full text-blue-600 font-bold px-4 py-1.5 mr-3">Help?</span> <span class="text-xs font-medium sm:text-sm">✨Report a Bug/ User/ Error or Have a Suggestions 💡 for SendBox Chat-App?</span>
                <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                </div>
            </a>

<footer class="p-4 shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https://www.thunderdevelops.in/sendbox/" class="flex items-center mb-4 sm:mb-0">
            <img src="../php/images/sendbox_logo.svg" class="mr-3 h-8" alt="Logo" />
            <span class="self-center text-sm font-bold whitespace-nowrap items-center text-gray-900">Powered by Thunder Develops</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm  sm:mb-0 text-gray-500">
        <li>
                <a href="https://www.thunderdevelops.in/about-us.php" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="https://www.thunderdevelops.in/contact-us.php" class="mr-4 hover:underline md:mr-6 ">Contact</a>
            </li>
            <li>
                <a href="https://www.thunderdevelops.in/privacy-policy.php" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <!-- <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Terms of Services</a>
            </li> -->
        </ul>
    </div>
    <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
    <span class="block text-sm  sm:text-center text-gray-400">© 2023 <a href="https://www.thunderdevelops.in/sendbox/" class="hover:underline text-cyan-800 font-bold">SendBox</a>. All Rights Reserved.</span>
    <span class="block text-sm sm:text-center text-gray-400">
        Design & Developed by
        <a href="https://www.instagram.com/krishpanchani/" 
    target="_blank" title="Krish Panchani | Instagram" class="hover:underline text-gray-800 font-bold"> Krish Panchani </a> And Powerd by 
    <a href="https://www.thunderdevelops.in/" target="_blank" title="Thunder Develops | Official Website" class="hover:underline text-gray-800 font-bold">Thunder Develops. </a>
    </span>
</footer>

<!-- Blocker -->

<script>
  document.addEventListener('contextmenu', event => event.preventDefault());
  document.onkeydown = function (e) {
    if (event.keyCode == 123) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
      return false;
    }
  }
</script>

<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
<script>
  function nospaces(t){
  if(t.value.match(/\s/g)){
    t.value=t.value.replace(/\s/g,'');
  }
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../javascript/showPass.js"></script>
<script src="../javascript/login.js"></script>
</body>

</html>
