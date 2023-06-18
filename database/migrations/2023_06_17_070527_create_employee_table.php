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
        Schema::connection('reportgovbd')->create('employees', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('infos');
            $table->unsignedBigInteger('deviceinfo');
            $table->unsignedBigInteger('tasks');

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();


            // add index
            $table->index('id');
            // foreign id


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('employee');
        Schema::connection('reportgovbd')->dropIfExists('employees');
    }
};
