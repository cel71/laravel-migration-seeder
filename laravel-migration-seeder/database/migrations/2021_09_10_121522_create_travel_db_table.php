<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelDbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->text('cover');
            $table->string('location', 255);
            $table->string('hotel', 255);
            $table->text('description');
            $table->integer('duration');
            $table->date('departure');
            $table->date('arrive');
            $table->string('boarding airport', 255);
            $table->double('price', 3, 2);
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
        Schema::dropIfExists('travel_db');
    }
}
