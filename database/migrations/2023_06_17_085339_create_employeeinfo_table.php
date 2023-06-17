<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('reportgovbd')->create('employeeinfos', function (Blueprint $table) {
            $table->string('fullname');
            $table->foreignId('employee_infos')->constrained('employees');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('employeeinfo');
    }
};
