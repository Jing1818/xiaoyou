<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserbbsController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\PostsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->namespace('Api')->name('api.v1')->group(function (){
    Route::get('user/{user}',[UserbbsController::class,'show'])->name('user.show');
    Route::post('index/{user}',[IndexController::class,'floor'])->name('index.floor');
    Route::get('post/{post}',[PostsController::class,'show'])->name('post.show');
});
