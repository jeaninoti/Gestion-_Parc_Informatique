<?php

use App\Http\Controllers\Bureau;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\NiveauController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('bureau', BureauController::class);
Route::resource('niveau', NiveauController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('equipement', EquipementController::class);
Route::resource('Departement', DepartementController::class);

Route::get('/userProfil', function (){

    
    return view('userProfil');
})->name('userProfil')->middleware('auth');
