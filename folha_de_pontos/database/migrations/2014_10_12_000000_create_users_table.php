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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf')->unique();
            $table->biginteger('matricula')->nullable();
            $table->string('photo', 555)->nullable();
            $table->integer('role');
            $table->boolean('active')->default(true);
            $table->integer('auto_register');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->foreign('business_id')->references('id')->on('business');
            $table->unsignedBigInteger('positions_id');
            $table->foreign('positions_id')->references('id')->on('positions');
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
