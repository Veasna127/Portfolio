@extends('header')
@section('content')
    <main class="flex-1 px-6 lg:px-40 py-12">
        <div class="max-w-[1000px] mx-auto">
            <!-- Page Heading Section -->
            <div class="flex flex-col gap-3 mb-12">
                <h1 class="text-[#100d1b] dark:text-white text-5xl font-black leading-tight tracking-[-0.033em]">
                    Let's connect!</h1>
                <p class="text-[#594c9a] dark:text-[#a397db] text-lg font-normal leading-normal max-w-xl">
                    Feel free to reach out for collaborations or just a friendly hello. I'm always open to
                    discussing new projects or creative ideas.
                </p>
            </div>
            <!-- Split Layout Container -->
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Left Side: Contact Form -->
                <div
                    class="w-full lg:w-1/2 bg-white dark:bg-[#1a1631] p-8 rounded-xl shadow-sm border border-[#e9e7f3] dark:border-[#2d2945]">
                    <form class="flex flex-col gap-6" onsubmit="return false;">
                        <!-- Name Field -->
                        <div class="flex flex-col gap-2">
                            <label class="text-[#100d1b] dark:text-white text-sm font-semibold leading-normal">Your
                                Name</label>
                            <input
                                class="form-input flex w-full rounded-lg text-[#100d1b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#d3cfe7] dark:border-[#3d3762] bg-[#f9f8fc] dark:bg-[#131022] focus:border-primary h-14 placeholder:text-[#594c9a]/60 dark:placeholder:text-[#a397db]/40 p-[15px] text-base font-normal leading-normal"
                                placeholder="Jane Doe" type="text" />
                        </div>
                        <!-- Email Field -->
                        <div class="flex flex-col gap-2">
                            <label class="text-[#100d1b] dark:text-white text-sm font-semibold leading-normal">Email
                                Address</label>
                            <input
                                class="form-input flex w-full rounded-lg text-[#100d1b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#d3cfe7] dark:border-[#3d3762] bg-[#f9f8fc] dark:bg-[#131022] focus:border-primary h-14 placeholder:text-[#594c9a]/60 dark:placeholder:text-[#a397db]/40 p-[15px] text-base font-normal leading-normal"
                                placeholder="jane@example.com" type="email" />
                        </div>
                        <!-- Message Field -->
                        <div class="flex flex-col gap-2">
                            <label class="text-[#100d1b] dark:text-white text-sm font-semibold leading-normal">Your
                                Message</label>
                            <textarea
                                class="form-input flex w-full min-h-[160px] rounded-lg text-[#100d1b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#d3cfe7] dark:border-[#3d3762] bg-[#f9f8fc] dark:bg-[#131022] focus:border-primary placeholder:text-[#594c9a]/60 dark:placeholder:text-[#a397db]/40 p-[15px] text-base font-normal leading-normal resize-none"
                                placeholder="How can I help you?"></textarea>
                        </div>
                        <!-- Send Button -->
                        <button
                            class="flex w-full cursor-pointer items-center justify-center rounded-lg h-14 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#3a22c5] transition-all shadow-lg shadow-primary/20"
                            type="submit">
                            <span>Send Message</span>
                            <span class="material-symbols-outlined ml-2">send</span>
                        </button>
                    </form>
                </div>
                <!-- Right Side: Contact Details & Socials -->
                <div class="w-full lg:w-1/2 flex flex-col gap-10">
                    <!-- Contact Info Group -->
                    <div class="flex flex-col gap-8">
                        <div class="flex items-start gap-4">
                            <div class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <div>
                                <p class="text-[#594c9a] dark:text-[#a397db] text-sm font-medium">Email Me</p>
                                <p class="text-[#100d1b] dark:text-white text-lg font-bold">chhayveasna23@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <div>
                                <p class="text-[#594c9a] dark:text-[#a397db] text-sm font-medium">Call Me</p>
                                <p class="text-[#100d1b] dark:text-white text-lg font-bold">+855 (885) 177-641-32</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">location_on</span>
                            </div>
                            <div>
                                <p class="text-[#594c9a] dark:text-[#a397db] text-sm font-medium">Location</p>
                                <p class="text-[#100d1b] dark:text-white text-lg font-bold">Cambodia, PP</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-[#e9e7f3] dark:border-[#2d2945]" />
                    <!-- Social Media Icons -->
                    <div class="flex flex-col gap-4">
                        <h3 class="text-[#100d1b] dark:text-white text-base font-bold">Follow my journey</h3>
                        <div class="flex gap-4">
                            <!-- LinkedIn -->
                            <a class="flex size-12 items-center justify-center rounded-full bg-[#0077b5] text-white hover:scale-110 transition-transform shadow-md"
                                href="#">
                                <svg class="size-6 fill-current" viewbox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                                    </path>
                                </svg>
                            </a>
                            <!-- GitHub -->
                            <a class="flex size-12 items-center justify-center rounded-full bg-[#333] text-white hover:scale-110 transition-transform shadow-md"
                                href="#">
                                <svg class="size-6 fill-current" viewbox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z">
                                    </path>
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a class="flex size-12 items-center justify-center rounded-full bg-[#1877f2] text-white hover:scale-110 transition-transform shadow-md"
                                href="#">
                                <svg class="size-6 fill-current" viewbox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Mini Map / Image Placeholder -->
                    <div class="mt-4 rounded-xl overflow-hidden h-40 w-full relative group">
                        <div class="absolute inset-0 bg-primary/10 group-hover:bg-primary/5 transition-colors duration-300">
                        </div>
                        <iframe src="https://www.google.com/maps?q=Phnom%20Penh,%20Cambodia&output=embed" width="100%"
                            height="300" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>


                        <div
                            class="absolute bottom-3 left-3 bg-white/90 dark:bg-black/80 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-[14px]">my_location</span>
                            Based in Phnom Penh
                        </div>
                    </div>
                </div>
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
