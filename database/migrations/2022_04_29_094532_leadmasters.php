<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Leadmasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadmasters', function (Blueprint $table) {
            // $table->id();
            // $table->string('enqueryID', 50)->nullable();
            // $table->date('journeyDate')->nullable();
            // $table->string('name', 50)->nullable();
            // $table->string('email', 50)->nullable();
            // $table->string('contactNo', 20)->nullable();
            // $table->string('leadSource', 50)->nullable();
            // $table->string('leadType', 50)->nullable();
            // $table->string('status', 20)->nullable();
            // $table->string('history', 4000)->nullable();
            // $table->string('empfeedback', 4000)->nullable();
            // $table->string('leadRank', 10)->nullable();
            // $table->string('Assign', 200)->nullable();
            // $table->string('URL', 850)->nullable();
            // $table->string('createdBy', 50)->nullable();
            // $table->date('createdAt')->nullable();
            // $table->string('updatedBy', 50)->nullable();
            // $table->date('updatedAt')->nullable();


            $table->id();
            $table->string('enqueryId', 50)->nullable();
            $table->string('leadType', 50)->nullable();
            $table->string('customerName', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('contactNumber', 20)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('noOfAdult', 20)->nullable();
            $table->string('childWithBed', 20)->nullable();
            $table->string('childWithNoBed', 20)->nullable();
            $table->string('totalChild', 20)->nullable();
            $table->string('noOfInfant', 20)->nullable();
            $table->string('totalPAX', 20)->nullable();
            $table->string('destination', 200)->nullable();
            $table->date('jurneyDate')->nullable();
            $table->string('modeOfArrival', 50)->nullable();
            $table->string('flight', 50)->nullable();
            $table->string('modeOfTravel', 50)->nullable();
            $table->string('categoryOfPkg', 50)->nullable();
            $table->string('hotelCategory', 50)->nullable();
            $table->string('foodPlan', 50)->nullable();
            $table->string('totalTourBudget', 50)->nullable();
            $table->string('durationOfStay', 50)->nullable();
            $table->string('additionalFacility', 200)->nullable();
            $table->string('remark', 200)->nullable();
            $table->string('leadSource', 50)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('history', 4000)->nullable();
            $table->string('empfeedback', 4000)->nullable();
            $table->string('leadRank', 10)->nullable();
            $table->string('assignTo', 200)->nullable();
            $table->string('URL', 850)->nullable();
            $table->string('TAT')->nullable();
            $table->string('cp', 20)->nullable();
            $table->string('sp', 20)->nullable();
            $table->string('gst', 20)->nullable();
            $table->string('sp+gst', 20)->nullable();
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
        Schema::dropIfExists('leadmasters');
    }
}
