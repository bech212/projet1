<?php

use App\Http\Controllers\AproposContoller;
use App\Http\Controllers\BlogContoller;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\FeatureContoller;
use App\Http\Controllers\PriceContoller;
use App\Http\Controllers\QuoteContoller;
use App\Http\Controllers\ServiceContoller;
use App\Http\Controllers\TeamContoller;
use App\Http\Controllers\TestimonialContoller;
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


Route::get('/', function () {return view('welcome');})


->name('welcome');


Route::get('service', [ServiceContoller::class, 'index'])->name('service');



Route::get('contact', [ContactContoller::class, 'index'])->name('contact');

Route::get('apropos', [AproposContoller::class, 'index'])->name('apropos');

Route::get('feature', [FeatureContoller::class, 'index'])->name('feature');

Route::get('price', [PriceContoller::class, 'index'])->name('price');

Route::get('quote', [QuoteContoller::class, 'index'])->name('quote');

Route::get('team', [TeamContoller::class, 'index'])->name('team');

Route::get('testimonial', [TestimonialContoller::class, 'index'])->name('testmonial');

Route::resource('blogs', BlogContoller::class);
