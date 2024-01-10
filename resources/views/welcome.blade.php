<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QBank</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/filament/filament/app.css') }}">
</head>

<body class="antialiased">
    <div class="max-w-7xl mx-auto bg-green-500 py-4">
        @foreach (\App\Models\Question::all() as $question)
            <div>
                <p>{{ $question->text }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
