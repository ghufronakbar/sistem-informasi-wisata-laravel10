<?php

use App\Http\Controllers\PesanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Wisata;

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
    $wisata = Wisata::all();
    return view("wisata", compact(['wisata']));
});

Route::get('/wisata', [WisataController::class, "index"]);
Route::get('wisata/{id}', [WisataController::class, "show"]);

Route::middleware(['auth'])->group(function(){
    Route::get('pesan/{id}', [PesanController::class, "index"]);
    Route::post('pesan', [PesanController::class, 'store']);

    Route::get('/riwayat', [RiwayatController::class, "index"]);
    Route::get('/riwayat/{id}', [RiwayatController::class, "show"]);
    Route::post('/ulasan', [UlasanController::class, "store"]);

    Route::get('/editprofile', [UsersController::class, "index"]);
    Route::put('/editprofile/{id}', [UsersController::class, "update"]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

