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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('about_txt')->nullable();
            $table->string('s_menu_url1')->nullable();
            $table->string('s_menu_url2')->nullable();
            $table->string('s_menu_url3')->nullable();
            $table->string('s_menu_url4')->nullable();
            $table->string('s_menu_url5')->nullable();
            $table->string('s_menu_url6')->nullable();
            $table->text('copyright_txt')->nullable();
            $table->string('foo_menu_url1')->nullable();
            $table->string('foo_menu_url2')->nullable();
            $table->string('foo_menu_url3')->nullable();
            $table->string('foo_menu_url4')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
