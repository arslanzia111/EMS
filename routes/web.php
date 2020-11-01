<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('employee.create');
// });
//Route::resource('employee','Employee\EmployeeController');
Route::resource('employee', 'Employee\EmployeeController');
Route::resource('department','Employee\DepartmentController');
Route::resource('designation','Employee\DesignationController');
Route::resource('contract','Employee\ContractController');


Route::resource('payslip','Employee\PayslipController');

//Route::view('/','payslip.basic');
Route::view('/test','payslip.table');
Route::get('/practice','MyController@index')->name('practice');
//Route::resource('/','Practice\PracticeController');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
