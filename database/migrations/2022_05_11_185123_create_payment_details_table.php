<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('payment_details')){
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('enqueryId', 50)->nullable();
            $table->string('isAdvanceRecived', 50)->nullable();
            $table->string('conformationMailSent', 50)->nullable();
            $table->string('conformationMailSentOn', 50)->nullable();
            $table->string('conformationSmsSent', 50)->nullable();
            $table->string('ammountRecived', 50)->nullable();
            $table->string('accountsComment', 50)->nullable();
            $table->string('subject', 200 )->nullable();
            $table->string('emailBody', 5000 )->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('createdBy')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updatedBy')->nullable();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_details');
    }
}
