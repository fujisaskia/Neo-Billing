<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tambahkan link Google Fonts di sini -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @vite('resources/css/app.css')
        <title>First Page</title>
    </head>
    
    <body class="font-poppins">
    {{-- navbar --}}
        @include('components.navbar')

    {{-- content section --}}
        @include('components.home')  <!-- section home -->
        @include('components.about') <!-- section about -->
        @include('components.service') <!-- section service -->
        @include('components.price') <!-- section price -->
        {{-- @include('components.faq') <!-- section faq --> --}}
        @include('components.contact') <!-- section contact -->

    {{-- footer     --}}
        @include('components.footer')

            <!-- Include AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>


    </body>
</html>