<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookletController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GithubController;

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

//Public
Route::get('/', [MainController::class, 'index']);

//User
Route::get('check', [MainController::class, 'check_credentails']);
Route::get('home', [MainController::class, 'home']);
Route::get('logout', [MainController::class, 'logout']);
Route::post('signup', [MainController::class, 'signup']);
Route::post('login', [MainController::class, 'login']);
Route::get('forgot-password', [
    MainController::class,
    'getResetEmail',
]);
Route::post('reset_link', [MainController::class, 'sendResetLink']);
Route::get('token/{token}', [
    MainController::class,
    'passwordResetTokenValidate',
]);
Route::post('pswdreset', [MainController::class, 'reset_pswd']);
Route::get('gauth', [MainController::class, 'gauth']);
Route::get('profile', [MainController::class, 'profile']);
Route::get('explorer',[HomeController::class,'explorer']);
Route::get('playground',[HomeController::class,'playground']);

//Booklet
Route::post('add_booklet', [BookletController::class, 'index']);
Route::get('bookview/{id}', [BookletController::class, 'bookview']);
Route::post('pdf', [BookletController::class, 'pdf']);
Route::post('savebook',[BookletController::class,'savebook']);
Route::get('editview/{id}',[BookletController::class,'editview'])->middleware('bookowner');

//Project
Route::get('editp/{id}',[ProjectController::class,'editproject']);
Route::get('viewp/{id}',[ProjectController::class,'viewproject']);
Route::post('addproject',[ProjectController::class,'create']);
Route::post('saveproject',[ProjectController::class,'saveproject']);
//Team
Route::get('teamview',[TeamController::class,'teamview']);

//Admin
Route::get('admin', [AdminController::class, 'index']);
Route::post('add_subject', [AdminController::class, 'add_subject']);
Route::post('update_roadmap', [AdminController::class, 'update_roadmap']);

//GitHub API
Route::get('git',[GithubController::class,'index']);
Route::get('gitlog', [GithubController::class,'redirectToProvider']);
Route::get('gitdata', [GithubController::class,'handleProviderCallback']);




//test
Route::get('mail', function () {
    Mail::raw('<h2>Hello from epistle</h2>', function ($message) {
        $message->from('sheronjude4@gmail.com', 'sheron jude');
        $message->to('colds2613@gmail.com', 'Stone Cold');
    });
    dd('Email is Sent.');
});
