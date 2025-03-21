@extends('layouts.app')
@section('title','Edit - '.$dog->name)
@vite('resources/css/menu.css')

@section('content')       
    <h1>Edit Dog</h1>

    <form style="display: flex; flex-direction: column; width:8rem" action="{{route('dogs.update', $dog)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Dog Name:</label>
        <input type="text" name="name" id="name" value="{{old('name', $dog->name)}}">
        <label for="breed">Dog Breed:</label>
        <input type="text" name="breed" id="breed" value="{{old('breed', $dog->breed)}}">
        <label for="size">Size:</label>
        <select name="size" id="size">
            <option value="Small" {{old('size',$dog->size) == 'Small' ? 'selected' : ''}}>Small</option>
            <option value="Medium" {{old('size',$dog->size) == 'Medium' ? 'selected' : ''}}>Medium</option>
            <option value="Large" {{old('size',$dog->size) == 'Large' ? 'selected' : ''}}>Large</option>
        </select>
        <label for="weight">Weight:</label>
        <input type="number" max="100" id="weight" name="weight" value="{{old('weight', $dog->weight)}}">
        <button type="submit">Edit Dog</button>
        <a href="{{route('dogs.index')}}">See All Dogs</a>
    </form>
@endsection
