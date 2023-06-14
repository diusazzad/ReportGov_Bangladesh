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
        Schema::create('upazilas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('district_id');  // corresponds to ['district_id' => '01', ...]
            $table->unsignedBigInteger('division_id'); // Add the 'division_id' column
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('division_id')->references('id')->on('divisions'); // Add foreign key constraint for 'division_id'
            $table->string('name');
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upazilas');
    }
};
