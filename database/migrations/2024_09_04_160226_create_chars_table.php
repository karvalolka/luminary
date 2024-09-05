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
            $table->unsignedTinyInteger('level');
            $table->unsignedMediumInteger('hp');
            $table->unsignedMediumInteger('mp');
            $table->unsignedSmallInteger('attack');
            $table->unsignedSmallInteger('def');
            $table->unsignedInteger('exp');
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
