@extends('header')
@section( 'content')
        <main class="flex-1 flex flex-col items-center py-12 px-6">
            <div class="w-full max-w-[960px] flex flex-col">
                <!-- Page Heading -->
                <div class="flex flex-wrap justify-between items-end gap-4 pb-12">
                    <div class="flex min-w-72 flex-col gap-3">
                        <p class="text-[#100d1b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                            Education &amp; Academic Journey</p>
                        <p class="text-[#594c9a] dark:text-slate-400 text-lg font-normal">A chronological overview of my
                            studies, academic achievements, and core certifications.</p>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full uppercase tracking-wider">GPA:
                            3.92/4.00</span>
                    </div>
                </div>
                <!-- Timeline Section -->
                <div class="relative py-4">
                    <!-- Vertical Line -->
                    <div class="absolute left-[20px] top-0 bottom-0 w-[2px] bg-slate-200 dark:bg-slate-800"></div>
                    <!-- Entry 1 (Current) -->
                    <div class="relative grid grid-cols-[40px_1fr] gap-x-6 mb-12 group">
                        <div class="flex flex-col items-center">
                            <div
                                class="z-10 flex size-10 items-center justify-center rounded-full bg-primary text-white shadow-lg shadow-primary/30 ring-4 ring-background-light dark:ring-background-dark">
                                <span class="material-symbols-outlined text-[20px]">school</span>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white dark:bg-slate-900/50 p-6 rounded-xl border border-primary/20 shadow-sm transition-all hover:shadow-md hover:border-primary/40">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-[#100d1b] dark:text-white">University of Cambodia
                                </h3>
                                <span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">2023 -
                                    2027</span>
                            </div>
                            <p class="text-[#4b2bee] font-semibold text-lg mb-4">B.A in Computer Science</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 dark:bg-emerald-950/30 px-3 py-1 text-xs font-bold text-emerald-600 dark:text-emerald-400 border border-emerald-100 dark:border-emerald-900">
                                    <span class="material-symbols-outlined text-[14px]">verified</span> Dean's List
                                </span>
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-amber-50 dark:bg-amber-950/30 px-3 py-1 text-xs font-bold text-amber-600 dark:text-amber-400 border border-amber-100 dark:border-amber-900">
                                    <span class="material-symbols-outlined text-[14px]">stars</span> Cum Laude
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Entry 2 -->
                    <div class="relative grid grid-cols-[40px_1fr] gap-x-6 mb-12 group">
                        <div class="flex flex-col items-center">
                            <div
                                class="z-10 flex size-10 items-center justify-center rounded-full bg-indigo-400 text-white shadow-lg ring-4 ring-background-light dark:ring-background-dark">
                                <span class="material-symbols-outlined text-[20px]">workspace_premium</span>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white dark:bg-slate-900/50 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm transition-all hover:shadow-md">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-[#100d1b] dark:text-white">Google Career Certificates
                                </h3>
                                <<span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">2024
                                    </span>
                            </div>
                            <p class="text-[#594c9a] dark:text-slate-400 font-semibold text-lg mb-4">Web Developer (Junior Level)</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-primary/10 px-3 py-1 text-xs font-bold text-primary border border-primary/20">
                                    <span class="material-symbols-outlined text-[14px]">code</span> HTML CSS JavaScript PHP Laravel &amp; MySQL
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Entry 3 -->
                    <div class="relative grid grid-cols-[40px_1fr] gap-x-6 mb-12 group">
                        <div class="flex flex-col items-center">
                            <div
                                class="z-10 flex size-10 items-center justify-center rounded-full bg-slate-400 text-white shadow-lg ring-4 ring-background-light dark:ring-background-dark">
                                <span class="material-symbols-outlined text-[20px]">history_edu</span>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white dark:bg-slate-900/50 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm transition-all hover:shadow-md">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-[#100d1b] dark:text-white">Angkor High School
                                </h3>
                                <span class="text-xs font-bold text-primary px-2 py-1 bg-primary/10 rounded">2021 -
                                    2022</span>
                            </div>
                            <p class="text-[#594c9a] dark:text-slate-400 font-semibold text-lg mb-4">Year 12 Graduate
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-slate-50 dark:bg-slate-950/30 px-3 py-1 text-xs font-bold text-slate-600 dark:text-slate-400 border border-slate-200 dark:border-slate-800">
                                    National Merit Scholar
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Header -->
                <div class="mt-12 mb-6">
                    <h2 class="text-[#100d1b] dark:text-white text-2xl font-extrabold flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">emoji_events</span> Key Achievements
                    </h2>
                    <div class="w-16 h-1.5 bg-primary rounded-full mt-2"></div>
                </div>
                <!-- TextGrid / Achievements Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/30 p-6 transition-all hover:scale-[1.02] hover:border-primary/30">
                        <div
                            class="size-12 rounded-lg bg-indigo-50 dark:bg-indigo-950/50 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[28px]">trophy</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-[#100d1b] dark:text-white text-lg font-bold leading-tight">First Place
                                Hackathon</h2>
                            <p class="text-[#594c9a] dark:text-slate-400 text-sm font-normal leading-relaxed">Won the
                                2023 NW Tech Hackathon for an AI-powered accessibility tool.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/30 p-6 transition-all hover:scale-[1.02] hover:border-primary/30">
                        <div
                            class="size-12 rounded-lg bg-indigo-50 dark:bg-indigo-950/50 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[28px]">groups</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-[#100d1b] dark:text-white text-lg font-bold leading-tight">Student Lead
                            </h2>
                            <p class="text-[#594c9a] dark:text-slate-400 text-sm font-normal leading-relaxed">President
                                of the UW Coding Society, managing 200+ active student members.</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/30 p-6 transition-all hover:scale-[1.02] hover:border-primary/30">
                        <div
                            class="size-12 rounded-lg bg-indigo-50 dark:bg-indigo-950/50 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[28px]">psychology</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="text-[#100d1b] dark:text-white text-lg font-bold leading-tight">Research Intern
                            </h2>
                            <p class="text-[#594c9a] dark:text-slate-400 text-sm font-normal leading-relaxed">
                                Contributed to 2 published papers on Human-Computer Interaction in 2023.</p>
                        </div>
                    </div>
                </div>
                <!-- CTA / Footerish bit -->
                <div
                    class="mt-20 p-8 rounded-2xl bg-gradient-to-r from-primary to-indigo-600 flex flex-col items-center text-center text-white">
                    <h3 class="text-2xl font-bold mb-2">Want to see my full CV?</h3>
                    <p class="mb-6 opacity-90 max-w-md">Download a detailed version of my academic history and project
                        experience.</p>
                    <button
                        class="flex items-center gap-2 px-6 py-3 bg-white text-primary rounded-full font-bold hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined">download</span>
                        Download Resume
                    </button>
                </div>
            </div>
        </main>
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
@endsection