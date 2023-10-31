<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EmployeeInfo extends Model
{
    use HasFactory;

    protected $table = 'employeeinfo';

    public function employee() {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function position() {
        return $this->belongsTo(Position::class,'id_position');
    }

    public function leader() {
        return $this->belongsTo(Employee::class,'id_leader');
    }
}
