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
            $table->timestamps();

            $table->bigInteger("merch_id");

            $table->softDeletes();
           // $table->bigInteger("merch_id")->nullable();
           // $table->index("merch_id","orders_merch_idx");
           // $table->foreign("merch_id","orders_merch_fk")->on("merches")->references("id");

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
