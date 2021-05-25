<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departments(){
        return view ('departments');
    }
    
    public function form(){
        return view ('form');
    }

    public function department_create(){
        return view ('create_form.department');
    }
}
