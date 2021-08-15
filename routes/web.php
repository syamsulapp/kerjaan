<?php

use App\Http\Controllers\Administrator;
use App\Http\Controllers\ControllerUsersManagement;
use App\Http\Controllers\Usersiola;
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

/* gak dipake */
// Route::get('/dashboard', function () {
//     return view('layouts.tema.dashboard.dashboard');
// })->middleware(['auth','roleadmin'])->name('dashboard');


/* Routes group khusus user  */
Route::prefix('user')->group(function () {
    Route::get('/view', [Usersiola::class, 'view'])->name('user')->middleware('roleadmin');
    Route::get('/pilihan', [Usersiola::class, 'pilihan'])->name('user')->middleware(['roleadmin', 'status_permohonan']);
    Route::post('/insert-form_pemberhentian', [Usersiola::class, 'pemberhentian'])->name('insert-form_pemberhentian')->middleware('roleadmin');
    Route::post('/insert-form_pengangkatan', [Usersiola::class, 'pengangkatan'])->name('insert-form_pengangkatan')->middleware('roleadmin');
});

/* Routes group khusus admin */
Route::prefix('admin')->group(function () {
    Route::get('/view', [Administrator::class, 'index'])->name('admin')->middleware('role');
    Route::get('/users-management', [ControllerUsersManagement::class, 'index'])->middleware('role')->name('users-management');

    // users management view forms
    Route::get('/users-management-form', [ControllerUsersManagement::class, 'create'])->middleware('role')->name('users-management-form');

    // users management tambah data
    Route::post('/users-management-tambah', [ControllerUsersManagement::class, 'store'])->middleware('role')->name('users-management-tambah');
});

require __DIR__ . '/auth.php';
