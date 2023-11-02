<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\EmployeeInfo;
use App\Models\Position;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeePositions extends Controller
{
    public function view() 
    {
        if($user = Auth::user())
        {
            $positions = EmployeeInfo::all();
            $roles = Position::all();
            $employees = Employee::all();
            return view("pages/roles", compact("positions", "user", "roles", "employees"));
        }
        return view("auth/login"); 
    }

      /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $positions = EmployeeInfo::all();
        return $positions;
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $positions = new EmployeeInfo();
        $positions->id_employee = $request->id_employee;
        $positions->id_position = $request->id_position;
        $positions->id_leader = $request->id_leader;
        $positions->role = $request->role;

        $positions->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $positions = EmployeeInfo::find($id);
        return $positions;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $positions = EmployeeInfo::findOrfail($request->id);

        $positions->id_employee = $request->id_employee;
        $positions->id_position = $request->id_position;
        $positions->id_leader = $request->id_leader;
        $positions->role = $request->role;
        
        $positions->save();
        return $positions;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $positions = EmployeeInfo::destroy($id);
        return $positions;
    }
}
