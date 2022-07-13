<?php

use App\Http\Controllers\AproposContoller;
use App\Http\Controllers\BlogContoller;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\ServiceContoller;
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
})->name('welcome');


Route::get('/service', [ServiceContoller::class, 'index'])->name('service');

Route::get('/contact', [ContactContoller::class, 'index'])->name('contact');

Route::get('/apropos', [AproposContoller::class, 'index'])->name('apropos');

Route::resource('blogs', BlogContoller::class);
