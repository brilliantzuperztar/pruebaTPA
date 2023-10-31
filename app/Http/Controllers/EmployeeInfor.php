<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeInfo;
use Illuminate\Support\Facades\DB;

class EmployeeInfor extends Controller
{
    public function index() {
    
        $eInfo = EmployeeInfo::all();
        return view("pages/roles", compact("eInfo"));
    }
}
