<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraticaTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratica_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pratica_id');
            $table->foreign('pratica_id')->references('id')
                    ->on('pratica')->onDelete('cascade');
        
            $table->integer('tag_id');
            $table->foreign('tag_id')->references('id')
                    ->on('tag')->onDelete('cascade');
        
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
        Schema::dropIfExists('pratica_tag');
    }
}
