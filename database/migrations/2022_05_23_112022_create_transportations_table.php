<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->string('enqueryId', 50)->nullable();
            $table->string('vehicaleType', 200)->nullable();
            $table->string('vehicaleName', 200)->nullable();
            $table->string('pickUpDate', 200)->nullable();
            $table->string('pickUpLocation', 200)->nullable();
            $table->string('dropDate', 200)->nullable();
            $table->string('dropLocation', 200)->nullable();
            $table->string('commnet', 200)->nullable();
            $table->string('day', 20)->nullable();
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
        Schema::dropIfExists('transportations');
    }
}
