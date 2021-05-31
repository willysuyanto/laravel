<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});


Route::prefix('mhs')->group(function(){
    Route::get('/nilai', function($nimnya="",$namanya="ga diisi"){
        return "Halaman Menu Nilai Mahasiswa";
    });
    Route::get('/kehadiran', function($nimnya="",$namanya="ga diisi"){
        return "Halaman Menu kehadiran Mahasiswa";
    });
    Route::get('/profil', function($nimnya="",$namanya="ga diisi"){
        return "Halaman Menu profil Mahasiswa";
    });
});






// Route::get('/logout', function(Request $request){
//     Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerate();

//         return redirect('login');
// });

// Route::get('pegawai/export', 'PegawaiController@export_exc');

// Route::resource('/pegawai', 'PegawaiController');

// Route::get('/perkenalan/{email}', function($email){
//     return "$email";
// })->where(['email' => '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$', 'umur' => '[0-9]+']);

// Route::get('/kenal/{nama}/{id}', function($nama,$umr){
//     return "Halo Nama saya $nama, Umur saya $umr Tahun";
// })->whereAlpha('nama')->whereNumber('id');

// Route::view('/home', 'home'); 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
