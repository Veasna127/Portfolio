@extends('header')
@section( 'content')
        <main class="flex-1 max-w-[1200px] mx-auto w-full px-6 py-12">
            <!-- Page Heading Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div class="max-w-2xl">
                    <h1 class="text-4xl md:text-5xl font-black tracking-tight mb-4">Selected Projects</h1>
                    <p class="text-lg text-[#594c9a] dark:text-[#a397db] leading-relaxed">
                        A curated collection of my technical journey, featuring full-stack applications, AI tools, and
                        UI/UX experiments.
                    </p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-primary/10 text-primary dark:bg-primary/20 dark:text-white border border-primary/20 px-5 py-2.5 rounded-lg text-sm font-bold flex items-center gap-2 hover:bg-primary/20 transition-colors">
                        <span class="material-symbols-outlined text-lg">download</span>
                        Resume
                    </button>
                </div>
            </div>
            <!-- Category Chips -->
            <div class="flex flex-wrap gap-2 mb-10">
                <button
                    class="px-5 py-2 rounded-full bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20">All
                    Works</button>
                <button
                    class="px-5 py-2 rounded-full bg-white dark:bg-[#1f1b3d] border border-[#e9e7f3] dark:border-[#2a2640] text-sm font-medium hover:border-primary/50 transition-colors">React</button>
                <button
                    class="px-5 py-2 rounded-full bg-white dark:bg-[#1f1b3d] border border-[#e9e7f3] dark:border-[#2a2640] text-sm font-medium hover:border-primary/50 transition-colors">Node.js</button>
                <button
                    class="px-5 py-2 rounded-full bg-white dark:bg-[#1f1b3d] border border-[#e9e7f3] dark:border-[#2a2640] text-sm font-medium hover:border-primary/50 transition-colors">TypeScript</button>
                <button
                    class="px-5 py-2 rounded-full bg-white dark:bg-[#1f1b3d] border border-[#e9e7f3] dark:border-[#2a2640] text-sm font-medium hover:border-primary/50 transition-colors">OpenAI</button>
            </div>
            <!-- Featured Large Card -->
            <div class="mb-12 group">
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 bg-white dark:bg-[#1b1736] rounded-xl overflow-hidden shadow-xl shadow-black/5 border border-[#e9e7f3] dark:border-[#2a2640]">
                    <div class="h-64 lg:h-auto bg-center bg-cover transition-transform duration-500 group-hover:scale-105"
                        data-alt="Abstract vibrant gradient featuring purple and coral tones"
                        style="background-image: linear-gradient(135deg, #4b2bee 0%, #ff5e62 100%);">
                    </div>
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <span
                            class="text-primary font-bold text-xs uppercase tracking-widest mb-2 flex items-center gap-2">
                            <span class="w-8 h-px bg-primary"></span>
                            Featured Innovation
                        </span>
                        <h3 class="text-3xl font-extrabold mb-4 group-hover:text-primary transition-colors">Nexus AI
                            Dashboard</h3>
                        <p class="text-[#594c9a] dark:text-[#a397db] text-lg mb-6 leading-relaxed">
                            A next-generation enterprise productivity suite leveraging Large Language Models for
                            automated workflow optimization and real-time sentiment analysis.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="bg-[#f0edff] dark:bg-[#2e2762] text-primary dark:text-[#c4b5fd] text-xs font-bold px-3 py-1 rounded">Next.js</span>
                            <span
                                class="bg-[#f0edff] dark:bg-[#2e2762] text-primary dark:text-[#c4b5fd] text-xs font-bold px-3 py-1 rounded">OpenAI
                                SDK</span>
                            <span
                                class="bg-[#f0edff] dark:bg-[#2e2762] text-primary dark:text-[#c4b5fd] text-xs font-bold px-3 py-1 rounded">Tailwind
                                CSS</span>
                            <span
                                class="bg-[#f0edff] dark:bg-[#2e2762] text-primary dark:text-[#c4b5fd] text-xs font-bold px-3 py-1 rounded">Prisma</span>
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <button
                                class="bg-primary text-white px-6 py-3 rounded-lg font-bold flex items-center gap-2 hover:shadow-lg hover:shadow-primary/30 transition-all">
                                <span class="material-symbols-outlined text-lg">rocket_launch</span>
                                Live Demo
                            </button>
                            <button
                                class="bg-transparent border-2 border-primary/20 dark:border-white/10 text-primary dark:text-white px-6 py-3 rounded-lg font-bold flex items-center gap-2 hover:border-primary transition-all">
                                <span class="material-symbols-outlined text-lg">code_blocks</span>
                                View Code
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Standard Project Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group flex flex-col bg-white dark:bg-[#1b1736] rounded-xl overflow-hidden shadow-lg shadow-black/5 border border-[#e9e7f3] dark:border-[#2a2640] hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-center bg-cover overflow-hidden"
                        data-alt="Deep blue and cyan gradient pattern design"
                        style="background-image: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">FinTech Tracker
                        </h4>
                        <p class="text-[#594c9a] dark:text-[#a397db] text-sm mb-4 line-clamp-2">
                            Personal finance management app with automated categorization and interactive data
                            visualizations.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">TypeScript</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">Chart.js</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">PostgreSQL</span>
                        </div>
                        <div class="mt-auto flex gap-3">
                            <button
                                class="flex-1 bg-primary text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/90 transition-colors">Demo</button>
                            <button
                                class="flex-1 bg-[#f0edff] dark:bg-white/5 text-primary dark:text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/10 transition-colors">GitHub</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="group flex flex-col bg-white dark:bg-[#1b1736] rounded-xl overflow-hidden shadow-lg shadow-black/5 border border-[#e9e7f3] dark:border-[#2a2640] hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-center bg-cover overflow-hidden"
                        data-alt="Vibrant pink and soft purple flowing gradient"
                        style="background-image: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Design Hub</h4>
                        <p class="text-[#594c9a] dark:text-[#a397db] text-sm mb-4 line-clamp-2">
                            A curated marketplace for designer assets including icons, templates, and UI kits built with
                            Stripe integration.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">Vue
                                3</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">Firebase</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">Stripe</span>
                        </div>
                        <div class="mt-auto flex gap-3">
                            <button
                                class="flex-1 bg-primary text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/90 transition-colors">Demo</button>
                            <button
                                class="flex-1 bg-[#f0edff] dark:bg-white/5 text-primary dark:text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/10 transition-colors">GitHub</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="group flex flex-col bg-white dark:bg-[#1b1736] rounded-xl overflow-hidden shadow-lg shadow-black/5 border border-[#e9e7f3] dark:border-[#2a2640] hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-center bg-cover overflow-hidden"
                        data-alt="Refreshing green and teal geometric pattern"
                        style="background-image: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">EcoMetric App
                        </h4>
                        <p class="text-[#594c9a] dark:text-[#a397db] text-sm mb-4 line-clamp-2">
                            Tracking individual carbon footprints with gamified challenges and social community
                            features.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">React
                                Native</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">Express</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-2 py-0.5 rounded">MongoDB</span>
                        </div>
                        <div class="mt-auto flex gap-3">
                            <button
                                class="flex-1 bg-primary text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/90 transition-colors">Demo</button>
                            <button
                                class="flex-1 bg-[#f0edff] dark:bg-white/5 text-primary dark:text-white text-xs font-bold py-2 rounded-lg hover:bg-primary/10 transition-colors">GitHub</button>
                        </div>
                    </div>
                </div>
            </div>
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
        </main>

@endsection