@extends('layouts.app')
@vite('resources/css/dogs.css')
@section('title', $dog->name." "."(".$dog->breed.")")

@section('content')
    <div class="block">
        <h1>{{$dog->name}}</h1>
        <p>Breed: {{$dog->breed}}</p>
        <p>Size: {{$dog->size}}</p>
        <p>Weight: {{$dog->weight}}kg</p>
        
        <form action="{{route('dogs.destroy', $dog)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="button" href="{{route('dogs.edit', $dog)}}">Edit</a>
                <a class="button" href="{{route('dogs.index')}}">View all dogs</a>
                <button type="submit" onclick="return confirm('You are about to delete the dog.')" class="button delete">Delete</button>
            </form>
    </div>
@endsection
