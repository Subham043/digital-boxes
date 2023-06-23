<?php

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index', 'as' => 'home.index'])->name('index');
Route::post('/contact', [HomeController::class, 'contact_ajax', 'as' => 'contact.contact_ajax'])->name('contact_ajax')->middleware('throttle:5,1');
Route::get('/captcha-reload', [CaptchaController::class, 'reloadCaptcha', 'as' => 'captcha.reload'])->name('captcha_ajax')->middleware('throttle:5,1');
