<?php

use App\Http\Controllers\Administrator;
use App\Http\Controllers\ControllerProfile;
use App\Http\Controllers\ControllerUsersManagement;
use App\Http\Controllers\Front;
use App\Http\Controllers\Usersiola;
use App\Http\Controllers\UsulanSaya;
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

/** routes untuk tampilan depan */
Route::get('/', function () {
    return view('layouts.tema.depan.depan');
});
/** routes ini untuk halaman depan (front end) */
Route::prefix('menu')->group(function () {
    Route::get('about', [Front::class, 'about'])->name('about');
});

/* gak dipake */
// Route::get('/dashboard', function () {
//     return view('layouts.tema.dashboard.dashboard');
// })->middleware(['auth','roleadmin'])->name('dashboard');


/* Routes group khusus user  */
Route::prefix('user')->group(function () {
    Route::get('/view', [Usersiola::class, 'view'])->name('user')->middleware('roleadmin');
    Route::get('/pilihan', [Usersiola::class, 'pilihan'])->name('user')->middleware(['roleadmin', 'status_permohonan']);

    /** routes dibawah untuk upload berkas permohonan pemberhentian  */
    Route::get('/upload_berkas_pemberhentian',[Usersiola::class, 'upload_berkas_pemberhentian'])->name('upload_berkas_pengangkatan')->middleware('roleadmin');

    /** routes dibawah untuk upload berkas permohonan pengangkatan */
    Route::get('/upload_berkas_pengangkatan',[Usersiola::class, 'upload_berkas_pengangkatan'])->name('upload_berkas_pengangkatan')->middleware('roleadmin');

    /** Routes dibawah untuk insert data pemberhentian */
    Route::post('/insert-form_pemberhentian', [Usersiola::class, 'pemberhentian'])->name('insert-form_pemberhentian')->middleware('roleadmin');

    /** Routes dibawah untuk insert data pengangkatan */
    Route::post('/insert-form_pengangkatan', [Usersiola::class, 'pengangkatan'])->name('insert-form_pengangkatan')->middleware('roleadmin');

    /** routes dibawah ini untuk usulan saya dan cetak serah terima TCPDF */
    // routes usulan saya
    Route::get('/usulan_saya', [UsulanSaya::class, 'usulan'])->name('usulan_saya')->middleware('roleadmin');
    Route::get('/cetak_usulan_saya',[UsulanSaya::class,'serah_terima'])->name('serah_terima')->middleware('roleadmin');


    // data profile
    Route::get('/view-profile', [ControllerProfile::class, 'view_profile'])->name('user')->middleware('roleadmin');
});

/* Routes group khusus admin */
Route::prefix('admin')->group(function () {

    /** routes dibawah ini khusus untuk menu dashboard  */
    Route::get('/view', [Administrator::class, 'adminDashboard'])->name('adminDashboard')->middleware('role');

    /** ====================== */
    /** routes dibawah ini khusus untuk menu pemberhentian  */
    Route::get('/pemberhentian', [Administrator::class, 'index_pemberhentian'])->name('pemberhentian')->middleware('role');
    // fungsi edit dan hapus untuk user yang sdh up permohonan
    Route::get('/edit-data/{pemberhentian}/view', [Administrator::class, 'edit_data_pemberhentian'])->name('edit-data')->middleware('role');

    Route::put('/edit-data/{pemberhentian}/ubah', [Administrator::class, 'update_data_pemberhentian'])->name('pemberhentian')->middleware('role');
    /** ================= */

    /** =============================== */
    /** routes dibawah ini khusus untuk menu pengangkatan  */
    Route::get('/pengangkatan', [Administrator::class, 'index_pengangkatan'])->name('pengangkatan')->middleware('role');
    // fungsi edit dan hapus untuk user yang sdh up permohonan
    Route::get('/edit-data-2/{pengangkatan}/view', [Administrator::class, 'edit_data_pengangkatan'])->name('edit-data-pengangkatan')->middleware('role');

    Route::put('/edit-data-2/{pengangkatan}/ubah', [Administrator::class, 'update_data_pengangkatan'])->name('update-data-pengangkatan')->middleware('role');


    /** hapus data permohonan pengangkatan dan pemberhentian */
    Route::delete('/hapus-data-pengangkatan/{hapusDataPengangkatan}/hapus', [Administrator::class, 'hapus_data_pengangkatan'])->name('hapus-data-pengangkatan')->middleware('role');
    Route::delete('/hapus-data-pemberhentian/{hapusDataPemberhentian}/hapus', [Administrator::class, 'hapus_data_pemberhentian'])->name('hapus-data-pemberhentian')->middleware('role');
    /** =============================== */


    /** =============================== */
    /** routes dibawah ini untuk menu users management */
    Route::get('/users-management', [ControllerUsersManagement::class, 'index'])->middleware('role')->name('users-management');
    // users management view forms
    Route::get('/users-management-form', [ControllerUsersManagement::class, 'create'])->middleware('role')->name('users-management-form');

    // users management tambah data
    Route::post('/users-management-tambah', [ControllerUsersManagement::class, 'store'])->middleware('role')->name('users-management-tambah');

    // view edit forms
    Route::get('/users-management-form/{edit}/edit-data', [ControllerUsersManagement::class, 'edit'])->middleware('role')->name('users-management-form-edit');

    // edit data forms
    Route::put('/users-management-form/{modifData}/update-data', [ControllerUsersManagement::class, 'update'])->middleware('role')->name('users-management-update-data');
    // delete
    Route::delete('/users-management-delete/{hapusData}/hapus', [ControllerUsersManagement::class, 'destroy'])->middleware('role')->name('users-management-delete');
    /** =============================== */

});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

require __DIR__ . '/auth.php';
