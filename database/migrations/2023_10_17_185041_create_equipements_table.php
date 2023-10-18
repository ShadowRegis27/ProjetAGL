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
        Schema::create('prioriteincidents', function (Blueprint $table) {
            $table->bigIncrements('id_prioriteincident');
            $table->String('nom_prioriteincident');
            $table->String('descriptionprioriteincident');
            $table->String('localisationprioriteincident');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prioriteincidents');
    }
};
