@vite('resources/css/dogs.css')

@foreach ($dogs as $dog)
    <div class="block">
        <div class="textContainer">
            <p>Name: {{$dog->name}}</p>
            <p>Breed: {{$dog->breed}}</p>
            <p>Size: {{$dog->size}}</p>
            <p>Weight: {{$dog->weight}}</p>
        </div>

        <form action="{{route('dogs.destroy', $dog)}}" method="POST">
            @csrf
            @method('DELETE')
            <a class="button" href="{{route('dogs.edit', $dog)}}">Edit</a>
            <a class="button" href="{{route('dogs.show', $dog)}}">View</a>
            <button type="submit" onclick="return confirm('You are about to delete the dog.')" class="button delete">Delete</button>
        </form>

    </div>
@endforeach