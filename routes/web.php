<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

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

Route::get('/test', [RoleController::class, 'index'])->name('role');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/read', [RoleController::class, 'read']);

Route::get('/create', [RoleController::class, 'create']);
Route::post('/store', [RoleController::class, 'store']);
Route::get('/edit/{id}', [RoleController::class, 'edit']);
Route::post('/update/{id}', [RoleController::class, 'update']);
Route::get('/delete/{id}', [RoleController::class, 'delete']);
Route::get('/userorder',[RoleController::class,'userorder']);


