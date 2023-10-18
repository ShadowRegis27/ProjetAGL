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
        Schema::create('Commentaire', function (Blueprint $table) {

            $table->unsignedBigInteger('id_Incident');
            $table->foreign('id_Incident')
                ->references('id_Incident')
                ->on('Incident')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_Equipement');
            $table->foreign('id_Equipement')
                ->references('id_Equipement')
                ->on('Equipement')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->String('contenu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Commentaire');
    }
};
