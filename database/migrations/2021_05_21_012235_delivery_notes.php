<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliveryNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_delivery_note');
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->decimal('total',5,2)->nullable();
            $table->unsignedInteger('delivery_price')->nullable();
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
