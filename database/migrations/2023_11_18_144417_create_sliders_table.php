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
        Schema::create('sliders', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary(); // Remove auto-increment
            $table->string('image_path')->nullable();
            $table->string('caption_title')->nullable();
            $table->string('main_title')->nullable();
            $table->string('contact_url')->nullable();
            $table->string('services_url')->nullable();
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
        Schema::dropIfExists('sliders');
    }
};
