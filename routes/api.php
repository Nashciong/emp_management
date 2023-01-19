<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum','ver'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    // Route::get('fetchData', [EmployeeController::class, 'index']);
    // Route::post('addData', [EmployeeController::class, 'store']);
    // Route::delete('deleteData/{id}', [EmployeeController::class, 'destroy']);
    // Route::get('showData/{id}', [EmployeeController::class, 'show']);
    // Route::put('updateData/{id}', [EmployeeController::class, 'update']);
    Route::apiResource('employee', EmployeeController::class);
});
Route::post('/login', [AuthController::class,'login']);
Route::post('/many', [Controller::class,'mm']);


