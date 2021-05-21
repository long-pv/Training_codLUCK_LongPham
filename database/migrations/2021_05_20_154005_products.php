<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->string('slug',50)->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->text('photo')->nullable();
            $table->integer('category_id');
            $table->smallInteger('sale_off')->nullable();
            $table->integer('user_id');
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
        //
    }
}
