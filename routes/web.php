<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListjobController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ListjobController::class, 'getjob']);
