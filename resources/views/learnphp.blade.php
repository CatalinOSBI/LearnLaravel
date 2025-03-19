<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learn Laravel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/learnphp.css')
</head>

<body>

    <a class="block" title="PHP" href='/phpmenu'>
        <img src="php-logo.svg" width="100" alt="phplogo">
    </a>

    <a class="block" style="filter: grayscale(100%)" title="Laravel" href="{{route('dogs.create')}}">
        <img src="laravel-logo.svg" width="50" alt="laravellogo">
    </a>

</body>

</html>