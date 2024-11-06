@php
    $configsController = new App\Http\Controllers\ConfigsController;
    $configs = $configsController->retrieves()->original;

    error_log($configs);

    $profile_name = "";
    $profile_title = "";
    $profile_description = "";
    $social_github = "";
    $social_linkedin = "";
    $social_instagram = "";
    $social_email = "";

    foreach ($configs as $c) {
        if ($c['key'] == 'profile_name') {
            $profile_name = $c['value'];
            continue;
        }
        if ($c['key'] == 'profile_title') {
            $profile_title = $c['value'];
            continue;
        }
        if ($c['key'] == 'profile_description') {
            $profile_description = $c['value'];
            continue;
        }
        if ($c['key'] == 'social_github') {
            $social_github = $c['value'];
            continue;
        }
        if ($c['key'] == 'social_linkedin') {
            $social_linkedin = $c['value'];
            continue;
        }
        if ($c['key'] == 'social_instagram') {
            $social_instagram = $c['value'];
            continue;
        }
        if ($c['key'] == 'social_email') {
            $social_email = $c['value'];
            continue;
        }
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen w-screen">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="{{ $profile_description }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        {{-- Phosphor icons --}}
        <script src="https://unpkg.com/phosphor-icons"></script>

        <title>{{ $profile_name }}</title>
    </head>

    <body class="bg-gray-50  flex flex-col gap-4 p-2 overflow-x-hidden">
        {{-- <header class="flex md:max-w-[900px] mx-auto flex-row justify-end w-full">
            <nav>
                <button class="rounded-xl" id="language-toggle">
                    <span>🇺🇸</span>
                </button>
            </nav>
        </header> --}}
        {{-- <span>🇧🇷</span> --}}

        {{-- <section class="w-full px-2 md:max-w-[900px] mx-auto flex flex-row justify-between items-center gap-2">
            <picture class="w-[40%]">
                <img
                    class="rounded-full"
                    src="profile.jpg"
                    width="100%"
                    alt="Profile picture"
                >
            </picture>

            <article class="flex-1 flex flex-col">
                <h1 class="text-2xl font-bold">{{ $profile_name }}</h1>
                <h2 class="text-base">{{ $profile_title }}</h2>

                <ul class="flex flex-row gap-4 mt-4">
                    <li>
                        <a target="_blank" href="{{ $social_github }}"><i class="ph ph-github-logo text-2xl"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $social_linkedin }}"><i class="ph ph-linkedin-logo text-2xl"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $social_instagram }}"><i class="ph ph-instagram-logo text-2xl"></i></a>
                    </li>

                    <li>
                        <a target="_blank" href="{{ $social_email }}"><i class="ph ph-envelope-simple text-2xl"></i></a>
                    </li>
                </ul>
            </article>
        </section> --}}

        {{-- <main class="flex px-2 flex-col md:max-w-[900px] mx-auto flex-1 gap-4 w-full">
            <section class="w-full flex flex-col justify-center items-center">
                <h1 class="text-xl font-bold text-start w-full">About Me</h1>
                <p class="text-sm text-justify w-full text-wrap">{{ $profile_description }}</p>
            </section>

            <section class="w-full flex flex-col h-auto justify-center bg-gray-50 items-center">
                <h1 class="text-xl font-bold text-start w-full">Projects</h1>
                <p class="text-sm text-start w-full">A collection of projects I've worked on.</p>

                <div class="w-full mt-2 md:h-[12rem] h-[24rem] relative" data-carousel>
                    <button
                        data-carousel-button="prev"
                        class="z-10 top-1/2 border-none absolute rounded p-2 hover:bg-opacity-50 duration-200 focus:bg-gray-100 bg-gray-100 bg-opacity-15 -translate-y-1/2 transition-all ease-in focus:outline-1 left-2"
                    ><i class="ph-caret-left"></i></button>

                    <button
                        data-carousel-button="next"
                        class="z-10 top-1/2 border-none absolute rounded p-2 hover:bg-opacity-50 duration-200 focus:bg-gray-100 bg-gray-100 bg-opacity-15 -translate-y-1/2 transition-all ease-in focus:outline-1 right-2"
                    ><i class="ph-caret-right"></i></button>

                    <ul data-slides class="h-full">
                        <li class="md:px-16 opacity-0 h-full inset-0 absolute data-[active]:opacity-100" data-active>
                            <a href="#" class="flex w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-44 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="profile.jpg" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gabriel 1</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="w-full flex flex-col h-auto justify-center bg-gray-50 items-center">
                <h1 class="text-2xl font-bold text-start w-full">Technologies</h1>
                <p class="text-sm text-start w-full">A collection of technologies I've used.</p>

                <div class="w-full md:h-[12rem] h-[24rem] relative" data-carousel>
                    <button
                        data-carousel-button="prev"
                        class="z-10 top-1/2 border-none absolute rounded p-2 hover:bg-opacity-50 duration-200 focus:bg-gray-100 bg-gray-100 bg-opacity-15 -translate-y-1/2 transition-all ease-in focus:outline-1 left-2"
                    ><i class="ph-caret-left"></i></button>

                    <button
                        data-carousel-button="next"
                        class="z-10 top-1/2 border-none absolute rounded p-2 hover:bg-opacity-50 duration-200 focus:bg-gray-100 bg-gray-100 bg-opacity-15 -translate-y-1/2 transition-all ease-in focus:outline-1 right-2"
                    ><i class="ph-caret-right"></i></button>

                    <ul data-slides class="h-full">
                        <li class="md:px-16 opacity-0 h-full inset-0 absolute data-[active]:opacity-100" data-active>
                            <a href="#" class="flex w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-44 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="profile.jpg" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gabriel 1</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main> --}}

        {{-- <footer class="w-full bg-gray-800 h-[2rem] flex justify-center items-center text-white">
            <h3>Developed by Gabriel Waltmann</h3>
        </footer> --}}
    </body>

    <script>
        const buttons = document.querySelectorAll('[data-carousel-button]');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const offset = button.dataset.carouselButton === 'next' ? 1 : -1;

                const slides = button
                    .closest('[data-carousel]')
                    .querySelector('[data-slides]');

                const activeSlide = slides.querySelector("[data-active]");

                let newIndex = [...slides.children].indexOf(activeSlide) + offset;

                if (newIndex < 0) newIndex = slides.children.length - 1;
                if (newIndex >= slides.children.length) newIndex = 0;

                slides.children[newIndex].dataset.active = true;
                delete activeSlide.dataset.active;
            })
        })
    </script>
</html>
