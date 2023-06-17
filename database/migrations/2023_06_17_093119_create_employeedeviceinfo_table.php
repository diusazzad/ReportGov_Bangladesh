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
        Schema::connection('reportgovbd')->create('employeedeviceinfo', function (Blueprint $table) {

            $table->foreignId('employee_deviceinfo')->constrained('employees');
            $table->ipAddress('ip_address');
            $table->string('user_region');
            $table->string('mobile_carrier');
            $table->string('device_model');
            $table->string('network_type');
            $table->string('screen_resolution');
            $table->string('operating_system');
            $table->string('app_name');
            $table->string('file_type');
            $table->text('keystroke_pattern');
            $table->string('audio_settings');
            $table->string('connected_audio_device');
            $table->string('login_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('employeedeviceinfo');
    }
};
