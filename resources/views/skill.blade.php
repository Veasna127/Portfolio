@extends('header')
@section( 'content')
        <main class="mx-auto w-full max-w-[1200px] px-6 py-12">
            <!-- Page Heading -->
            <div class="mb-12">
                <span
                    class="inline-block px-3 py-1 text-xs font-bold uppercase tracking-wider text-primary bg-primary/10 rounded-full mb-4">My
                    Expertise</span>
                <h1 class="text-5xl font-black leading-tight tracking-tight mb-4">Mastering the Craft</h1>
                <p class="max-w-2xl text-lg text-[#594c9a] dark:text-white/60">
                    A comprehensive overview of my technical knowledge and professional attributes developed through
                    academic projects and personal exploration.
                </p>
            </div>
            <!-- Technical Skills Section -->
            <section class="mb-20">
                <div class="flex items-center gap-3 mb-8">
                    <span class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg">code</span>
                    <h2 class="text-2xl font-bold">Technical Stack</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Tech Skill 1 -->
                    <div
                        class="flex flex-col gap-4 p-5 rounded-xl bg-white dark:bg-white/5 border border-[#e9e7f3] dark:border-white/10 hover:shadow-xl transition-all group">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-12 w-12 rounded-lg bg-[#f06529]/10 flex items-center justify-center text-[#f06529]">
                                <span class="material-symbols-outlined text-3xl">html</span>
                            </div>
                            <span
                                class="px-2 py-1 text-[10px] font-bold uppercase bg-green-100 text-green-700 rounded-md">Advanced</span>
                        </div>
                        <div>
                            <p class="text-lg font-bold">HTML / CSS</p>
                            <p class="text-sm text-[#594c9a] dark:text-white/50 mt-1">structures &amp; modern layouts
                            </p>
                        </div>
                        <div class="space-y-2 mt-2">
                            <div class="flex justify-between text-xs font-bold opacity-60">
                                <span>Proficiency</span>
                                <span>95%</span>
                            </div>
                            <div class="h-2 w-full bg-[#e9e7f3] dark:bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full group-hover:bg-[#f06529] transition-colors"
                                    style="width: 95%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Skill 2 -->
                    <div
                        class="flex flex-col gap-4 p-5 rounded-xl bg-white dark:bg-white/5 border border-[#e9e7f3] dark:border-white/10 hover:shadow-xl transition-all group">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-12 w-12 rounded-lg bg-[#f7df1e]/10 flex items-center justify-center text-[#f7df1e]">
                                <span class="material-symbols-outlined text-3xl">javascript</span>
                            </div>
                            <span
                                class="px-2 py-1 text-[10px] font-bold uppercase bg-blue-100 text-blue-700 rounded-md">Intermediate</span>
                        </div>
                        <div>
                            <p class="text-lg font-bold">JavaScript</p>
                            <p class="text-sm text-[#594c9a] dark:text-white/50 mt-1">ES6+, DOM manipulation &amp; APIs
                            </p>
                        </div>
                        <div class="space-y-2 mt-2">
                            <div class="flex justify-between text-xs font-bold opacity-60">
                                <span>Proficiency</span>
                                <span>80%</span>
                            </div>
                            <div class="h-2 w-full bg-[#e9e7f3] dark:bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full group-hover:bg-[#f7df1e] transition-colors"
                                    style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Skill 3 -->
                    <div
                        class="flex flex-col gap-4 p-5 rounded-xl bg-white dark:bg-white/5 border border-[#e9e7f3] dark:border-white/10 hover:shadow-xl transition-all group">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-12 w-12 rounded-lg bg-[#61dafb]/10 flex items-center justify-center text-[#61dafb]">
                                <span class="material-symbols-outlined text-3xl">deployed_code</span>
                            </div>
                            <span
                                class="px-2 py-1 text-[10px] font-bold uppercase bg-green-100 text-green-700 rounded-md">Advanced</span>
                        </div>
                        <div>
                            <p class="text-lg font-bold">Vue.js</p>
                            <p class="text-sm text-[#594c9a] dark:text-white/50 mt-1">Hooks, Context API &amp;</p>
                        </div>
                        <div class="space-y-2 mt-2">
                            <div class="flex justify-between text-xs font-bold opacity-60">
                                <span>Proficiency</span>
                                <span>70%</span>
                            </div>
                            <div class="h-2 w-full bg-[#e9e7f3] dark:bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full group-hover:bg-[#61dafb] transition-colors"
                                    style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tech Skill 4 -->
                    <div
                        class="flex flex-col gap-4 p-5 rounded-xl bg-white dark:bg-white/5 border border-[#e9e7f3] dark:border-white/10 hover:shadow-xl transition-all group">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-12 w-12 rounded-lg bg-[#3776ab]/10 flex items-center justify-center text-[#3776ab]">
                                <span class="material-symbols-outlined text-3xl">terminal</span>
                            </div>
                            <span
                                class="px-2 py-1 text-[10px] font-bold uppercase bg-yellow-100 text-yellow-700 rounded-md">Learner</span>
                        </div>
                        <div>
                            <p class="text-lg font-bold">Laravel</p>
                            <p class="text-sm text-[#594c9a] dark:text-white/50 mt-1">Data analysis &amp; scripting
                                basics</p>
                        </div>
                        <div class="space-y-2 mt-2">
                            <div class="flex justify-between text-xs font-bold opacity-60">
                                <span>Proficiency</span>
                                <span>60%</span>
                            </div>
                            <div class="h-2 w-full bg-[#e9e7f3] dark:bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full group-hover:bg-[#3776ab] transition-colors"
                                    style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Soft Skills Section -->
            <section>
                <div class="flex items-center gap-3 mb-8">
                    <span
                        class="material-symbols-outlined text-primary p-2 bg-primary/10 rounded-lg">person_celebrate</span>
                    <h2 class="text-2xl font-bold">Soft Skills</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Soft Skill 1 -->
                    <div
                        class="flex flex-col items-center text-center p-8 rounded-xl bg-[#4b2bee]/5 border border-primary/10 hover:bg-primary/10 transition-colors">
                        <div
                            class="h-16 w-16 mb-4 rounded-full bg-primary text-white flex items-center justify-center shadow-lg shadow-primary/20">
                            <span class="material-symbols-outlined text-3xl">chat_bubble</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Communication</h3>
                        <p class="text-sm text-[#594c9a] dark:text-white/50 leading-relaxed">Presenting complex ideas
                            clearly to diverse audiences.</p>
                    </div>
                    <!-- Soft Skill 2 -->
                    <div
                        class="flex flex-col items-center text-center p-8 rounded-xl bg-pink-500/5 border border-pink-500/10 hover:bg-pink-500/10 transition-colors">
                        <div
                            class="h-16 w-16 mb-4 rounded-full bg-pink-500 text-white flex items-center justify-center shadow-lg shadow-pink-500/20">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Teamwork</h3>
                        <p class="text-sm text-[#594c9a] dark:text-white/50 leading-relaxed">Collaborating effectively
                            in multi-disciplinary groups.</p>
                    </div>
                    <!-- Soft Skill 3 -->
                    <div
                        class="flex flex-col items-center text-center p-8 rounded-xl bg-amber-500/5 border border-amber-500/10 hover:bg-amber-500/10 transition-colors">
                        <div
                            class="h-16 w-16 mb-4 rounded-full bg-amber-500 text-white flex items-center justify-center shadow-lg shadow-amber-500/20">
                            <span class="material-symbols-outlined text-3xl">psychology</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Problem Solving</h3>
                        <p class="text-sm text-[#594c9a] dark:text-white/50 leading-relaxed">Analyzing challenges and
                            finding creative solutions.</p>
                    </div>
                    <!-- Soft Skill 4 -->
                    <div
                        class="flex flex-col items-center text-center p-8 rounded-xl bg-emerald-500/5 border border-emerald-500/10 hover:bg-emerald-500/10 transition-colors">
                        <div
                            class="h-16 w-16 mb-4 rounded-full bg-emerald-500 text-white flex items-center justify-center shadow-lg shadow-emerald-500/20">
                            <span class="material-symbols-outlined text-3xl">trending_up</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Adaptability</h3>
                        <p class="text-sm text-[#594c9a] dark:text-white/50 leading-relaxed">Thriving in fast-paced and
                            changing environments.</p>
                    </div>
                </div>
            </section>
            <!-- Call to Action -->
            <div
                class="mt-24 p-10 rounded-2xl bg-primary text-white flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
                <div class="absolute -right-20 -bottom-20 h-64 w-64 bg-white/10 rounded-full blur-3xl"></div>
                <div class="relative z-10 flex flex-col gap-2">
                    <h3 class="text-3xl font-black">Want to see these skills in action?</h3>
                    <p class="text-white/80">Check out my recent development projects and case studies.</p>
                </div>
                <a class="relative z-10 flex items-center gap-2 px-8 py-4 bg-white text-primary font-bold rounded-xl hover:scale-105 transition-transform"
                    href="#">
                    View My Portfolio
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </main>
        <!-- Footer -->
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
