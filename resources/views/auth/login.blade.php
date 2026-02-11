<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Login Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
        body { font-family: 'Manrope', sans-serif; }
        .bg-mesh {
            background-color: #f6f6f8;
            background-image:
                radial-gradient(at 0% 0%, rgba(75, 43, 238, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(165, 180, 252, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(75, 43, 238, 0.05) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(165, 180, 252, 0.1) 0px, transparent 50%);
        }
        .dark .bg-mesh {
            background-color: #131022;
            background-image:
                radial-gradient(at 0% 0%, rgba(75, 43, 238, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(75, 43, 238, 0.1) 0px, transparent 50%);
        }
    </style>
</head>

<body class="bg-mesh min-h-screen flex flex-col font-display transition-colors duration-300">
    <main class="flex-1 flex flex-col items-center justify-center px-4 py-12">
        <div class="w-full max-w-[440px]">

            <!-- Login Card -->
            <div class="bg-white dark:bg-[#1c1930] rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.2)] border border-[#e9e7f3] dark:border-white/5 overflow-hidden">
                <div class="p-8 sm:p-10">

                    <!-- Header -->
                    <div class="text-center mb-10">
                        <h1 class="text-[#100d1b] dark:text-white text-3xl font-bold mb-3">Welcome Back</h1>
                        <p class="text-[#594c9a] dark:text-gray-400 text-base">Enter your credentials to manage your portfolio</p>
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Display errors -->
                        @if ($errors->any())
                            <div class="text-red-600 text-sm mb-2">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="block text-[#100d1b] dark:text-gray-200 text-sm font-semibold ml-1">Email Address</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">mail</span>
                                </div>
                                <input name="email" required type="email" placeholder="name@student.edu"
                                    class="w-full bg-background-light dark:bg-white/5 border border-[#d3cfe7] dark:border-white/10 rounded-lg h-14 pl-12 pr-4 text-[#100d1b] dark:text-white placeholder:text-[#594c9a]/50 dark:placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-base" />
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="space-y-2">
                            <div class="flex justify-between items-center ml-1">
                                <label class="block text-[#100d1b] dark:text-gray-200 text-sm font-semibold">Password</label>
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <input name="password" required type="password" placeholder="••••••••"
                                    class="w-full bg-background-light dark:bg-white/5 border border-[#d3cfe7] dark:border-white/10 rounded-lg h-14 pl-12 pr-12 text-[#100d1b] dark:text-white placeholder:text-[#594c9a]/50 dark:placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-base" />
                                <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between py-1">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <div class="relative flex items-center">
                                    <input name="remember" type="checkbox" class="peer appearance-none w-5 h-5 border-2 border-[#d3cfe7] dark:border-white/20 rounded checked:bg-primary checked:border-primary transition-all cursor-pointer" />
                                    <span class="material-symbols-outlined absolute text-white text-[16px] pointer-events-none opacity-0 peer-checked:opacity-100 transition-opacity left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">check</span>
                                </div>
                                <span class="text-sm text-[#594c9a] dark:text-gray-400 font-medium group-hover:text-[#100d1b] dark:group-hover:text-white transition-colors">Remember me</span>
                            </label>
                            <a class="text-sm font-semibold text-primary hover:underline underline-offset-4" href="#">Forgot Password?</a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="w-full h-14 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg
                            shadow-lg shadow-primary/25 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                            <span>Login</span>
                            <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </button>

                        <!-- Divider -->
                        <div class="relative my-8 text-center">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-[#e9e7f3] dark:border-white/5"></div>
                            </div>
                            <span class="relative bg-white dark:bg-[#1c1930] px-4 text-xs font-bold uppercase tracking-widest text-[#594c9a]/60">Or continue with</span>
                        </div>

                        <!-- Social Logins -->
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" class="flex items-center justify-center gap-3 h-12 rounded-lg border border-[#e9e7f3] dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors group">
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <svg class="w-full h-full" viewBox="0 0 24 24">
                                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
                                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-bold text-[#100d1b] dark:text-white">Google</span>
                            </button>
                            <button type="button" class="flex items-center justify-center gap-3 h-12 rounded-lg border border-[#e9e7f3] dark:border-white/10 hover:bg-gray-50 dark:hover:bg-white/5 transition-colors group">
                                <span class="material-symbols-outlined text-[#100d1b] dark:text-white">terminal</span>
                                <span class="text-sm font-bold text-[#100d1b] dark:text-white">GitHub</span>
                            </button>
                        </div>
                    </form>

                    <!-- Footer Link -->
                    <p class="mt-8 text-center text-sm text-[#594c9a] dark:text-gray-400 font-medium">
                        Don't have an account yet?
                        <a href="{{ route('register') }}" class="text-primary font-bold hover:underline ml-1">Create an account</a>
                    </p>

                </div>
            </div>
        </div>
    </main>
</body>
</html>
