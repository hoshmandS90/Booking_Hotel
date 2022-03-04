<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');


Route::get('/Reservation',App\Http\Controllers\Components\Book::class)->name('book');



Route::get('/Rooms/{room:id}',App\Http\Controllers\Pages\View::class)->name('view');

Route::get('/Rooms',App\Http\Controllers\Pages\Rooms::class)->name('rooms');


Route::get('/Contact',App\Http\Controllers\Pages\Contact::class)->name('contact');


Route::get('/AboutUs',App\Http\Controllers\About::class)->name('AboutUs');


Route::get('/Dinig',App\Http\Controllers\Dining::class)->name('dining');

Route::get('/Wedding',App\Http\Controllers\Event\Wedding::class)->name('wedding');


Route::get('/Services',App\Http\Controllers\Service::class)->name('Service');