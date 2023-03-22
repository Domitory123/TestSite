<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table)
        {
            $table->id();
            $table->string('name_user');
            $table->string('email');
            $table->string('delivery_address');
            $table->string('phone_number');
            $table->string('comment');
            $table->string('status')->nullable();
            $table->bigInteger("merch_id")->constrained();
            
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
        Schema::dropIfExists('orders');
    }
}
