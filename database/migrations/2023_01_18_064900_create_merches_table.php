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
            $table->string("name_main_photo");
            $table->string("name_photo_1");
            $table->string("name_photo_2");
            $table->bigInteger("сategory_id")->constrained("categories");

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
