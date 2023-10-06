<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Helloworld;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/helloworld', [HelloWorld::class, 'sayHello']);

Route::get('/index', [ProductController::class, 'indexProduct']);

Route::get('/Edit', [ProductController::class, 'editProduct']);

Route::get('/create', [ProductController::class, 'createProduct']);
