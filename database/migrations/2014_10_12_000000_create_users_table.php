<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->boolean('emailverified')->default(false);
            $table->string('password');
            $table->string('name');
            $table->string('website')->nullable();
            $table->string('phonenumber')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->timestamp('lastlogin')->nullable();
            $table->unsignedInteger('language_id')->nullable();

            $table->morphs('userable');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
