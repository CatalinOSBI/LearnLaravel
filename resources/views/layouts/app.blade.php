<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Learn Laravel')</title>
    @Vite('resources/css/default.css')
</head>
<body>
    <header>
        <h1>dog app.</h1>
        <nav>
            <img src="dog-logo.svg" alt="dogLogo" width="25">
            <a href="{{route('dogs.index')}}">Dogs</a>
            <a href="{{route('dogs.create')}}">Add Dog</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Footer</footer>
</body>
</html>