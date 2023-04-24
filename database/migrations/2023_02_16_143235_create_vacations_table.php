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
        Schema::create('vacations', function (Blueprint $table) {
            $table->id('TravelId');
            $table->string('title');
            $table->string('TravelAddress');
            $table->string('price');
            $table->integer("discount_trip");
            $table->integer('it_takes_day');
            $table->date('departure_date');
            $table->string('TravelPicture');
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
        Schema::dropIfExists('vacations');
    }
};
