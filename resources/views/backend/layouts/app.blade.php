<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/site.css', 'resources/js/site.js'])
    @livewireStyles
    {!! ToastMagic::styles() !!}
</head>
<body>
<div class="fixed top-0 bg-blue-300 h-full w-16">

</div>
<div id="main" class="ml-16 bg-blue-700 min-h-screen">
    <div class="max-w-7xl mx-auto border-1 border-black">
        @yield('content')
    </div>
</div>
@livewireScripts
</body>
</html>
