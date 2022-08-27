<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogController;



Route::get('/', function () {
    return view('employee');
});
Route::post('/store',[EmployeeController::class,'create']);

Route::get('/log', function () {
    return view('logdatain');
});
Route::post('/logstore',[LogController::class,'create']);

Route::get('/log/list',[LogController::class,'index']);