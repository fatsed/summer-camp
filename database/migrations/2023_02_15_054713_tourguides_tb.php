<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tourguides', function (Blueprint $table) {
            $table->id('TourGuideId');
            $table->string('TourGuideName',20);
            $table->string('TourGuideFamily',30);
            $table->string('TourGuideImg');
            $table->string('TourGuideAddress');
            $table->text('text')->default('hi');
            $table->string("TourGuideEmail",50)->unique();
            $table->string('genderName',6)->default('Female');
            $table->integer('TourGuideAge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourguides');
    }
};
