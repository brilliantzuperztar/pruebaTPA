<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employeeinfo', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_employee')
                ->nullable()            
                ->constrained('employees')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->foreignId('id_position')
                ->nullable()
                ->constrained('positions')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->foreignId('id_leader')
                ->nullable()
                ->constrained('employees')
                ->cascadeOnDelete()
                ->nullOnDelete();

            $table->string('role')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeeinfo');
    }
};
