<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeList extends Controller
{
    
    public function view() 
    {
        $employees = Employee::all();
        return view("pages/employees", compact("employees"));
    }
    
    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $employees = Employee::all();
        return $employees;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->identification = $request->identification;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->number = $request->number;
        $employee->administrator = $request->administrator;

        $employee->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrfail($request->id);

        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->identification = $request->identification;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->number = $request->number;
        $employee->administrator = $request->administrator;
        
        $employee->save();
        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::destroy($id);
        return $employee;
    }
}
