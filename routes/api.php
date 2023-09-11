<?php

use App\Http\Controllers\TaskOneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return response()->json(['message'=>'Task one is cool']);
});

Route::get('/task_one', [TaskOneController::class,'task']);
