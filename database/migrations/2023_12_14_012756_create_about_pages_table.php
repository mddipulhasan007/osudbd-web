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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('bdcmb_banner_img')->nullable();
            $table->text('bdcmb_show_hide')->nullable();
            $table->text('teams_show_hide')->nullable();
            $table->text('left_about_txt')->nullable();
            $table->text('total_projects_count')->nullable();
            $table->text('staff_members_count')->nullable();
            $table->text('running_project_count')->nullable();
            $table->text('dist_exp_count')->nullable();
            $table->string('about_img')->nullable();
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
        Schema::dropIfExists('about_pages');
    }
};
