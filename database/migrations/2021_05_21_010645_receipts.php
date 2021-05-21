<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receipts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //receipts
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_receipt');
            $table->integer('supplier_id')->nullable();
            $table->integer('user_id');
            $table->decimal('total',5,2);
            $table->string('note')->nullable();
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
