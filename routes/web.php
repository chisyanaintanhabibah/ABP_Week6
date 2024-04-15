<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/variants', [App\Http\Controllers\VariantController::class]);
Route:get('/login', function(){
    if(Auth::check())return redirect('product');
    return view('login');
})->name('login')
Route::resource('product', ProductController::class)->middleware('auth');
