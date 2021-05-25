<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function loans(){
        return view('loans');
    }

    public function loan_create(){
        return view('create_form.loan');
    }
}
