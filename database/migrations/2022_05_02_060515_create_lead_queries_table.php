<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_queries', function (Blueprint $table) {
            
            $table->id();
            $table->string('leadType')->nullable();
            $table->string('customerName')->nullable();
            $table->string('email')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('address')->nullable();
            $table->string('noOfAdult')->nullable();
            $table->string('childWithBed')->nullable();
            $table->string('childWithNoBed')->nullable();
            $table->string('totalChild')->nullable();
            $table->string('noOfInfant')->nullable();
            $table->string('totalPAX')->nullable();
            $table->string('destination')->nullable();
            $table->string('arrivalDate')->nullable();
            $table->string('modeOfArrival')->nullable();
            $table->string('flight')->nullable();
            $table->string('modeOfTravel')->nullable();
            $table->string('categoryOfPkg')->nullable();
            $table->string('hotelCategory')->nullable();
            $table->string('foodPlan')->nullable();
            $table->string('totalTourBudget')->nullable();
            $table->string('durationOfStay')->nullable();
            $table->string('additionalFacility')->nullable();
            $table->string('remark')->nullable();
            $table->string('TAT')->nullable();
            $table->dateTime('createdAt')->nullable();
            $table->string('createdBy')->nullable();
            $table->dateTime('updatedAt')->nullable();
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
        Schema::dropIfExists('lead_queries');
    }
}
