<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('websiteName', 200)->nullable();
            $table->string('websiteURL', 200)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('contactNumber', 50)->nullable();
            $table->string('contactNumber2', 200)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('logo', 200)->nullable();
            $table->string('title', 200)->nullable();
            $table->string('description', 500)->nullable();
            $table->string('favicon', 200)->nullable();
            $table->string('facebookLink', 200)->nullable();
            $table->string('twitterLink', 200)->nullable();
            $table->string('instagramLink', 200)->nullable();
            $table->string('linkedinLink', 200)->nullable();
            $table->string('status', 50)->nullable();
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
        Schema::dropIfExists('settings');
    }
}
