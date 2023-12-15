<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
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
    return view('user.welcome');
});

Route::prefix('/user')->group(function () {
    Route::post('/create', [UserController::class, 'insertUser']);
    Route::post('/login/process', [UserController::class, 'loginUser']);
    Route::get('/welcome', function () {
        return view('user.welcome');
    });

    Route::middleware(['myauth'])->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboardUser']);
        Route::post('/contact', [ContactController::class, 'contactUser']);

        Route::get('/logout', [UserController::class, 'logoutUser']);
        Route::get('/homepage', function () {
        return view('user.homepage');
    }); 
        Route::get('/profil', function () {
            return view('user.profil');
    });
    });
});
