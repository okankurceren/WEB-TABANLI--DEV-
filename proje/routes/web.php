<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\Web;
use App\Http\Controllers\Formislemleri;


Route::get('/', function () { return view('welcome');});

// Route::get('/deneme', function(){return view('deneme');});  
Route::get("/phpturkiye", [Deneme::class, 'test']);
Route::get("/web", [Web::class,'site']);
Route::get("/form", [Formislemleri::class,'gorunum']);
Route::middleware('arakontrol')->post("/form-sonuc", [Formislemleri::class,'sonuc'])->name('sonuc');