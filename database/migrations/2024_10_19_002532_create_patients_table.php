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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('last_name', 25);
            $table->string('middle_name', 25);
            $table->string('gender', 20);
            $table->date('birthdate');
            $table->text('allergies', 100)->nullable();
            $table->text('medical_history', 100)->nullable();
            $table->decimal('weight', 5, 2);
            $table->decimal('height', 5, 2);
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
