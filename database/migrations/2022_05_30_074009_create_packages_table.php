<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('categoryId', 50)->nullable();
            $table->string('title', 200)->nullable();
            $table->string('shortDescription',500)->nullable();
            $table->string('longDescription',2000)->nullable();
            $table->string('duration',500)->nullable();
            $table->string('bestTimeToVisit',500)->nullable();
            $table->string('whatYouWillGet',500)->nullable();
            $table->string('importantInformation',500)->nullable();
            $table->string('attraction',500)->nullable();
            $table->string('price',500)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('slug', 50)->nullable();
            $table->integer('sequence')->nullable();
            $table->string('metaTitle', 100)->nullable();
            $table->string('metaDiscription', 200)->nullable();
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
        Schema::dropIfExists('packages');
    }
}
