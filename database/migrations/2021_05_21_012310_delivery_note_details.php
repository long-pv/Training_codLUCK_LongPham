<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliveryNoteDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('delivery_notes_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('delivery_note_id');
            $table->integer('product_id');
            $table->integer('user_id');
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
