<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


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
Route::get('/Properties', [PropertyController::class, 'index']); 
Route::post('/AddProperty', [PropertyController::class, 'store']);
Route::get('/search-properties-by-zone', [PropertyController::class, 'search']);
