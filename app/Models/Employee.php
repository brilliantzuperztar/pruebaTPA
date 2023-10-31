<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';


    public function employeeInfo() {
        return $this->hasMany(EmployeeInfo::class, 'id');
    }
}
