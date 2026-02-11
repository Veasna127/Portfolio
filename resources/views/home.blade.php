@extends('header')
@section('content')
    <main class="flex-1 hero-gradient">
        <div class="mx-auto flex max-w-[1280px] flex-col px-6 py-12 lg:px-10 lg:py-24">
            <!-- Hero Section Split Layout -->
            <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
                <!-- Left Column: Content -->
                <div class="flex flex-col space-y-8 order-2 lg:order-1">
                    <div class="space-y-4">
                        <h1 class="text-5xl font-black leading-[1.1] tracking-tight md:text-7xl"
                            style="
                                    opacity: 0;
                                    animation: welcomeFade 1s ease-out forwards;
                                ">
                            <span class="text-primary">Welcome</span>
                        </h1>

                        <style>
                            @keyframes welcomeFade {
                                from {
                                    opacity: 0;
                                    transform: translateY(30px);
                                }

                                to {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }
                        </style>


                        <h1 class="text-5xl font-black leading-[1.1] tracking-tight md:text-7xl">
                            Chhay <span class="text-primary">Veasna</span>
                        </h1>
                        <p class="max-w-[540px] text-lg leading-relaxed text-[#594c9a] dark:text-[#b0a9d9] md:text-xl">
                            A passionate <span class="font-bold text-[#100d1b] dark:text-white">Computer Science
                                student</span> and UI/UX enthusiast building digital experiences that matter through
                            clean code and modern design.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('project') }}">
                        <button
                            class="flex h-14 min-w-[180px] items-center justify-center gap-2 rounded-xl bg-primary px-8 text-base font-bold text-white shadow-xl shadow-primary/25 transition-all hover:-translate-y-1 hover:shadow-primary/40">
                            <span>View Projects</span>
                            <span class="material-symbols-outlined text-xl">arrow_forward</span>
                        </button>
                        </a>
                        <button
                            class="flex h-14 min-w-[180px] items-center justify-center gap-2 rounded-xl border-2 border-[#d3cfe7] dark:border-[#2a2640] px-8 text-base font-bold transition-all hover:bg-white dark:hover:bg-[#1e1a33]">
                            <span class="material-symbols-outlined text-xl">download</span>
                            <span>Download Resume</span>
                        </button>
                    </div>
                    <!-- Social Icons Row -->
                    <div class="pt-8">
                        <p class="mb-4 text-xs font-bold uppercase tracking-widest text-[#594c9a]/60">Connect with
                            me</p>
                        <div class="flex gap-4">
                            <a class="group flex h-12 w-12 items-center justify-center rounded-full bg-white dark:bg-[#1e1a33] shadow-md transition-all hover:bg-primary hover:text-white"
                                href="#">
                                <span class="material-symbols-outlined">share</span>
                            </a>
                            <a class="group flex h-12 w-12 items-center justify-center rounded-full bg-white dark:bg-[#1e1a33] shadow-md transition-all hover:bg-primary hover:text-white"
                                href="#">
                                <span class="material-symbols-outlined">code</span>
                            </a>
                            <a class="group flex h-12 w-12 items-center justify-center rounded-full bg-white dark:bg-[#1e1a33] shadow-md transition-all hover:bg-primary hover:text-white"
                                href="#">
                                <span class="material-symbols-outlined">alternate_email</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Profile Photo -->
                <div class="relative flex justify-center order-1 lg:order-2">
                    <div class="relative h-[320px] w-[320px] md:h-[450px] md:w-[450px]">
                        <!-- Decorative Colorful Borders -->
                        <div class="absolute -inset-4 animate-pulse rounded-full border-2 border-dashed border-primary/20">
                        </div>
                        <div class="absolute -inset-8 rounded-full border border-primary/10"></div>
                        <!-- Profile Container -->
                        <div
                            class="relative h-full w-full overflow-hidden rounded-full border-[8px] border-white dark:border-[#1e1a33] shadow-2xl transition-transform hover:scale-[1.02]">
                            <div class="h-full w-full bg-cover bg-center"
                                data-alt="Professional headshot of a smiling male student"
                                style="background-image: url('{{ asset('images/photo_2025-03-06_00-08-08.jpg') }}');">
                            </div>
                        </div>
                        <!-- Experience Badge -->
                        <div
                            class="absolute -bottom-4 -right-4 flex h-24 w-24 flex-col items-center justify-center rounded-full bg-white dark:bg-[#1e1a33] p-4 text-center shadow-xl md:h-32 md:w-32">
                            <span class="text-2xl font-black text-primary md:text-3xl">3.0</span>
                            <span class="text-[10px] font-bold uppercase tracking-tight text-[#594c9a] md:text-xs">GPA
                                Score</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features Section / Expertise Highlights -->
            <div class="mt-24 grid grid-cols-1 gap-6 md:grid-cols-3">
                <div
                    class="group flex flex-col gap-4 rounded-2xl border border-[#d3cfe7] dark:border-[#2a2640] bg-white/50 dark:bg-[#1e1a33]/50 p-8 transition-all hover:border-primary hover:shadow-xl hover:shadow-primary/5">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">code</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold">Web Development</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[#594c9a] dark:text-[#b0a9d9]">Creating
                            responsive, accessible, and high-performance web applications using React &amp; Next.js.
                        </p>
                    </div>
                </div>
                <div
                    class="group flex flex-col gap-4 rounded-2xl border border-[#d3cfe7] dark:border-[#2a2640] bg-white/50 dark:bg-[#1e1a33]/50 p-8 transition-all hover:border-primary hover:shadow-xl hover:shadow-primary/5">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold">UI/UX Design</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[#594c9a] dark:text-[#b0a9d9]">Designing
                            intuitive user interfaces and seamless user journeys with Figma and Adobe XD.</p>
                    </div>
                </div>
                <div
                    class="group flex flex-col gap-4 rounded-2xl border border-[#d3cfe7] dark:border-[#2a2640] bg-white/50 dark:bg-[#1e1a33]/50 p-8 transition-all hover:border-primary hover:shadow-xl hover:shadow-primary/5">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">terminal</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold">Software Architecture</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[#594c9a] dark:text-[#b0a9d9]">Applying
                            computer science principles to solve complex problems with clean and scalable code.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
    <footer
        class="w-full border-t border-slate-200 dark:border-slate-800 py-10 px-6 mt-12 bg-white dark:bg-background-dark">
        <div class="max-w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="size-6 text-primary">
                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                            fill="currentColor" fill-rule="evenodd"></path>
                        <path clip-rule="evenodd"
                            d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                            fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <span class="font-bold text-[#100d1b] dark:text-white">Portfolio</span>
            </div>
            <p class="text-sm text-[#594c9a] dark:text-slate-500">© 2024 Modern Portfolio. Built with focus on
                accessibility.</p>
            <div class="flex gap-4">
                <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span
                        class="material-symbols-outlined">alternate_email</span></a>
                <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span
                        class="material-symbols-outlined">terminal</span></a>
                <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span
                        class="material-symbols-outlined">share</span></a>
            </div>
        </div>
    </footer>
    </div>
@endsection
