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
        Schema::create('chars_new', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->unsignedMediumInteger('hp')->default(10);
            $table->unsignedMediumInteger('mp')->default(5);
            $table->unsignedSmallInteger('attack_power')->default(2);
            $table->unsignedSmallInteger('def_power')->default(1);
            $table->unsignedInteger('exp')->default(1);
            $table->unsignedBigInteger('fraction_id')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('race_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('fraction_id')->references('id')->on('fractions')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        $chars = DB::table('chars')->orderBy('id')->get();
        foreach ($chars as $char) {
            DB::table('chars_new')->insert((array)$char);
        }

        Schema::dropIfExists('chars');

        Schema::rename('chars_new', 'chars');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('chars_old', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->unsignedMediumInteger('hp')->default(10);
            $table->unsignedMediumInteger('mp')->default(5);
            $table->unsignedSmallInteger('attack_power')->default(2);
            $table->unsignedSmallInteger('def_power')->default(1);
            $table->unsignedInteger('exp')->default(1);
            $table->unsignedBigInteger('fraction_id')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('race_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('fraction_id')->references('id')->on('fractions')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->timestamps();
        });

        $chars = DB::table('chars')->orderBy('id')->get();
        foreach ($chars as $char) {
            DB::table('chars_old')->insert((array)$char);
        }

        Schema::dropIfExists('chars');

        Schema::rename('chars_old', 'chars');
    }
};
