<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('weapons', function (Blueprint $table) {
            $table->unsignedBigInteger('char_id')->nullable();
            $table->foreign('char_id')->references('id')->on('chars')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('weapons_new', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedSmallInteger('power');
            $table->foreignId('attack_rates_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Копируем данные из старой таблицы в новую
        $weapons = DB::table('weapons')->select('id', 'name', 'power', 'attack_rates_id', 'image', 'created_at', 'updated_at')->get();
        foreach ($weapons as $weapon) {
            DB::table('weapons_new')->insert((array)$weapon);
        }


        Schema::dropIfExists('weapons');

        Schema::rename('weapons_new', 'weapons');

    }
};
