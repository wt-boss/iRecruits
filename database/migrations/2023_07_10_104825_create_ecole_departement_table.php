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
        Schema::create('ecole_departement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ecole_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();

            $table->foreignId('departement_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecole_departement');
    }
};
