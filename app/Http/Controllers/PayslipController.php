<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipController extends Controller
{
    public function payslip(){
        return view('payslip');
    }

    public function payslip_create(){
        return view('create_form.payslip');
    }
    public function payslip_view(){
        return view('view.payslip');
    }
}
