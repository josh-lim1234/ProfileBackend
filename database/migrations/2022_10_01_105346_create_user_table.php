<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name')->nullable();
            $table->string('occupation')->nullable();
            $table->string('prior_exp1')->nullable();
            $table->string('prior_exp2')->nullable();
            $table->string('prior_exp3')->nullable();
            $table->string('interest1')->nullable();
            $table->string('interest2')->nullable();
            $table->string('interest3')->nullable();
            $table->string('email')->unique();
            $table->string('mtgobj1');
            $table->string('mtgobj2')->nullable();
            $table->string('mtgobj3')->nullable();
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
};
