<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    public function greeter()
    {
        return "Hello from the Dog Pound!";
    }

    public function goToSuccess()
    {
        return view('success');
    }

    public function create()
    {
        return view('dogs.create');
    }

    //Index func.
 
    public function index()
    {
        //Store Dogs in var
        $dogs = Dog::all();

        //Go to view, and send dogs
        return view('dogs.index', compact('dogs'));
    }

    //Store func.

    public function store(Request $request) 
    {
        //Validation
        $validation = $request ->validate([
            'name'=> 'bail|required|max:30',
            'breed'=> 'bail|required|min:3|max:30',
            'size'=> 'bail|required|in:Small,Medium,Large',
            'weight'=>'bail|required|integer|min:0|max:100',

        ]);

        //Create new Dog
        Dog::create($validation);

        //Go to Success
        return redirect('/success')->with('success','Dog added successfully.');
    }
}
