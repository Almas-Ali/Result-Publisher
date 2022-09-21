<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>@stack('title') - Result BD</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('all_results') }}">All Result</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Created with ❤️ by
                <a href="https://linktr.ee/almasali" class="author">Md. Almas Ali</a>
            </p>
            <p>Result BD &copy; 2021</p>
        </footer>
        <script src="{{ asset('js/main.js') }}" defer></script>

    </body>

</html>