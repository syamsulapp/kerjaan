<?php

use App\Http\Controllers\Administrator;
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
});

Route::get('/dashboard', function () {
    return view('layouts.tema.dashboard.dashboard');
})->middleware(['auth','roleadmin'])->name('dashboard');


Route::get('/administrator',[Administrator::class, 'index'])->name('administrator')->middleware('role');



require __DIR__.'/auth.php';
