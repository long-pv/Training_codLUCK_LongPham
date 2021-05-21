<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('email',20)->nullable();
            $table->string('password',10)->nullable();
            $table->text('avatar')->nullable();
            $table->string('first_name',20)->nullable();
            $table->string('last_name',20)->nullable();
            $table->date('birthday');
            $table->boolean('gender')->default(1);
            $table->text('address')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->softDeletes();     
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
