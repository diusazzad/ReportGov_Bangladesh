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
        Schema::connection('reportgovbd')->create('external_accounts', function (Blueprint $table) {
            $table->integer('user_id');
            $table->ipAddress('facebook_email');
            $table->ipAddress('twitter_email');
            $table->foreignId('user_external_account')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('external_accounts');
    }
};
