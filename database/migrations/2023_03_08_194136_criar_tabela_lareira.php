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
        Schema::create('lareirista', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeesposa');
            $table->string('nomeesposo');
            $table->dateTime('datanascimentonomeesposa');
            $table->dateTime('datanascimentonomeesposo');
            $table->string('telefoneesposa');
            $table->string('telefoneesposo');
            $table->string('emailesposa');
            $table->string('emailesposo');
            $table->string('enderecocasal');
            $table->string('filhos');
            $table->dateTime('datacasamento');
            $table->string('padrinhos');
            $table->string('instagramesposa');
            $table->string('instagramesposo');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lareirista');
    }
};
