<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', [
    App\Http\Controllers\LoginController::class, 'index'
])->name('login');

Route::get('/table', [
    App\Http\Controllers\LoginController::class, 'table'
])->name('table');

Route::get('/layout', [
    App\Http\Controllers\LoginController::class, 'layout'
])->name('layout');

Route::get('/employees', [
    App\Http\Controllers\EmployeesController::class, 'employees'
])->name('employees');

Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class, 'departments'
])->name('departments');

Route::get('/loans', [
    App\Http\Controllers\LoansController::class, 'loans'
])->name('loans');

Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class, 'leaves'
])->name('leaves');

Route::get('/deductions', [
    App\Http\Controllers\DeductionsController::class, 'deductions'
])->name('deductions');

Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class, 'timekeeping'
])->name('timekeeping');

Route::get('/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip'
])->name('payslip');

Route::get('/form', [
    App\Http\Controllers\DepartmentController::class, 'form'
])->name('form');

Route::get('/create_form/department', [
    App\Http\Controllers\DepartmentController::class, 'department_create'
])->name('create_form.department');

Route::get('/create_form/employee', [
    App\Http\Controllers\EmployeesController::class, 'employee_create'
])->name('create_form.employee');

Route::get('/create_form/loan', [
    App\Http\Controllers\LoansController::class, 'loan_create'
])->name('create_form.loan');

Route::get('/create_form/leave', [
    App\Http\Controllers\LeavesController::class, 'leave_create'
])->name('create_form.leave');

Route::get('/create_form/deduction', [
    App\Http\Controllers\DeductionsController::class, 'deduction_create'
])->name('create_form.deductions');

Route::get('/create_form/timekeeping', [
    App\Http\Controllers\TimekeepingController::class, 'timekeeping_create'
])->name('create_form.timekeeping');

Route::get('/create_form/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip_create'
])->name('create_form.payslip');

Route::get('/view/payslip', [
    App\Http\Controllers\PayslipController::class, 'payslip_view'
])->name('view.payslip');

Route::get('/view/timekeeping', [
    App\Http\Controllers\TimekeepingController::class, 'timekeeping_view'
])->name('view.timekeeping');
