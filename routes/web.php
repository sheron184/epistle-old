<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookletController;
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

//public
Route::get('/', [MainController::class, 'index']);

//user
Route::get('check', [MainController::class, 'check_credentails']);
Route::get('home', [MainController::class, 'home']);
Route::get('logout', [MainController::class, 'logout']);
Route::get('userarea', [MainController::class, 'regorlogin']);
Route::post('signup', [MainController::class, 'signup']);
Route::post('login', [MainController::class, 'login']);
Route::get('forgot-password', [
    MainController::class,
    'getResetEmail',
])->middleware('guest');
Route::post('reset_link', [MainController::class, 'sendResetLink']);
Route::get('token/{token}', [
    MainController::class,
    'passwordResetTokenValidate',
]);
Route::post('pswdreset', [MainController::class, 'reset_pswd']);
Route::post('gauth', [MainController::class, 'gauth']);
Route::get('profile', [MainController::class, 'profile']);

//booklet
Route::post('add_booklet', [BookletController::class, 'index']);
Route::get('booklet/{id}', [BookletController::class, 'view']);
Route::post('pdf', [BookletController::class, 'pdf']);
Route::post('savebook',[BookletController::class,'savebook']);

//Admin
Route::get('admin', [AdminController::class, 'index']);
Route::post('add_subject', [AdminController::class, 'add_subject']);
Route::post('update_roadmap', [AdminController::class, 'update_roadmap']);

//test
Route::get('mail', function () {
    Mail::raw('<h2>Hello from epistle</h2>', function ($message) {
        $message->from('sheronjude4@gmail.com', 'sheron jude');
        $message->to('colds2613@gmail.com', 'Stone Cold');
    });
    dd('Email is Sent.');
});
