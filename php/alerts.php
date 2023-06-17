<?php
if(isset($_SESSION['alertSuccess'])) :
?>

<div id="alertSuccess" class="relative px-8 py-3 pl-4 pr-10 leading-normal text-green-400 border border-green-400 rounded-lg drop-shadow-lg my-2" role="alert">
    <span class="text-sm font-medium"><?= $_SESSION['alertSuccess']; ?></span>
    <span onclick="closeMessage()" class="absolute inset-y-0 right-0 flex items-center mr-4">
        <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
            <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
    </span>
</div>

<script>
function closeMessage() {
    var a = document.getElementById('alertSuccess'); {
        a.style.display = "none";
    }
}
</script>

<?php
        unset($_SESSION['alertSuccess']);
endif;
?>


<?php
if(isset($_SESSION['alertError'])) :
?>

<div id="alertError" class="relative px-8 py-3 pl-4 pr-10 leading-normal text-yellow-400 border border-yellow-400 my-2 rounded-lg drop-shadow-lg" role="alert">
    <span class="text-sm font-medium"><?= $_SESSION['alertError']; ?></span>
    <span onclick="closeMessage()" class="absolute inset-y-0 right-0 flex items-center mr-4">
        <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
            <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
    </span>
</div>

<script>
function closeMessage() {
    var b = document.getElementById('alertError'); {
        b.style.display = "none";
    }
}
</script>

<?php
        unset($_SESSION['alertError']);
endif;
?>

<?php
if(isset($_SESSION['messageError'])) :
?>

<div id="messageError" class="relative px-8 py-3 pl-4 pr-10 leading-normal text-red-400 border border-red-400 my-2 rounded-lg drop-shadow-lg" role="alert">
    <span class="text-sm font-medium"><?= $_SESSION['messageError']; ?></span>
    <span onclick="closeMessage()" class="absolute inset-y-0 right-0 flex items-center mr-4">
        <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
            <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
    </span>
</div>

<script>
function closeMessage() {
    var c = document.getElementById('messageError'); {
        c.style.display = "none";
    }
}
</script>

<?php
        unset($_SESSION['messageError']);
endif;
?>