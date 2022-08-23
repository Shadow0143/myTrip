<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('packageId', 50)->nullable();
            $table->string('title', 200)->nullable();
            $table->string('shortDescription',500)->nullable();
            $table->string('longDescription',2000)->nullable();
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
        Schema::dropIfExists('add_hotels');
    }
}
