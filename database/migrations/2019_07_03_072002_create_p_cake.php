<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePCake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('p_cakes', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->string('p_names');
            $table->integer('p_prices');
            $table->string('p_shapes');
            $table->string('p_colors');
            $table->string('p_categories');
            $table->string('flavours');
            $table->string('styles');
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
        Schema::dropIfExists('p_cakes');
    }
}
