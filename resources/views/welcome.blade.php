<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="w-full h-screen ">
    <div class="flex items-center justify-center w-full h-screen gap-6 text-white bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('img/hm.jpg') }}')">
        <a href="{{ route('showlogin') }}" class="px-3 py-2 text-5xl font-bold bg-blue-500 rounded hover:bg-opacity-50">Login</a>
        <a href="{{ route('showregister') }}" class="px-3 py-2 text-5xl font-bold bg-red-500 rounded hover:bg-opacity-50">Register</a>
    </div>
</body>

</html>
