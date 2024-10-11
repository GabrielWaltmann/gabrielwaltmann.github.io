<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>Gabriel Waltmann</title>
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

        {{-- <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>

        <button class="btn">Hello daisyUI</button> --}}
    </body>
</html>
