<?php

$a = 'Tell your friends about this chat websites. We are providing Private, Safe & Faster Chat';
$b = 'Are you really Enjoying this chat website? Let Give is Feedback at link.';
$c = 'We are currently on beta stage, where we try some new feature and Fix bug issues. If you found any bug then report us at @thunderdevelops.in';
$d = 'Optimized WebChat platform The SendBox BETA v.0.1 is here. Private, Secure & Faster Chat plateform.';
$array = array($a, $b, $c, $d);
?>

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-lg text-center">
    <h1 class="text-2xl font-bold sm:text-3xl">Welcome Back!</h1>

    <p class="mt-4 text-gray-500">
      <?php echo $array[rand(0, count($array) - 1)]; ?>
    </p>
  </div>

  <form action="../php/login.php" method="POST" enctype="multipart/form-data" autocomplete="on" class="form login mx-auto mt-8 mb-0 max-w-md space-y-4">
    <div>
      <label for="email" class="sr-only">Email</label>

      <div class="relative field input">
        <input
          type="email" name="email"
          class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
          placeholder="Enter email"
        />

        <span class="absolute inset-y-0 right-4 inline-flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
            />
          </svg>
        </span>
      </div>
    </div>

    <div>
      <label for="password" class="sr-only">Password</label>
      <div class="relative field input">
        <input
          type="password" name="password" id="pass1"
          class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
          placeholder="Enter password"
        />

        <span class="absolute inset-y-0 right-4 inline-flex items-center" onclick="showPass()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            />
          </svg>
        </span>
        
      </div>
    </div>

    <div class="flex items-center justify-between">
      <p class="text-sm text-gray-500">
        No account?
        <a class="underline" href="auth.php?auth=signup">Sign up</a>
      </p>

      <button
        type="submit"
        class="field button ml-3 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
      >
        Log In
      </button>
    </div>
  </form>
</div>