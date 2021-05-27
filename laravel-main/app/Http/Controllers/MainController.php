<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MainController extends Controller
{
    // Index list
    public function indexView(){
        $employees = Employee::all();

        return view('pages.index', compact('employees'));
    }

    // Detail employee
    public function employeeView($id){
        $employee = Employee::findOrFail($id);

        return view('pages.employee', compact('employee'));
    }

    // Edit and Update employee
    public function editEmployeeView($id){
        $employee = Employee::findOrFail($id);

        return view('pages.editEmployee', compact('employee'));
    }
    public function updateEmployee(Request $request, $id){

        // dd($request -> all());
        
        $validatedData = $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
            'ral' => 'required',
        ]);

        $employee = Employee::findOrFail($id);
        $employee -> update($validatedData);

        return redirect() -> route('employeeLink', $employee -> id);
    }

    // Delete employee
    public function deleteEmployee($id){
        $employee = Employee::findOrFail($id);

        $employee -> delete();

        return redirect() -> route('indexLink');
    }

}
