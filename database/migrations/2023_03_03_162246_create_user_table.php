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
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserId');
            $table->string('name',20);
            $table->string('family',30);
            $table->string('genderName',6)->default('Female');
            $table->string('picture')->default('public/assets/images/user.png');
            $table->string('address');
            $table->integer('age');
            $table->string('phone',11)->unique();
            $table->string('email',50)->unique();
            $table->boolean('is_superuser')->default(0);
            $table->boolean('is_staff')->default(0);
            $table->boolean('IsActive')->default(0);
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
};
