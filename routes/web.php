<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('app');
})->name('app');


Route::get('/locale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');
Route::get('/', [SiteController::class, 'app'])->name('app');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/serviceitem', [SiteController::class, 'serviceitem'])->name('serviceitem');
Route::post('/process-form', [FormController::class, 'processForm'])->name('form.submit');




