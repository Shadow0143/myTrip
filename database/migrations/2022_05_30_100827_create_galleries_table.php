<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('packageId', 50)->nullable();
            $table->string('hotelId', 50)->nullable();
            $table->string('sectionId', 50)->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('title', 200)->nullable();
            $table->string('description',500)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('url', 200)->nullable();
            $table->string('status', 50)->nullable();
            $table->integer('sequence')->nullable();
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
        Schema::dropIfExists('galleries');
    }
}
