<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('/trash', function () {
        return view('welcome');
    })->name('store.trash');
    Route::get('/map', function () {
        return view('dashboard.mapView');
    })->name('goma.map');


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
    Route::resources([
        'activity' => ActivityController::class,
        'analyses' => AnalyseController::class,
        'connection' => ConnectionController::class,
        'log' => LogController::class,
        'notification' => NotificationController::class,
        'trashes' => TrashController::class,
        'user' => UserController::class,
    ], ['except' => ['update']]);

    Route::post('/user/{id}', [UserController::class, 'update']);
    // Route::put('/users/{user}', 'UsersController@update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
