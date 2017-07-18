<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Dog;
Route::get('dogs', function() {
	$dogs = Dog::get();
	return view('dogs.index', compact('dogs'));
})->name('dogs.index');

Route::delete('dogs/{dog}', function(Dog $dog) {
	$dog->delete();
	return back();
})->name('dogs.destroy');

Route::get('dogs/trashed', function () {
	$dogs = Dog::onlyTrashed()->get();
	return view('dogs.trashed', compact('dogs'));
})->name('dogs.trashed');

Route::get('dogs/requiring-antirabbit-bite-shot', function () {
	$dogs = (new Dog)->dogsRequiringAntiRabbitBiteShot()->get();
	return view('dogs.requiring-antirabbit-bite-shot', compact('dogs'));
})->name('dogs.requiring-antirabbit-bite-shot');

