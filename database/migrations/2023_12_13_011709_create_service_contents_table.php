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
        Schema::create('service_contents', function (Blueprint $table) {
            $table->id();
            $table->text('fire_protect_system')->nullable();
            $table->text('hvac_system')->nullable();
            $table->text('electrical_solu')->nullable();
            $table->text('middle_title_txt')->nullable();
            $table->string('service_img')->nullable();
            $table->text('plumbing_service')->nullable();
            $table->text('elevator_escalator')->nullable();
            $table->text('safety_consult')->nullable();
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
        Schema::dropIfExists('service_contents');
    }
};
