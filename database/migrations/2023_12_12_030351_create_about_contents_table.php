<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->text('left_about_txt')->nullable();
            $table->string('read_more_text')->nullable();
            $table->string('read_more_url')->nullable();
            $table->string('bottom_text_1')->nullable();
            $table->string('bottom_text_2')->nullable();
            $table->string('bottom_text_3')->nullable();
            $table->string('bottom_text_4')->nullable();
            $table->text('right_values_txt')->nullable();
            $table->string('safety_text')->nullable();
            $table->text('safety_txt')->nullable();
            $table->string('service_text')->nullable();
            $table->text('service_txt')->nullable();
            $table->string('integrity_text')->nullable();
            $table->text('integrity_txt')->nullable();
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
        Schema::dropIfExists('about_contents');
    }
};
