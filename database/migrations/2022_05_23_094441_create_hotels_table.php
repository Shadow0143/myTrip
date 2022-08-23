<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('enqueryId', 50)->nullable();
            $table->string('hotelName', 200)->nullable();
            $table->string('noOfRooms', 200)->nullable();
            $table->string('CWB', 200)->nullable();
            $table->string('CNB', 200)->nullable();
            $table->string('hotelLocation', 200)->nullable();
            $table->string('roomType', 200)->nullable();
            $table->string('contactInfo', 200)->nullable();
            $table->string('checkIn', 200)->nullable();
            $table->string('checkOut', 200)->nullable();
            $table->string('mealPlan', 200)->nullable();
            $table->string('mealType', 200)->nullable();
            $table->string('comment', 200)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('costPrice', 200)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('createdBy')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updatedBy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
