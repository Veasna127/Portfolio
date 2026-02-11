@extends('header')
@section( 'content')
<div class="flex flex-1 justify-center py-12 md:py-20">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1 px-6 md:px-10">
                <div class="@container">
                    <div class="flex flex-col gap-10 @[864px]:flex-row @[864px]:items-center">
                        <div class="w-full h-64 md:h-80 bg-center bg-no-repeat bg-cover rounded-xl shadow-lg border-4 border-white dark:border-white/10 @[864px]:w-1/2"
                            data-alt="A friendly profile photo of Alex Johnson"
                            style='background-image: url("{{ asset('images/photo_2025-03-06_00-08-08.jpg') }}");'>
                        </div>
                        <div class="flex flex-col gap-6 @[864px]:w-1/2">
                            <div class="flex flex-col gap-3">
                                <h1 class="text-primary text-lg font-bold uppercase tracking-widest">About Me</h1>
                                <h2
                                    class="text-[#100d1b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
                                    Hi, I'm Chhay Veasna
                                </h2>
                                <p class="text-[#594c9a] dark:text-gray-400 text-lg font-medium leading-relaxed italic">
                                    Computer Science
                                </p>
                                <p class="text-[#100d1b] dark:text-gray-200 text-base font-normal leading-relaxed mt-2">
                                    I'm a third-year student dedicated to building accessible and beautiful digital
                                    experiences. I love blending technical logic with creative design to solve complex
                                    problems and make the web a more inclusive place for everyone.
                                </p>
                            </div>
                            <div class="flex gap-4">
                                <button
                                    class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold tracking-[0.015em] hover:shadow-lg transition-shadow">
                                    Get in Touch
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Two-Column Details Section -->
        <div class="flex flex-1 justify-center py-10 bg-white/50 dark:bg-white/5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1 px-6 md:px-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 @container">
                    <!-- Column 1: Background & Objectives -->
                    <div class="flex flex-col gap-8">
                        <div>
                            <h3
                                class="text-[#100d1b] dark:text-white tracking-tight text-2xl font-bold leading-tight pb-4 border-b-2 border-primary/20">
                                My Journey
                            </h3>
                            <div class="mt-6 flex flex-col gap-6">
                                <div
                                    class="flex flex-col gap-2 bg-background-light dark:bg-white/5 p-5 rounded-xl border border-[#d3cfe7] dark:border-white/10">
                                    <div class="flex items-center gap-2 text-primary">
                                        <span class="material-symbols-outlined">school</span>
                                        <h4 class="font-bold text-base">Where I've Been</h4>
                                    </div>
                                    <p class="text-sm text-[#594c9a] dark:text-gray-300 leading-relaxed">
                                        Currently studying my third year B.A. in Computer Science at University of Cambodia.
                                    </p>
                                </div>
                                <div
                                    class="flex flex-col gap-2 bg-background-light dark:bg-white/5 p-5 rounded-xl border border-[#d3cfe7] dark:border-white/10">
                                    <div class="flex items-center gap-2 text-primary">
                                        <span class="material-symbols-outlined">rocket_launch</span>
                                        <h4 class="font-bold text-base">Where I'm Going</h4>
                                    </div>
                                    <p class="text-sm text-[#594c9a] dark:text-gray-300 leading-relaxed">
                                        My goal is to transition into a UX Engineering role where I can lead design
                                        systems and bridge the gap between Figma mockups and production-ready React
                                        components. I'm deeply interested in accessible design (a11y).
                                    </p>
                                </div>
                                <div
                                    class="flex flex-col gap-2 bg-background-light dark:bg-white/5 p-5 rounded-xl border border-[#d3cfe7] dark:border-white/10">
                                    <div class="flex items-center gap-2 text-primary">
                                        <span class="material-symbols-outlined">workspace_premium</span>
                                        <h4 class="font-bold text-base">Key Milestones</h4>
                                    </div>
                                    <ul
                                        class="text-sm text-[#594c9a] dark:text-gray-300 list-disc list-inside space-y-1">
                                        <li>Winner of Hackathon 2023</li>
                                        <li>Dean's List for 4 consecutive semesters</li>
                                        <li>Certified UI Designer (Figma Academy)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column 2: Interests & Hobbies -->
                    <div class="flex flex-col gap-8">
                        <div>
                            <h3
                                class="text-[#100d1b] dark:text-white tracking-tight text-2xl font-bold leading-tight pb-4 border-b-2 border-primary/20">
                                Interests &amp; Hobbies
                            </h3>
                            <div class="mt-6 grid grid-cols-2 gap-4">
                                <!-- Hobby 1 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-300 gap-2 border border-blue-100 dark:border-blue-800">
                                    <span class="material-symbols-outlined !text-4xl">photo_camera</span>
                                    <span class="font-bold text-sm">Photography</span>
                                </div>
                                <!-- Hobby 2 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-orange-50 dark:bg-orange-900/20 text-orange-600 dark:text-orange-300 gap-2 border border-orange-100 dark:border-orange-800">
                                    <span class="material-symbols-outlined !text-4xl">hiking</span>
                                    <span class="font-bold text-sm">Hiking</span>
                                </div>
                                <!-- Hobby 3 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-300 gap-2 border border-green-100 dark:border-green-800">
                                    <span class="material-symbols-outlined !text-4xl">terminal</span>
                                    <span class="font-bold text-sm">Open Source</span>
                                </div>
                                <!-- Hobby 4 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-300 gap-2 border border-purple-100 dark:border-purple-800">
                                    <span class="material-symbols-outlined !text-4xl">auto_stories</span>
                                    <span class="font-bold text-sm">Reading</span>
                                </div>
                                <!-- Hobby 5 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-300 gap-2 border border-red-100 dark:border-red-800">
                                    <span class="material-symbols-outlined !text-4xl">sports_esports</span>
                                    <span class="font-bold text-sm">Gaming</span>
                                </div>
                                <!-- Hobby 6 -->
                                <div
                                    class="flex flex-col items-center justify-center p-6 rounded-xl bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 dark:text-yellow-300 gap-2 border border-yellow-100 dark:border-yellow-800">
                                    <span class="material-symbols-outlined !text-4xl">travel_explore</span>
                                    <span class="font-bold text-sm">Traveling</span>
                                </div>
                            </div>
                            <div class="mt-8 p-6 bg-primary/5 dark:bg-primary/10 rounded-xl border border-primary/20">
                                <p class="text-sm text-[#100d1b] dark:text-white font-medium italic text-center">
                                    "When I'm not coding or designing, you'll likely find me on a trail with my camera
                                    or lost in a sci-fi novel."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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