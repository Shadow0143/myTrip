<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('module_name');
            $table->string('slug');
            $table->integer('pages_id');
            $table->string('banner_image');
            $table->string('image');
			$table->longText('description');
            $table->string('is_header');
            $table->string('is_footer');
            $table->integer('status');
            $table->integer('sequence');
            $table->text('meta_title');
            $table->longText('meta_description');
            $table->longText('meta_keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
