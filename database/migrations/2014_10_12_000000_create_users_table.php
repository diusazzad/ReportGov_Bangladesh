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

            $table->unsignedBigInteger('infos');
            $table->unsignedBigInteger('deviceinfo');
            $table->unsignedBigInteger('tasks');
            $table->unsignedBigInteger('notification_setting');
            $table->unsignedBigInteger('external_accounts');
            $table->unsignedBigInteger('profiles');
            $table->unsignedBigInteger('relationships');
            $table->unsignedBigInteger('posts');
            $table->unsignedBigInteger('post_favorites');
            $table->unsignedBigInteger('post_comments');
            $table->unsignedBigInteger('post_stats');
            $table->unsignedBigInteger('tags');
            $table->unsignedBigInteger('post_tags');
            $table->unsignedBigInteger('post_categories');
            $table->unsignedBigInteger('categories');
            $table->unsignedBigInteger('user_locations');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // add index
            $table->index('infos');  //left join with userdeviceinfo
            $table->index('deviceinfo');
            $table->index('tasks');
            $table->index('notification_setting');
            $table->index('external_accounts');


            // foriegn key
            // $table->foreignId('division_id')->constrained('divisions');
        });

        // $users = DB::table('users')
        // ->leftJoin('userdeviceinfo', 'users.infos', '=', 'userdeviceinfo.user_deviceinfo')
        // ->get();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('users');
    }
};
