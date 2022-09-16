<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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
})->name('home');

//pagina lista dei fumetti, potrei usare show index? 

Route::get('/comics',function(){

    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');
 
Route::get('/contacts',function(){
    return view('contacts');
})->name('contacts');


Route::get('/faq',function(){
    return view('faq');
})->name('faq');

