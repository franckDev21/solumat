<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'SOLUMAT SARL') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="{{ asset('build/assets/app.d395deda.css') }}">
        <script defer src="{{ asset('build/assets/app.bf8e0bf1.js') }}"></script>
        
        <!-- Styles -->
        {{-- @vite(['resources/scss/app.scss', 'resources/js/app.js']) --}}
        
    </head>
    <body class="bg-gray-100 min-h-screen flex flex-col relative">
      
      <!-- Header -->
      @include('partials.header')

      <!-- main content -->
      <main>
        {{ $slot }}
      </main>

      <!-- Footer -->
      @include('partials.footer')

      <x-whatsapp />
      
      <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
      {{ $js ?? null }}
    </body>
</html>
