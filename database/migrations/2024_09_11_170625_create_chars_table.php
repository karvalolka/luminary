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
        Schema::create('chars', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->unsignedMediumInteger('hp');
            $table->unsignedMediumInteger('mp');
            $table->unsignedSmallInteger('attack_power');
            $table->unsignedSmallInteger('def_power');
            $table->unsignedInteger('exp');
            $table->unsignedBigInteger('fraction_id')->nullable();
            $table->foreign('fraction_id')->references('id')->on('fractions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chars');
    }
};
