<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Signup Page</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#4b2bee",
                        "background-light": "#f6f6f8",
                        "background-dark": "#131022",
                    },
                    fontFamily: {
                        display: ["Manrope"]
                    }
                },
            },
        }
    </script>

    <style>
        body { font-family: 'Manrope', sans-serif; }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display">

<main class="flex-grow flex items-center justify-center p-6 md:py-12">
    <div class="w-full max-w-[500px] bg-white dark:bg-[#1c1930] rounded-xl shadow-xl border border-gray-100 dark:border-[#2a2640] overflow-hidden">

        <!-- Header -->
        <div class="px-8 pt-10 text-center">
            <h1 class="text-[#100d1b] dark:text-white text-3xl font-extrabold mb-2">
                Create your portfolio
            </h1>
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                Join thousands of students showcasing their work.
            </p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}" class="px-8 py-8 space-y-5">
            @csrf

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="bg-red-50 text-red-600 p-3 rounded-lg text-sm">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Full Name -->
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-semibold">Full Name</label>
                <input
                    name="name"
                    value="{{ old('name') }}"
                    type="text"
                    required
                    placeholder="Enter your full name"
                    class="w-full rounded-lg border bg-background-light dark:bg-[#23203b] dark:text-white px-4 py-3.5 text-sm focus:ring-2 focus:ring-primary outline-none"
                />
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-1.5">
                <label class="text-sm font-semibold">Email Address</label>
                <input
                    name="email"
                    value="{{ old('email') }}"
                    type="email"
                    required
                    placeholder="name@university.edu"
                    class="w-full rounded-lg border bg-background-light dark:bg-[#23203b] dark:text-white px-4 py-3.5 text-sm focus:ring-2 focus:ring-primary outline-none"
                />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Password -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm font-semibold">Password</label>
                    <input
                        name="password"
                        type="password"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-lg border bg-background-light dark:bg-[#23203b] dark:text-white px-4 py-3.5 text-sm focus:ring-2 focus:ring-primary outline-none"
                    />
                </div>

                <!-- Confirm Password -->
                <div class="flex flex-col gap-1.5">
                    <label class="text-sm font-semibold">Confirm Password</label>
                    <input
                        name="password_confirmation"
                        type="password"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-lg border bg-background-light dark:bg-[#23203b] dark:text-white px-4 py-3.5 text-sm focus:ring-2 focus:ring-primary outline-none"
                    />
                </div>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full bg-primary text-white font-bold py-4 rounded-lg shadow-lg hover:shadow-primary/30 transition active:scale-[0.98]"
            >
                Create Account
            </button>
        </form>

        <!-- Footer -->
        <div class="bg-gray-50 dark:bg-[#131022] px-8 py-6 text-center border-t">
            <p class="text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">
                    Log in
                </a>
            </p>
        </div>
    </div>
</main>

<footer class="py-8 text-center text-gray-400 text-xs">
    © 2024 StudentPortfolio Platform. All rights reserved.
</footer>

</body>
</html>
