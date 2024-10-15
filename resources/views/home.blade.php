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
        <meta name="description" content="{{ $profile_description }}>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        {{-- resources --}}
        <script src="https://unpkg.com/phosphor-icons"></script>

        <title>{{ $profile_name }}</title>
    </head>

    <body>
        <header class="w-full">
            <ul class="flex flex-row gap-4 justify-end p-4">
                <li><a class="hover:underline cursor-pointer">Home</a></li>
                <li><a class="hover:underline cursor-pointer">About</a></li>
                <li><a class="hover:underline cursor-pointer">Services</a></li>
                <li><a class="hover:underline cursor-pointer">Experience</a></li>
                <li><a class="hover:underline cursor-pointer">Works</a></li>
                <li><a class="hover:underline cursor-pointer">Blog</a></li>
                <li><a class="hover:underline cursor-pointer">Contact</a></li>
            </ul>
        </header>

        <main>
            <section class="w-full flex flex-col justify-center h-[50vh] items-center gap-4">
                {{-- Profile Image --}}
                <picture class="w-[160px]">
                    <img
                        class="rounded-full"
                        src="profile.jpg"
                        height="100%"
                        width="100%"
                        alt="Profile picture"
                    >
                </picture>

                {{-- Profile Details --}}
                <article class="text-center">
                    <h1 class="text-3xl font-bold">{{ $profile_name }}</h1>
                    <h2 class="text-xl">{{ $profile_title }}</h2>
                </article>

                {{-- Social Media Links --}}
                <ul class="flex flex-row gap-4">
                    <li>
                        <a target="_blank" href="{{ $social_github }}"><i class="ph ph-github-logo text-3xl"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $social_linkedin }}"><i class="ph ph-linkedin-logo text-3xl"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $social_instagram }}"><i class="ph ph-instagram-logo text-3xl"></i></a>
                    </li>

                    <li>
                        <a target="_blank" href="{{ $social_email }}"><i class="ph ph-envelope-simple text-3xl"></i></a>
                    </li>
                </ul>
            </section>
        </main>
    </body>
</html>
