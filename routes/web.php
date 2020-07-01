<?php

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
    return view('home');
})->name('homepage');

Route::get('/contattaci', function() {
    return view('contatti');
})->name('contatti');

Route::get('/faq', function() {
    $faqs = config('faq.lista_faq');
    return view('faq')->with(['domande_risposte' => $faqs]);
})->name('faq');
