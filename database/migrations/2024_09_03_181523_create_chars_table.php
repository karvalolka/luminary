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
        Schema::create('char', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->unsignedTinyInteger('уровень');
            $table->unsignedMediumInteger('ХП');
            $table->unsignedMediumInteger('МП');
            $table->unsignedSmallInteger('атака');
            $table->unsignedSmallInteger('защита');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('char');
    }
};
