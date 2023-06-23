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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('infos')->nullable()->default(0);
            $table->unsignedBigInteger('deviceinfo')->nullable()->default(0);
            $table->unsignedBigInteger('tasks')->nullable()->default(0);
            $table->unsignedBigInteger('notification_setting')->nullable()->default(0);
            $table->unsignedBigInteger('external_accounts')->nullable()->default(0);
            $table->unsignedBigInteger('profiles')->nullable()->default(0);
            $table->unsignedBigInteger('relationships')->nullable()->default(0);
            $table->unsignedBigInteger('posts')->nullable()->default(0);
            $table->unsignedBigInteger('post_favorites')->nullable()->default(0);
            $table->unsignedBigInteger('post_comments')->nullable()->default(0);
            $table->unsignedBigInteger('post_stats')->nullable()->default(0);
            $table->unsignedBigInteger('tags')->nullable()->default(0);
            $table->unsignedBigInteger('post_tags')->nullable()->default(0);
            $table->unsignedBigInteger('post_categories')->nullable()->default(0);
            $table->unsignedBigInteger('categories')->nullable()->default(0);
            $table->unsignedBigInteger('user_locations')->nullable()->default(0);

            $table->unsignedBigInteger('division')->nullable()->default(0);

            $table->tinyInteger('role')->default(0);

            // add indexes
            $table->index('infos');
            $table->index('deviceinfo');
            $table->index('tasks');
            $table->index('notification_setting');
            $table->index('external_accounts');


        });;

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('reportgovbd')->dropIfExists('users');
    }
};
