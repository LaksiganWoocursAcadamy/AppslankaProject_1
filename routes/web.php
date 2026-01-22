<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', [PageController::class, 'Home']);

Route::get('About', [PageController::class, 'About']);

Route::get('Contact', [PageController::class, 'Contact']);

Route::get('posts', [PostController::class ,'index']);


Route::resource('posts', PostController::class);