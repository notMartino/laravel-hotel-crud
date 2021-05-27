<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MainController extends Controller
{
    public function indexView(){
        $employees = Employee::all();

        return view('pages.index', compact('employees'));
    }
    public function employeeView($id){
        $employee = Employee::findOrFail($id);

        return view('pages.employee', compact('employee'));
    }
}
