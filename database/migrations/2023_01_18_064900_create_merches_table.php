<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merches', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("describe");
            $table->string("nameMainPhoto");
            $table->string("namePhoto1");
            $table->string("namePhoto2");

            $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('merches');
    }
}
