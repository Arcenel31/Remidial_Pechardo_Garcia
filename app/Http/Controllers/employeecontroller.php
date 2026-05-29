<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        return view ('employee.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
    //
    }

    public function edit( int $id)
    {
        //
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
