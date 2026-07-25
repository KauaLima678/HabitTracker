<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="font-bold text-3xl text-green-900">Welcome to the HomePage</h1>
    <h2 class="text-red-900 text-4xl font-bold">Olá {{ $name }}</h2>
    <p>Seus hábitos são</p>
    <ul>
        @foreach ( $habits as $habit )
            <li> {{ $habit }}</li>
        @endforeach
    </ul>
</body>
</html>