<?php include_once "header.php"; ?>
<section class="bg-gray-900 bg-[url('php/images/hero-pattern-dark.svg')]">
    <div class="px-4 mx-auto max-w-screen-xl z-10 relative">

        <div id="alert-4" class="flex my-2 p-4 mb-4  rounded-lg  bg-gray-800 text-yellow-300" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                This webapllication is currently running under ALPHA testing stage and may have some Bugs. If you find any Bug/Error then <a href="https://forms.gle/7UngoJz64XsFANT68" class="font-semibold underline hover:no-underline">Report Here</a>.
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5  inline-flex h-8 w-8 bg-gray-800 text-yellow-300 hover:bg-gray-700" data-dismiss-target="#alert-4" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <nav class="px-2 py-4 w-full z-20 sticky top-0 left-0">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <img src="php/images/sendbox_logo_white.svg" class="h-6 mr-3 sm:h-9" alt="SendBox Logo">
                </a>
                <div class="flex md:order-2">
                    <a href="Auth/auth.php?auth=login">
                        <button type="button" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 drop-shadow-lg">Login</button>
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium bg-blue-900 rounded-2xl drop-shadow-lg">
                        <li>
                            <a href="/sendbox" class="block py-2 pl-3 pr-4 text-white md:p-0 hover:text-gray-300" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="../about-us.php" class="block py-2 pl-3 pr-4 text-white md:p-0 hover:text-gray-300">About</a>
                        </li>
                        <li>
                            <a href="../service.php" class="block py-2 pl-3 pr-4 text-white md:p-0 hover:text-gray-300">Services</a>
                        </li>
                        <li>
                            <a href="../contact-us.php" class="block py-2 pl-3 pr-4 text-white md:p-0 hover:text-gray-300">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <a href="#" class="flex justify-center drop-shadow-lg">
            <div class="inline-flex justify-center items-center py-2 px-2 pr-4 my-4 text-sm rounded-full bg-blue-900 text-blue-300 hover:bg-blue-800 mx-auto">
                <span class="text-xs bg-white rounded-full text-blue-600 font-bold px-4 py-1.5 mr-3">New!</span> <span class="text-xs font-medium sm:text-sm">⚡ The Thunder Develops just Launched their First Chat App. 🔥Explore Now!</span>
                <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
        </a>

        <div class="overflow-hidden py-5">
            <div class="px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                    <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-400">
                            Alpha
                        </p>
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl sm:leading-none">
                            Welcome to<br class="hidden md:block" />
                            best Chat plateform
                            <span class="inline-block text-cyan-500">Send Box</span>
                        </h2>
                        <p class="text-base text-gray-400 md:text-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ullam pariatur. Velit, veniam quas dolores nihil saepe ullam facere commodi!
                        </p>

                        <a href="/" aria-label="" class="py-2 inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-400 hover:text-teal-700">
                            Learn more
                            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="px-5 pt-6 pb-5 text-center border border-gray-300 rounded lg:w-2/5">
                        <div class="mb-5 font-semibold text-white">Create an account</div>
                        <div class="flex justify-center w-full mb-3">
                            <a href="Auth/auth.php?auth=login">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-380.2 274.7 65.7 65.8" class="w-12 h-12">
                                    <circle cx="-347.3" cy="307.6" r="32.9" fill="#e0e0e0" />
                                    <circle cx="-347.3" cy="307.1" r="32.4" fill="#fff" />
                                    <defs>
                                        <path id="a" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                    </defs>
                                    <clipPath id="b">
                                        <use overflow="visible" xlink:href="#a" />
                                    </clipPath>
                                    <path fill="#fbbc05" d="M-370.8 320.3v-26l17 13z" clip-path="url(#b)" />
                                    <defs>
                                        <path id="c" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                    </defs>
                                    <clipPath id="d">
                                        <use overflow="visible" xlink:href="#c" />
                                    </clipPath>
                                    <path fill="#ea4335" d="M-370.8 294.3l17 13 7-6.1 24-3.9v-14h-48z" clip-path="url(#d)" />
                                    <defs>
                                        <path id="e" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                    </defs>
                                    <clipPath id="f">
                                        <use overflow="visible" xlink:href="#e" />
                                    </clipPath>
                                    <path fill="#34a853" d="M-370.8 320.3l30-23 7.9 1 10.1-15v48h-48z" clip-path="url(#f)" />
                                    <g>
                                        <defs>
                                            <path id="g" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                        </defs>
                                        <clipPath id="h">
                                            <use overflow="visible" xlink:href="#g" />
                                        </clipPath>
                                        <path fill="#4285f4" d="M-322.8 331.3l-31-24-4-3 35-10z" clip-path="url(#h)" />
                                    </g>
                                </svg>

                            </a>
                        </div>
                        <p class="max-w-md px-5 mb-3 text-xs text-gray-300 sm:text-sm md:mb-5">
                            Not have any account? Simply register and Quickly Access your Chat.
                        </p>
                        <div class="flex items-center w-full mb-5">
                            <hr class="flex-1 border-gray-300" />
                            <div class="px-3 text-xs text-gray-100 sm:text-sm">or</div>
                            <hr class="flex-1 border-gray-300" />
                        </div>
                        <a href="Auth/auth.php?auth=login" class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-gray-100 focus:shadow-outline focus:outline-none">
                            Sign Up with Email
                        </a>
                    </div>
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