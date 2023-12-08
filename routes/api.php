<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//import controller
use \dist\index;
use \dist\contact;
use \dist\about;
use \dist\portfolio;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
