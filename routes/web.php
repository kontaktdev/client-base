<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    dd('foo');
})->name('index');

Route::get('employees', [EmployeeController::class, 'all'])->name('employees.all');
Route::resource('companies.employees', EmployeeController::class);
Route::resource('companies', CompanyController::class);

