<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meed</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div class="grid w-full h-screen grid-cols-3">
        <div class="px-5 md:px-20 lg:col-span-1 col-span-full sm:px-36">
            @yield('body')
        </div>
        <div class="hidden h-full bg-center bg-no-repeat bg-cover lg:block lg:col-span-2"
            style="background-image: url('{{ asset('img/auth.jpg') }}')">

        </div>
    </div>
</body>

</html>
