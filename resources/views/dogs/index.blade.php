@vite('resources/css/dogs.css')

@foreach ($dogs as $dog)
    <div class="block">
        <div class="textContainer">
            <p>Name: {{$dog->name}}</p>
            <p>Breed: {{$dog->breed}}</p>
            <p>Size: {{$dog->size}}</p>
            <p>Weight: {{$dog->weight}}</p>
        </div>

        <div class="buttonContainer">
            <a href="{{route('dogs.edit', $dog)}}" class="button">Edit</a>
            <a href="{{route('dogs.show', $dog)}}" class="button">View</a>
            <button class="button delete">Delete</button>
        </div>

    </div>
@endforeach