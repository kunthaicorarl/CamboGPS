<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
   
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tourism_id')->unsigned();
            $table->string('name')->unique();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('caption')->nullable();
            $table->string('url')->nullable();
            $table->string('alt_text')->nullable();
            $table->foreign('tourism_id')->references('id')->on('tourism')
             ->onUpdate('cascade')->onDelete('cascade');
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
         Schema::dropIfExists('images');
    }
}
