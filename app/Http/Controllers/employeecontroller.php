<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {   
        $employees = Employee::all();
        return view ('employee.index', compact('employees'));
    }


    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required|date',
            'contact' => 'required',
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit( int $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required|date',
            'contact' => 'required',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(int $id){
      $employee = Employee::findOrFail($id);
      $employee->delete();

      return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
