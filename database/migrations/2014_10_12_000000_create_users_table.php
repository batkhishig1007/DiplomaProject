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
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('rd');
            $table->string('email');
            $table->string('phone');
            $table->date('birthday')->nullable()->default(null);
            $table->enum('gender',['male','female','undefined'])->default('undefined');
            $table->enum('admin_type',['operator','admin','undefined'])->default('undefined');
            $table->unsignedBigInteger('apartment_id')->nullable()->default(null);
            $table->string('address');
            $table->boolean('is_active');
            $table->dateTime('last_logined')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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