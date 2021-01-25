<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dateofbirth');
            $table->string('title');
            $table->bigInteger('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('address');
            $table->text('about');
            $table->string('image', 255)->default('avatar.jpg');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
