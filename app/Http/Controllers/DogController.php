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
        return redirect('/success')->with('success','Dog added successfully. (from redirect)');
    }

    //Go to edit form func.
    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'));
    }

    public function update(Request $request, Dog $dog)
    {
                //Validation
                $validation = $request ->validate([
                    'name'=> 'bail|required|max:30',
                    'breed'=> 'bail|required|min:3|max:30',
                    'size'=> 'bail|required|in:Small,Medium,Large',
                    'weight'=>'bail|required|integer|min:0|max:100',
        
                ]);

                //Update Dog
                $dog->update($validation);

                //Redirect
                return redirect()->route('dogs.show', $dog);
    }

    //Destroy|Delete func.
    public function destroy (Dog $dog)
    {
        //Delete Dog
        $dog -> delete();

        //Redirect
        return redirect()->route('dogs.index');
    }

    //Go to dog page func. (1 dog)
    public function show(Dog $dog)
    {
        return view('dogs.show', compact('dog'));
    }
}
