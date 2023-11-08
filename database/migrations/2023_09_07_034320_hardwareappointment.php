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
        Schema::create('hardware_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->references('id')->on('clients')->cascadeOnDelete();
            // $table->foreignId('fixer_id')->references('id')->on('fixers')->cascadeOnDelete()->nullable();
            $table->foreignId('fixer_id')->nullable()->constrained('fixers')->onDelete('cascade');
            $table->text('issue_description');
            $table->string('os');
            $table->string('brand');
            $table->string('image')->nullable();
            $table->dateTime('date_time');
            $table->enum('status', ['pending', 'on progress', 'postponed', 'cancelled', 'done'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_appointments');
    }
};
