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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string("company");
            $table->string("departure_station");
            $table->string("arrival_station");
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->integer("train_id");
            $table->integer("wagons_number");
            $table->boolean("on_time");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
