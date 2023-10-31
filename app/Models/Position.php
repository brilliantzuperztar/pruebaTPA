<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    public function employeeInfo() {
        return $this->hasMany(EmployeeInfo::class, 'id');
    }
}
