<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/adduser',[UserController::class,'adduser'])->name('adduser');
Route::post('/submitdata',[UserController::class,'datasubmit'])->name('submitdata')->middleware('checkage');
Route::get('/userlist',[UserController::class,'dataget'])->name('list');
Route::get('/edituser',[UserController::class,'editdata'])->name('edit');
Route::post('/updateuser/{id}',[UserController::class,'updatedata'])->name('update');
Route::get('/deleteuser/{id}',[UserController::class,'deletedata'])->name('delete');
Route::get('/deletelist',[UserController::class,'trashlist'])->name('trash');
Route::get('/restoredata/{id}',[UserController::class,'restoredata'])->name('restore');
Route::get('/profile',[UserController::class,'userprofile'])->name('profile');

Route::get('/login', [AuthController::class,'signin'])->name('login');
Route::post('/checklogin', [AuthController::class,'checkuser'])->name('checklogin');
Route::get('/register',[AuthController::class,'signup'])->name('register');
Route::post('/createaccount',[AuthController::class,'reguser'])->name('createaccount');

Route::get('/logout',[AuthController::class,'signout'])->name('logout');