
@vite('resources/css/dogs.css')
    <div class="block">
        <h1>{{$dog->name}}</h1>
        <p>Breed: {{$dog->breed}}</p>
        <p>Size: {{$dog->size}}</p>
        <p>Weight: {{$dog->weight}}kg</p>
        
        <div class="buttonContainer">
            <a class="button" href="{{route('dogs.edit', $dog)}}">Edit</a>
            <a class="button" href="{{route('dogs.index')}}">View all dogs</a>
        </div>
    </div>
