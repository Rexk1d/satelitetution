<?php
namespace App\Http\Controllers;

use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class,'login']);
//Route::post('/DashboardAdmin',[LoginController::class,'loginAdmin'])->name('DashboardAdmin');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/LoginUser', function(){

    return view('LoginUser');
});

Route::view('/DashboardUser', 'DashboardUser')->name('DashboardUser');
Route::post('/DashboardUser', 'LoginController@DashboardUser')->name('DashboardUser');







Route::get('/register', function(){

    return view('register');
});

Route::get('/profileAdmin', function(){

    return view('profileAdmin');
});

Route::get('/DashboardAdmin', function(){

    return view('DashboardAdmin');
});

//Route::get('/DashboardUser', function(){return view('DashboardUser');});

Route::get('/test-connection', 'LoginController@testConnection');



