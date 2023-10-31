<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeInfo;
use App\Models\Position;
use Illuminate\Database\Seeder;

class EmployeeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Position::factory()->count(15)->create();
        Employee::factory()->count(15)->create();
        EmployeeInfo::factory(10)->has(Position::factory()->count(10))->has(Employee::factory()->count(10))->create();     

        /*EmployeeInfo::insert([
            [
                'id_employee' => rand(1, 4),
                'id_position' => rand(1, 4),
                'id_leader' => rand(1, 4),
                'role' => 'Colaborador(a)'
            ],
            [
                'id_employee' => rand(1, 4),
                'id_position' => rand(1, 4),
                'id_leader' => rand(1, 4),
                'role' => 'Colaborador(a)'
                
            ],
            [
                'id_employee' => rand(1, 4),
                'id_position' => rand(1, 4),
                'id_leader' => rand(1, 4),
                'role' => 'Colaborador(a)'
                
            ],
            [
                'id_employee' => rand(1, 4),
                'id_position' => rand(1, 4),
                'id_leader' => rand(1, 4),
                'role' => 'Jefe'
                
            ],
        ]);*/
    }
}
