<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('reportgovbd')->create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });


        // Create the "contacts" table
        Schema::connection('reportgovbd')->create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Create the "orders" table
        Schema::connection('reportgovbd')->create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        //------------------------- Task Management*****************************************

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('taskcreator_id');
            $table->foreignId('assigneduser_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->dateTime('due');
            $table->boolean('completed');
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id');
            $table->foreignId('user_id');
            $table->text('body');
            $table->timestamps();
        });
        //------------------------- Task Management **********************************



        Schema::connection('reportgovbd')->create('userdeviceinfo', function (Blueprint $table) {



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

            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::connection('reportgovbd')->create('userdailytask', function (Blueprint $table) {

            $table->string('title');
            $table->text('description');
            $table->boolean('completed')->default(false);
            $table->timestamps();

            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::connection('reportgovbd')->create('user_settings', function (Blueprint $table) {

            $table->enum('notification_new', ['on', 'off']);
            $table->enum('notification_followers', ['on', 'off']);
            $table->enum('notification_comments', ['on', 'off']);
            $table->enum('notification_message', ['on', 'off']);

            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::connection('reportgovbd')->create('user_externalaccounts', function (Blueprint $table) {

            $table->ipAddress('facebook_email');
            $table->ipAddress('twitter_email');

            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::connection('reportgovbd')->create('userinfo', function (Blueprint $table) {


            $table->integer('name');

            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('users');
    }
};
