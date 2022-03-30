<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

// middleware admin dan donatur
Route::group([
    'middleware' => ['auth', 'role:admin,donatur']
], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']
    )->name('dashboard');


    // middleware admin
    Route::group([
        'middleware' => 'role:admin'
    ], function () {

        // route kategori
        Route::resource('/category', CategoryController::class);
    });

    // middleware donatur
    Route::group([
        'middleware' => 'role:donatur'
    ], function () {
    });
});
