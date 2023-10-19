<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::post('/trash', function () {
    return view('welcome');
})->name('store.trash');
Route::get('/map', function () {
    return view('dashboard.mapView');
})->name('goma.map');
Route::get('/analyses', function () {
    return view('dashboard.analyses');
});

Route::get('/vehicules', function () {
    return view('dashboard.vehicules');
});
Route::get('/agents', function () {
    return view('dashboard.agents');
});
Route::get('/settings', function () {
    return view('compte.settings');
});
Route::get('/oauth', function () {
    return view('auth.askConnexion');
});
Route::get('/activity', function () {
    return view('compte.activity');
});
Route::get('/logs', function () {
    return view('compte.logs');
});
Route::get('/unauthorization', function () {
    return view('auth.unauthorization');
});
Route::get('/users', function () {
    return view('users.users');
});
Route::get('/user', function () {
    return view('users.user');
});
Route::get('/roles', function () {
    return view('users.roles');
});
Route::get('/role', function () {
    return view('users.role');
});

Route::get('/permissions', function () {
    return view('users.permissions');
});
