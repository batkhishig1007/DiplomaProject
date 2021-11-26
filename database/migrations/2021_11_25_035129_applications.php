<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Applications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->unsignedBigInteger('post_id')->nullable()->default(null);
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->boolean('is_closed')->default(false);
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
        Schema::dropIfExists('applications');
    }
}