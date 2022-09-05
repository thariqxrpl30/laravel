<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

Route::get('login', function(){
    return view('admin/login');
}   );

Route::get('/' , [HomeController::class,'index']);
Route::post('/store' , [HomeController::class,'store']);
Route::post('/store/{id}', [HomeController::class,'update']);
Route::get('/store/{id}', [HomeController::class,'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });