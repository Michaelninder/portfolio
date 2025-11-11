<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::view('/', 'lander')->name('home');
Route::view('/experience', 'experience')->name('experience');
Route::view('/education', 'education')->name('education');
Route::view('/tools', 'tools')->name('tools');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::view('/imprint', 'imprint')->name('imprint');
Route::view('/privacy', 'privacy')->name('privacy');