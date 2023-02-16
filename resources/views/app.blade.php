<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Project</title>
</head>
<body>

    <div class="container">
        <nav>
            @include('components.nav')
        </nav>
        @yield('content')
    </div>
    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
            document.querySelectorAll(".mi").forEach(function(move){
                var moving_value = move.getAttribute("data-value");
                var x = (e.clientX * moving_value) / 250;
                var y = (e.clientY * moving_value) / 250;

                move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
            });
        }
    </script>
</body>
</html>
