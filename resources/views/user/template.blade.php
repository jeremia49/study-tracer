<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more" />
    <meta name="author" content="Themesberg" />
    <meta name="generator" content="Hugo 0.58.2" />

    @hasSection('title')
        <title>@yield('title')</title>
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')

    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    <nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                        class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex ml-2 md:mr-24">
                        <img src="/img/logo-unimed.png" class="h-8 mr-3" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Study
                            Tracer</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <!-- for dark mode -->
                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 animate-[spin_450ms_ease-in-out]" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 animate-[spin_450ms_ease-in-out] text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="tooltip-toggle" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                        Toggle dark mode
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://www.gravatar.com/avatar/00000000000000000000000000000000"
                                    alt="user photo" />
                            </button>
                        </div>

                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white text-center" role="none">
                                    {{ auth()->user()->nama }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300 text-center"
                                    role="none">
                                    {{ auth()->user()->nim }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="{{ route('user.logout') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    @include('user.menu')

    <div id="main-content" class="grid grid-cols-1 content-between relative w-full h-[90vh] overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main>
            <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                <div class="mb-4 col-span-full xl:mb-2">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        Dashboard
                    </h1>
                </div>
                <!-- Right Content -->
                <div class="col-span-full">
                    <div
                        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full pt-5 mb-10 overflow-auto scrollbar-hide">
                            <ul id="dotPaginate" class="wrapper-dot-pagination px-3">
                                <!-- <li class="done">
                      <span class=""></span>
                    </li>
                    <li class="active">
                      <span class=""></span>
                    </li>
                    <li class="">
                      <span class=""></span>
                    </li> -->
                            </ul>
                        </div>
                        <form action="#">
                            <div class="pages">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                    General information
                                </h3>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="style-input bg-gray-50" placeholder="Bonnie" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="last-name" id="last-name"
                                            class="style-input bg-gray-50" placeholder="Green" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                        <input type="text" name="country" id="country"
                                            class="style-input bg-gray-50" placeholder="United States" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                        <input type="text" name="city" id="city"
                                            class="style-input bg-gray-50" placeholder="e.g. San Francisco" />
                                    </div>
                                </div>
                            </div>
                            <div class="pages">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                    Address
                                </h3>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" name="first-name1" id="first-name1"
                                            class="style-input bg-gray-50" placeholder="Bonnie" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="last-name1" id="last-name1"
                                            class="style-input bg-gray-50" placeholder="Green" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                        <input type="text" name="country1" id="country1"
                                            class="style-input bg-gray-50" placeholder="United States" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                        <input type="text" name="city1" id="city1"
                                            class="style-input bg-gray-50" placeholder="e.g. San Francisco" />
                                    </div>
                                </div>
                            </div>
                            <div class="pages">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                    Address
                                </h3>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" name="first-name1" id="first-name1"
                                            class="style-input bg-gray-50" placeholder="Bonnie" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="last-name1" id="last-name1"
                                            class="style-input bg-gray-50" placeholder="Green" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                        <input type="text" name="country1" id="country1"
                                            class="style-input bg-gray-50" placeholder="United States" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city1"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                        <input type="text" name="city1" id="city1"
                                            class="style-input bg-gray-50" placeholder="e.g. San Francisco" />
                                    </div>
                                </div>
                            </div>
                            <div class="collect-btn sm:col-full">
                                <a id="btnPrevious" onclick="nextPreview(-1,event)"
                                    class="text-white bg-slate-700 cursor-pointer hover:bg-slate-800 focus:ring-4 focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                    Previous
                                </a>
                                <a id="btnNext" href="www.google.com" onclick="nextPreview(1,event)"
                                    class="cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Next
                                </a>
                                <button id="btnChecked" onclick="nextPreview(0,event)"
                                    class=" text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                    type="submit">
                                    checked
                                </button>
                                <button id="btnSubmit"
                                    class=" text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                    type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="p-4 mt-6 bg-white md:flex md:items-center md:justify-between md:p-6 xl:p-8 dark:bg-gray-800">
            <ul class="flex flex-wrap items-center mb-6 space-y-1 md:mb-0">
                <li>
                    <a href="#"
                        class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Terms
                        and conditions</a>
                </li>
                <li>
                    <a href="#"
                        class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy
                        Policy</a>
                </li>
                <li>
                    <a href="#"
                        class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
                </li>
                <li>
                    <a href="#"
                        class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Cookie
                        Policy</a>
                </li>
                <li>
                    <a href="#"
                        class="text-sm font-normal text-gray-500 hover:underline dark:text-gray-400">Contact</a>
                </li>
            </ul>
            <div class="flex space-x-6 sm:justify-center">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </footer>
    </div>
    </div>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- <script src="../node_modules/flowbite/dist/flowbite.min.js"></script> -->
    <!-- for online -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="/js/dark-mode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script></script>
    <script>
        // import Validation from "./assets/js/form-validation.js";
        // run this function built dot pagination
        (() => {
            // get length pages
            const n = document.getElementsByClassName("pages").length;
            const containerDPagination = document.getElementById("dotPaginate");
            // create dot-pagination as much n
            for (let i = 0; i < n; i++) {
                const createLi = document.createElement("li");
                // createLi.class
                const createSpan = document.createElement("span");
                createLi.appendChild(createSpan);
                // push to containerPagination
                containerDPagination.appendChild(createLi);
            }
        })();

        let currentTab = 0;
        let validateInput = {};
        showTab(currentTab);

        function nextPreview(n, e) {

            e.preventDefault();
            // this.preventDefault();
            // chcek valadate when got error
            const pages = document.getElementsByClassName("pages");
            if ((n === 1 || n === 0) && !validationForms()) return false;

            pages[currentTab].style.display = "none";
            currentTab += n;
            showTab(currentTab);

        }

        function showTab(currentIndex) {
            // get elements
            const getPages = document.getElementsByClassName("pages");
            const btnPrevious = document.getElementById("btnPrevious");
            const btnNext = document.getElementById("btnNext");
            const btnSubmit = document.getElementById("btnSubmit");
            const btnCheck = document.getElementById("btnChecked");


            // handle show page
            getPages[currentIndex].style.display = "block";
            // add validaton for each pages
            // handle show btn prev or next
            currentIndex === 0 ?
                (btnPrevious.style.display = "none") :
                (btnPrevious.style.display = "block");
            // handle submit or next

            if (currentIndex === getPages.length - 1) {
                btnSubmit.style.display = "block";
                btnCheck.style.display = "block";
                btnNext.style.display = "none";
            } else {
                btnNext.style.display = "block";
                btnSubmit.style.display = "none";
                btnCheck.style.display = "none";

            }
            getFormPage(getPages[currentIndex]);
            fixInStepIndicator(currentIndex);
        }

        function getFormPage(sectionForm) {
            const forms = sectionForm.getElementsByTagName("input");
            //  added for default check value
            const defaultValidate = (e) => e.trim().length > 2;
            // loop all object forms
            for (const form of forms) {
                // create validate
                validateInput[form.getAttribute("id")] = defaultValidate;
                // createElementSpan and added message error
                const newSpan = createElementSpan(form, "afterend");
                addedEventAndMessage(form, newSpan)

            }
        }

        function addedEventAndMessage(inputForm, PlaceMessage, message = "character must more than  2") {
            const cleanInput = inputForm.value.trim();
            inputForm.addEventListener("keyup", delay(function(e) {
                const validate = validateInput[inputForm.getAttribute("id")](e.target.value);
                if (validate) {
                    e.target.setAttribute("class", "style-input bg-gray-50 bg-gray-50");
                    PlaceMessage.classList.add("hidden");
                } else {

                    e.target.classList.add("input-error");
                    PlaceMessage.classList.remove("hidden");
                    PlaceMessage.innerHTML = message;
                }
            }, 500));
        }

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this,
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }

        function validationForms() {
            // get tab of page
            const tab = document.getElementsByClassName("pages")[currentTab];
            const inputs = tab.getElementsByTagName("input");
            // this variable using for result validate
            let result = true;
            // loop trought input
            for (const input of inputs) {
                const checkInput = validateInput[input.getAttribute('id')](input.value);
                if (!checkInput) {
                    input.classList.add('input-error');
                    result = false;
                }
            }
            // step dot done
            if (result) {
                const containerDPagination = document.getElementById("dotPaginate");
                containerDPagination.getElementsByTagName("li")[currentTab].classList.add("done");
            }
            return result;
        }

        function createElementSpan(element, position) {
            const createSpan = document.createElement("span");
            createSpan.classList.add("d-message-error");
            createSpan.classList.add("hidden");
            // create id with addtional the begining text
            createSpan.setAttribute("id", `me-${element.getAttribute("id")}`);
            return element.insertAdjacentElement(position, createSpan);
        }

        function fixInStepIndicator(currentStep) {
            // get element li at the container ul
            const containerStep = document.getElementById("dotPaginate");
            const allStep = containerStep.getElementsByTagName("li");
            // get data as object
            for (let i = 0; i < allStep.length; i++) {
                allStep[i].classList.remove("active");
            }
            // after fix all active to none set which current active
            allStep[currentStep].classList.add("active");
        }
    </script>
</body>

</html>
