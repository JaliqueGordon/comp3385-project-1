<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

 Route::get('/properties', [PropertyController::class, 'index']);
 Route::get('/properties/create', function () {
    return view('newproperty');
});

Route::get('/properties/{property_id}', 'PropertyController@show');
Route::post('/properties', [PropertyController::class, 'store']);



// Create additional Routes below
