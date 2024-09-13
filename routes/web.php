<?php

use App\Http\Middleware\CekLevel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\DashboardAlumniController;
use App\Http\Controllers\Pelanggan\LandingPageController;

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

//Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

/*  
Route::group(['middleware' => ['auth']], function () {
    
}); */


Route::get('/dashboard', [DashboardController::class, 'index']);    

Route::get('/', [LandingPageController::class, 'index'])->name('/');

// Admin dan Dokter
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::group(['middleware' => [CekLevel::class . ':Admin']], function () {
        Route::resource('data-alumni', DashboardAlumniController::class);
    });



    Route::group(['middleware' => [CekLevel::class . ':Alumni']], function () {

        
    });

    
});

