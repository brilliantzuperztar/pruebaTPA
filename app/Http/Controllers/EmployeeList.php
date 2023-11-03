<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeList extends Controller
{
    
    public function view() 
    {
        if ($user = Auth::user())
        {  
            $employees = Employee::all();
            return view("pages/employees", compact("employees", "user"));
        }
        
        return view("auth/login");
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
        $employee->country = $request->country;
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
        if ($request->isMethod('PUT'))
        {
            $employee = Employee::findOrfail($request->input("id"));
            
            $employee->name = $request->input("name");
            $employee->lastname = $request->input("lastname");
            $employee->identification = $request->input("identification");
            $employee->address = $request->input("address");
            $employee->country = $request->input("country");
            $employee->city = $request->input("city");
            $employee->number = $request->input("number");
            $employee->administrator = $request->input("administrator");
            $employee->save();

            return $employee;
        }
        
        
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
