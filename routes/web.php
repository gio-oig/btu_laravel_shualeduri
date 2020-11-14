<?php

use App\Models\Company;
use App\Models\Employee;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::get('company/all',[CompanyController::class,'viewAllCompany'])->name('company.all');
Route::post('company/add',[CompanyController::class,'addNewCompany'])->name('company.add');
Route::post('company/delete',[CompanyController::class,'deleteCompany'])->name('company.delete');
Route::get('company/edit/{id}',[CompanyController::class,'editCompany'])->name('company.edit');
Route::post('company/update/{id}',[CompanyController::class,'updateCompany'])->name('company.update');

Route::get('employee/all',[EmployeeController::class,'viewAllEmployee'])->name('employee.all');
Route::post('employee/add',[EmployeeController::class,'addNewEmployee'])->name('employee.add');
Route::post('employee/delete',[EmployeeController::class,'deleteEmployee'])->name('employee.delete');
Route::get('employee/edit/{id}',[EmployeeController::class,'editEmployee'])->name('employee.edit');
Route::post('employee/update/{id}',[EmployeeController::class,'updateEmployee'])->name('employee.update');