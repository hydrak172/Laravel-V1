<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->float('price')->nullable()->unsigned();
            $table->float('discount_price')->nullable()->unsigned();
            $table->text('short_description')->nullable();
            $table->integer('qty')->unsigned();
            // tao foreignkey b1
            // $table->bigInteger('product_category_id')->unsigned();
            $table->unsignedBigInteger('product_category_id');
            // // //foreign key b2
            $table->foreign('product_category_id')->references('id')->on('product_category');
            $table->string('shipping',512)->nullable();
            $table->float('weight')->nullable();
            $table->text('description')->nullable();
            $table->text('information')->nullable();
            $table->string('images_url',255)->nullable();
            $table->string('status',255)->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
