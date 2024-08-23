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




        Schema::create('blogCategorys', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->unsignedBigInteger('parent');
            $table->timestamps();
        });


        Schema::create('productCategoys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent');
            $table->timestamps();
        });


        Schema::create('blogCategorys_blog', function (Blueprint $table) {

            $table->unsignedBigInteger('blogCategory_id');
            $table->foreign('blogCategory_id')->references('id')->on('blogCategorys')->onDelete('cascade');
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->primary(['blogCategory_id','blog_id']);



        });


        Schema::create('productCategoys_product', function (Blueprint $table) {

            $table->unsignedBigInteger('productCategoy_id');
            $table->foreign('productCategoy_id')->references('id')->on('productCategoys')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->primary(['productCategoy_id','product_id']);



        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('categoys');
        // Schema::dropIfExists('blogCategory');
    }
};
