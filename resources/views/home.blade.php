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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="{{ $profile_description }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        {{-- Phosphor icons --}}
        <script src="https://unpkg.com/phosphor-icons"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>{{ $profile_name }}</title>
    </head>

    <body class="bg-gray-50 h-screen w-screen overflow-x-hidden">
        {{-- Header --}}
        <header class="flex flex-row justify-end p-2 w-full">
            {{-- Toggle language --}}
            <nav>
                <button class="rounded-xl" id="language-toggle" onclick="toggleLanguage()">
                    {{-- <span>🇧🇷</span> --}}
                    <span>🇺🇸</span>
                </button>
            </nav>
        </header>

        <main class="flex px-2 flex-col gap-4 w-full">
            <section class="w-full flex flex-row justify-between items-center gap-2">
                {{-- Profile Image --}}
                <picture>
                    <img
                        class="rounded-full"
                        src="profile.jpg"
                        height="100%"
                        width="100rem"
                        alt="Profile picture"
                    >
                </picture>

                {{-- Profile Details --}}
                <article class="flex-1 flex flex-col">
                    <h1 class="text-2xl font-bold">{{ $profile_name }}</h1>
                    <h2 class="text-lg">{{ $profile_title }}</h2>

                    {{-- Social Media Links --}}
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
            </section>

            <section class="w-full flex flex-col justify-center items-center gap-2">
                <h1 class="text-2xl font-bold text-start w-full">About Me</h1>
                <p class="text-base text-justify text-wrap">{{ $profile_description }}</p>
            </section>

            <section class="w-full flex flex-col justify-center bg-gray-50 items-center gap-2 overflow-x-hidden">
                <h1 class="text-2xl font-bold text-start w-full">Projects</h1>
                <p class="text-base text-start w-full">A collection of projects I've worked on.</p>
            </section>
        </main>
    </body>
</html>
