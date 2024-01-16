<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QBank</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-sans">
    <div class="max-w-7xl mx-auto py-4 h-screen flex mt-20 lg:mt-0 lg:items-center justify-center">
        <div> <!-- question wrapper -->
            {{-- @foreach (\App\Models\Question::all() as $question) --}}
            <div class="lg:max-w-5xl mx-auto">
                <p class="font-semibold text-3xl mb-3">{{ $question->text }}</p>
                <ul class="mt-2 w-full space-y-4">
                    @foreach ($question->answers as $answer)
                        <li
                            class="bg-gray-100 px-4 py-2 rounded text-gray-700 hover:shadow-lg transition-all duration-300
                                ease-in-out cursor-pointer w-full">
                            {{ $answer->text }}
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- @endforeach --}}
            <div>
                <a href="{{ route('questions.generate') }}">Load question</a>
            </div>
        </div>
    </div>
</body>

</html>
