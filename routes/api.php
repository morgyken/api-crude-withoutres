<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// employee api created here 

Route::get('/employees', 'EmployeeController@getEmployees');

// get single employee  

Route::get('/employee/{id}', 'EmployeeController@getEmployeeById');

// add employee 

Route::post('/addEmployee', 'EmployeeController@addEmployee');

// update employee

Route::put('/updateEmployee/{id}', 'EmployeeController@updateEmployee');

// delete employee deleteEmployee

Route::delete('/deleteEmployee/{id}', 'EmployeeController@deleteEmployee');
