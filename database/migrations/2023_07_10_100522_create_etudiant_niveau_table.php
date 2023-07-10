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
        Schema::create('etudiant_niveau', function (Blueprint $table) {
            $table->id();
            $table->foreignId('niveau_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();

            $table->foreignId('etudiant_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnUpdate();

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_niveau');
    }
};
