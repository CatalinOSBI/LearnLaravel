<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dog</title>
    <link rel="stylesheet" href="menu.css">
    @Vite('resources/css/menu.css')
</head>

<body>

    <h1>Add New Dog</h1>

    <form style="display: flex; flex-direction: column; width:8rem" action="{{route('postDogRoute')}}" method="post">
        @csrf
        <label for="name">Dog Name:</label>
        <input type="text" name="name" id="name">
        <label for="breed">Dog Breed:</label>
        <input type="text" name="breed" id="breed">
        <label for="size">Size:</label>
        <select name="size" id="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
        <label for="weight">Weight:</label>
        <input type="number" max="100" id="weight" name="weight">
        <button type="submit">Add dog</button>
        <a href="/dogs">See All Dogs</a>
    </form>

    

</body>

</html>