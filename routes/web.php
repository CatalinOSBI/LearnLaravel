<?php

use App\Http\Controllers\DogController;
use App\Models\Dog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('learnphp');
});

    //  Example for logic 
Route::get('/greet', [DogController::class, 'greeter'])
->name('greetRoute');

//Success Page
Route::get('/success', [DogController::class, 'goToSuccess'])
->name('successRoute');

//HTML Form
Route::get('/addDog', function () {
    return view('addDog');
})->name('formRoute');

//API Post call
Route::post('/addDog', [DogController::class, 'store'])
->name('postDogRoute');

//API Get call
Route::get('/dogs', function () {
    return '<a href="/addDog">Add Dog</a> </br>'. Dog::all() ;
})->name('getDogRoute');
