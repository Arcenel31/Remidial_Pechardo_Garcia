<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Auth;

class employeecontroller extends Controller
{
    public function index()
    {
        $employees = employee::all();
        return view ('employee.index', compact('employees'));
    }


    public function create()
    {
        return response()->view('employee.create');
    }


    public function store (Request $request) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required',
            'contact' => 'required',
        ]);
        employee::create($request->all());
        return redirect()->route('employee.index');
    }

    public function edit (Request $request, $id)
    {
        $employee = employee::findOrFail($id);
        return response()->view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dobirth' => 'required',
            'contact' => 'required',
        ]);

        $employee = employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    public function destroy(int $id){
        $employee = employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
