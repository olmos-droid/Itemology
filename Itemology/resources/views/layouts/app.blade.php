<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="data:image/png;base64,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" />
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>