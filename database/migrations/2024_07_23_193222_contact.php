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
        Schema::create('contactss', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->integer('number-phone');
            $table->longText('content');
            $table->char('email');
            $table->char('subject');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->integer('price');
            $table->longText('discription');
            $table->float('stars');
            $table->float('with');
            $table->float('length');
            $table->float('discust');
            $table->boolean('garant');
            $table->timestamp('failed_at')->useCurrent();
        });

        // Schema::create('USERES', function (Blueprint $table) {
        //     $table->id()->primary();
        //     $table->string('full_name');
        //     $table->integer('number');
        //     $table->char('email');
        //     $table->integer('cart_number');
        //     $table->dateTime('birthday');
        //     $table->char('password');
        //     $table->char('image');
        //     $table->integer('home_number');
        //     $table->timestamp('failed_at')->useCurrent();
        // });

        Schema::create('adresses', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('ostan');
            $table->char('tahvil');
            $table->char('adress');
            $table->integer('number');
            $table->integer('post_number');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->boolean('status');
            $table->longText('content');
            $table->char('email');
            $table->char('image');
            $table->timestamp('failed_at')->useCurrent();
        });


        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title');
            $table->longText('content');
            $table->char('image');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('blog_categorys', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
        // Schema::dropIfExists('USER');
        Schema::dropIfExists('blog');
        Schema::dropIfExists('blog_category');
        Schema::dropIfExists('comment');
        Schema::dropIfExists('product');
        Schema::dropIfExists('adresses');
    }
};
