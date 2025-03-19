<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>
<body>
    @if (session('success'))
        {{ session('success') }}
        <h1>Dog Added</h1>
    
        <a href="{{route('dogs.index')}}">See All Dogs</a> <br> <br>
        <a href="{{route('dogs.create')}}">Add Another Dog</a>
    @endif
</body>
</html>