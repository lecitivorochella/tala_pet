<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furparents', function (Blueprint $table) {
            $table->id();
            $table->string('furparent_name');
            $table->bigInteger('breed_id')->unsigned();
            $table->date('adoption_date');
            $table->foreign('breed_id')->references('id')->on('breeds');
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
        Schema::dropIfExists('furparents');
    }
};
