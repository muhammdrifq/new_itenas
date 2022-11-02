<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\tb_ProdiController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// GROUP KOORDINATOR
Route::group(['prefix' => 'koordinator',
            'middleware' => ['auth', 'role:koordinator']],
            function(){

                route::get('/', function(){
                    return view('home');
                });

                route::resource('prodi', tb_ProdiController::class);    

});

// GROUP DOSEN
Route::group(['prefix' => 'dosen',
            'middleware' => ['auth', 'role:dosen']],
            function(){

});

// GROUP MAHASISWA
Route::group(['prefix' => 'mahasiswa',
            'middleware' => ['auth', 'role:mahasiswa']],
            function(){

});
