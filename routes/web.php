<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [
    App\Http\Controllers\LoginController::class, 'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class, 'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class, 'layout'
]);

Route::get('/employees', [
    App\Http\Controllers\EmployeesController::class, 'employees'
]);

Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class, 'departments'
]);

Route::get('/loans', [
    App\Http\Controllers\LoansController::class, 'loans'
]);

Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class, 'leaves'
]);

Route::get('/deductions', [
    App\Http\Controllers\DeductionsController::class, 'deductions'
]);

Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class, 'timekeeping'
]);

Route::get('/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip'
]);

Route::get('/form', [
    App\Http\Controllers\DepartmentController::class, 'form'
]);

Route::get('/create_form/department', [
    App\Http\Controllers\DepartmentController::class, 'department_create'
]);

Route::get('/create_form/employee', [
    App\Http\Controllers\EmployeesController::class, 'employee_create'
]);

Route::get('/create_form/loan', [
    App\Http\Controllers\LoansController::class, 'loan_create'
]);

Route::get('/create_form/leave', [
    App\Http\Controllers\LeavesController::class, 'leave_create'
]);

Route::get('/create_form/deduction', [
    App\Http\Controllers\DeductionsController::class, 'deduction_create'
]);

Route::get('/create_form/timekeeping', [
    App\Http\Controllers\TimekeepingController::class, 'timekeeping_create'
]);

Route::get('/create_form/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip_create'
]);

Route::get('/view/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip_view'
]);

Route::get('/view/timekeeping', [
    App\Http\Controllers\TimekeepingController::class, 'timekeeping_view'
]);
