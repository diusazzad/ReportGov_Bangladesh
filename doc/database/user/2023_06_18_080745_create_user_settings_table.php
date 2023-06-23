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
        Schema::connection('reportgovbd')->create('user_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('notification_new',['on','off']);
            $table->enum('notification_followers',['on','off']);
            $table->enum('notification_comments',['on','off']);
            $table->enum('notification_message',['on','off']);
            $table->foreignId('user_notification_setting')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('user_settings');
    }
};
