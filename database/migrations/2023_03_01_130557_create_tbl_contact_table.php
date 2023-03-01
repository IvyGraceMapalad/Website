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
        Schema::create('tbl_contact', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('head');
            $table->string('body');
            $table->string('email');
            $table->string('email1');
            $table->string('emailTitle');
            $table->string('btn1');
            $table->string('number');
            $table->string('table');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contact');
    }
};
