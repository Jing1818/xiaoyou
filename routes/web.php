<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserbbsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\TopiccatesController;
use App\Http\Controllers\TopicsController;
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
    return view('welcome');
});
Route::resource('posts',PostsController::class)->only(['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']);
Route::resource('userbbs',UserbbsController::class)->only(['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']);
Route::resource('follows',FollowsController::class)->only(['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']);
Route::resource('topics',TopicsController::class)->only(['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']);
Route::resource('topiccates',TopiccatesController::class)->only(['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']);
