<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersMoodleController;
use App\Http\Controllers\CohorteUsersController;
use App\Http\Controllers\CohorteMoodleController;


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

Route::resource('users_moodle', UsersMoodleController::class)->names('users_moodle');
Route::resource('cohorte_users', CohorteUsersController::class);
Route::resource('cohorte_moodle', CohorteMoodleController::class);

