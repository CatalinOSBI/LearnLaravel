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

    public function store(Request $request) 
    {
        Dog::create([
            'name'=> $request->name,
            'breed'=> $request->breed,
            'size'=> $request->size,
            'weight'=> $request->weight,
            
        ]);

        return view('success');
    }
}
