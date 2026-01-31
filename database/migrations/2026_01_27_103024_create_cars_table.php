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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->constrained()->cascadeOnDelete();
            $table->string('model');
            $table->string('kuzow');
            $table->string('color')->nullable();
            $table->string('status_id')->constrained()->cascadeOnDelete();
            $table->integer('year');
            $table->string('transmission')->nullable();
            $table->string('drive');
            $table->float('motor');
            $table->boolean('is_new')->nullable();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
