<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Contact') }}</title>

    {{-- Fonts --}}
    <link rel="icon" type="image/png" href=" {{asset('images/icons/favicon.ico')}} " />

    {{-- Styles --}}
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/animate.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/hamburgers.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/select2.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/util.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/main.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
</head>

<body class="font-sans antialiased">
    {{-- <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    </div> --}}

    <section>
        @yield('content')
    </section>


    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=" {{asset('js/popper.min.js')}} "></script>
    <script src=" {{asset('js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('js/select2.min.js')}} "></script>
    <script src=" {{asset('js/tilt.jquery.min.js')}} "></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
    @livewireScripts
</body>

</html>
