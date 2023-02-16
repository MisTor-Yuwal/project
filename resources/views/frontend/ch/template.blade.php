<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>ST</title>
</head>
<body>
    <div class="ch-container">
        @include('components.nav')
        <div class="st-section">
            @include('frontend.ch.st')
            {{-- @yield('characters') --}}
        </div>
    </div>
</body>
</html>
