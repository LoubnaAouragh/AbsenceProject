<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartementController;

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
Route::get('/Administrateur', function () {
    return view('index');
});
Route::get('/Enseignant', function () {
    return view('enseignant_view');
});

Route::resource('Departement', 'App\Http\Controllers\DepartementController', ['except' => ['create', 'edit','store','update','destroy','show']]);