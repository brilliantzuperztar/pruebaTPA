<?php


use App\Http\Controllers\EmployeePositions;
use App\Http\Controllers\EmployeeList;
use Illuminate\Support\Facades\Route;

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

Route::get('/employees', [EmployeeList::class,'view']);
Route::get('/positions', [EmployeePositions::class,'view'])->name('employees.info');

/*  Route::controller(EmployeeList::class)->group(function () {
    Route::get('/employees', [EmployeeList::class,'index']);
    Route::post('/employee', [EmployeeList::class,'store']);
    Route::get('/employees/{id}', [EmployeeList::class,'show']);
    Route::put('/employees/{id}', [EmployeeList::class,'update']);
    Route::delete('/employees/{id}', [EmployeeList::class,'destroy']);
    
});

Route::controller(EmployeePositions::class)->group(function () {
    #Route::get('/positions', [EmployeePositions::class,'index'])->name('employees.info');
    Route::get('/positions', [EmployeePositions::class,'index']);
    Route::post('/position', [EmployeePositions::class,'store']);
    Route::get('/positions/{id}', [EmployeePositions::class,'show']);
    Route::put('/positions/{id}', [EmployeePositions::class,'update']);
    Route::delete('/positions/{id}', [EmployeePositions::class,'destroy']);
});
*/
Auth::routes();

Route::get('/', [App\Http\Controllers\AuthManager::class, 'index'])->name('index');

Auth::routes();

Route::post('/login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');

#Route::post('/login', [App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\AuthManager::class, 'index'])->name('home');
