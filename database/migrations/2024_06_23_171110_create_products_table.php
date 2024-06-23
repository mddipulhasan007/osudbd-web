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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('feature_image')->nullable();
            $table->string('squ_no')->nullable();
            $table->string('qty')->nullable();
            $table->string('company_name')->nullable();
            $table->decimal('regular_price', 8, 2)->nullable();
            $table->decimal('offer_price', 8, 2)->nullable();
            $table->decimal('offer_percent', 5, 2)->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->foreign('type_id')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
