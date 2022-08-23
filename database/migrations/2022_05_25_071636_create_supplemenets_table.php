<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplemenetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplemenets', function (Blueprint $table) {
            $table->id();
            $table->string('enqueryId', 50)->nullable();
            $table->string('details', 200)->nullable();
            $table->date('dateOfService')->nullable();
            $table->string('location', 200)->nullable();
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
        Schema::dropIfExists('supplemenets');
    }
}
