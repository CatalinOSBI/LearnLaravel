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

// //HTML Form
// Route::get('dogs/create', [DogController::class, 'create'])
// ->name('dogs.create');

// // Post call
// Route::post('/dogs', [DogController::class, 'store'])
// ->name('dogs.store');

// // Get call
// Route::get('/dogs', [DogController::class, 'index'])
// ->name('dogs.index');

// // Get call unique item
// Route::get('/dogs/{dog}', [DogController::class, 'index'])
// ->name('dogs.index');

// // Put call (update) 
// Route::put('dog/{dog}/edit',[DogController::class,'update'])
// ->name('dogs.update');

// // Delete call  
// Route::delete('dog/{dog}',[DogController::class,'destroy'])
// ->name('dogs.delete');

Route::resource('dogs', DogController::class);

