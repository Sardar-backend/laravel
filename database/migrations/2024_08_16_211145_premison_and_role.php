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

        Schema::create('permisons', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('lable')->nullable();
            $table->timestamp('expired_at');


        });

        Schema::create('permison_user', function (Blueprint $table) {

            $table->unsignedBigInteger('permison_id');
            $table->foreign('permison_id')->references('id')->on('permisons')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['permison_id','user_id']);



        });

        Schema::create('roles', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('lable')->nullable();
            $table->timestamp('expired_at');


        });

        Schema::create('permison_role', function (Blueprint $table) {

            $table->unsignedBigInteger('permison_id');
            $table->foreign('permison_id')->references('id')->on('permisons')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->primary(['permison_id','role_id']);



        });

        Schema::create('role_user', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->primary(['user_id','role_id']);



        });













    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('permisons');
        // Schema::dropIfExists('permison_user');
        // Schema::dropIfExists('roles');
        // Schema::dropIfExists('permison_role');
        // Schema::dropIfExists('role_user');

    }
    };
