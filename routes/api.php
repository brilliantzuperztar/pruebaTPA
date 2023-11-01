<?php

use App\Http\Controllers\EmployeeList;
use App\Http\Controllers\EmployeePositions;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EmployeeList::class)->group(function () {
    Route::get('/employees', [EmployeeList::class,'index']);
    Route::post('/employee', [EmployeeList::class,'store']);
    Route::get('/employees/{id}', [EmployeeList::class,'show']);
    Route::put('/employees/{id}', [EmployeeList::class,'update']);
    Route::delete('/employees/{id}', [EmployeeList::class,'destroy']);
    
});

Route::controller(EmployeePositions::class)->group(function () {
    Route::get('/positions', [EmployeePositions::class,'index']);
    Route::post('/position', [EmployeePositions::class,'store']);
    Route::get('/positions/{id}', [EmployeePositions::class,'show']);
    Route::put('/positions/{id}', [EmployeePositions::class,'update']);
    Route::delete('/positions/{id}', [EmployeePositions::class,'destroy']);
});
