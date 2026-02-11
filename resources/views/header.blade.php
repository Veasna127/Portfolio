<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portfolio - Education &amp; Journey</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="{{ asset('style.css') }}"
        rel="stylesheet"/>

    <script>
    function toggleMenu() {
    document.getElementById('dropdownMenu').classList.toggle('hidden');
}
    </script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4b2bee",
                        "background-light": "#f6f6f8",
                        "background-dark": "#131022",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#100d1b] dark:text-slate-100 transition-colors duration-200">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Navigation Bar -->
        <header
            class="sticky top-0 z-50 w-full border-b border-solid border-[#e9e7f3] dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-6 md:px-20 lg:px-40 py-3">
            <div class="mx-auto flex max-w-[1200px] items-center justify-between whitespace-nowrap">
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-8">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                            <path clip-rule="evenodd"
                                d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold leading-tight tracking-tight text-[#100d1b] dark:text-white">
                        Portfolio</h2>
                </div>
                <div class="flex flex-1 justify-end gap-8 items-center">
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="text-sm font-medium hover:text-primary transition-colors"
                            href="{{ route('home') }}">Home</a>
                        <a class="text-sm font-medium hover:text-primary transition-colors"
                            href="{{ route('skill') }}">skill</a>
                        <a class="text-sm font-medium hover:text-primary transition-colors"
                            href="{{ route('project') }}">Projects</a>
                        <a class="text-sm font-medium hover:text-primary transition-colors"
                            href="{{ route('education') }}">Education</a>
                        <a class="text-sm font-medium hover:text-primary transition-colors" href="{{route('about')}}">About</a>
                    </nav>
                    <a href="{{ route('contact') }}">
                        <button
                            class="flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold hover:opacity-90 transition-all">
                            Contact Me
                        </button></a>
                    <div class="relative" id="userMenu">
                        <!-- Avatar -->
                        <button onclick="toggleMenu()" class="relative z-50 focus:outline-none">
                            <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border border-slate-200"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDv3jWRf3qQZG242XVd2UtAhR9RUZ6HaQ2e3PTNDNM8F0GTBzOfesMGstcF3WB3MIA9_I5N2ZMjRQLSg3gLFp2D7-ZtXZ3SR0TFtCCQnVxkU7kwO1ZIUgLt114Tf6WYJBEyMJMOuV_TPAjl758EEx42qOYczRIt_XhZIASvwSRvhKlAoKZcHpHbJ8Eh7GKI1hMrr2KZEuIO3Kma3EfcxAjJAJI0EbF5hbq14-Y5aIr4SHXWCclGVD2Ddr0jcddHeNuCL6VhdB_ymEuY");'>
                            </div>
                        </button>

                        <!-- Dropdown -->
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-3 w-44 rounded-xl bg-white dark:bg-[#1a162f]
                            border border-slate-200 dark:border-white/10 shadow-lg overflow-hidden z-50">

                            <a href="{{ route('login') }}" class="block px-4 py-2 text-sm hover:bg-primary/10 transition">
                                Login
                            </a>

                            <a href="{{ route('register') }}" class="block px-4 py-2 text-sm hover:bg-primary/10 transition">
                                Register
                            </a>

                            <div class="border-t border-slate-200 dark:border-white/10"></div>

                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 transition">
                                Logout
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        @yield('content')
    </div>
</body>
</head>

</html>
