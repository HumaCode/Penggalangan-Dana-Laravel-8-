<?php

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // middleware admin
    Route::group([
        'middleware' => 'role:admin'
    ], function () {
    });

    // middleware donatur
    Route::group([
        'middleware' => 'role:donatur'
    ], function () {
    });
});
