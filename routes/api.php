<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

//posts
Route::apiResource('/posts', PostController::class);
