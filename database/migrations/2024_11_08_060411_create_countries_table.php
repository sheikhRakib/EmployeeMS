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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 255);
            $table->string('iso3', length: 3);
            $table->string('iso2', length: 2);
            $table->string('phone_code', length: 30);
            $table->string('currency', length: 10);
            $table->string('currency_symbol', length: 255);
            $table->string('flag', length: 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
