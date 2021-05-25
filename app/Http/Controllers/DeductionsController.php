<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionsController extends Controller
{
    public function deductions(){
        return view('deductions');
    }

    public function deduction_create(){
        return view('create_form.deduction');
    }
}
