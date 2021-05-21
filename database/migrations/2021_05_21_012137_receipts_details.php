<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReceiptsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('receipts_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receipt_id');
            $table->integer('product_id');
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->bigInteger('tax')->nullable();
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
