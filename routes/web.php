<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeesController;
use Intervention\Image\ImageManager;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('admin/company', CompanyController::class)->middleware('is_admin');
Route::get('admin/company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('companies.create')->middleware('is_admin');
Route::get('admin/company/edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('companies.edit')->middleware('is_admin');
Route::get('admin/company/', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.index')->middleware('is_admin');
Route::put('admin/company/update/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('companies.update')->middleware('is_admin');
Route::get('admin/company/show/{id}', [App\Http\Controllers\CompanyController::class, 'show'])->name('companies.show')->middleware('is_admin');

Route::resource('admin/employees', EmployeesController::class)->middleware('is_admin');
Route::get('admin/employees/create', [App\Http\Controllers\EmployeesController::class, 'create'])->name('employees.create')->middleware('is_admin');
Route::get('admin/employees/edit/{id}', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('employees.edit')->middleware('is_admin');
Route::get('admin/employees/', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.index')->middleware('is_admin');
Route::put('admin/employees/update/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('employees.update')->middleware('is_admin');
Route::get('admin/employees/show/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('employees.show')->middleware('is_admin');
