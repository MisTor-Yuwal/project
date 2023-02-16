<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="char-container">
        <nav>
            @include('components.nav')
        </nav>
        <div class="chs-container">
            {{-- @yield('s') --}}
            @include('frontend.chMenu')
        </div>
    </div>
    @include('components.footer')
</body>
</html>
