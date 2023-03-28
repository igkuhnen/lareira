<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscricao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeesposa');
            $table->string('nomeesposo');
            $table->dateTime('datanascimentonomeesposa');
            $table->dateTime('datanascimentonomeesposo');
            $table->string('cidadenascimentoesposa');
            $table->string('cidadenascimentoesposo');
            $table->string('telefoneesposa');
            $table->string('telefoneesposo');
            $table->string('profissaoesposa');
            $table->string('profissaoesposo');
            $table->string('emailesposa');
            $table->string('emailesposo');
            $table->string('enderecocasal');
            $table->dateTime('datacasamento');
            $table->string('igrejacasamento');
            $table->string('filhos');
            $table->string('localguardafilhos');
            $table->string('padrinhos');
            $table->string('instagramesposa');
            $table->string('instagramesposo');
            $table->string('fazerlareira');
            $table->string('problemarelacionamento');
            $table->string('problemarelacionamentofilho');
            $table->string('problemapadresaber');
            $table->string('entidadefilantropica');
            $table->string('reconhecejesusesposa');
            $table->string('reconhecejesusesposo');
            $table->string('participaratividades');
            $table->string('medicamento');
            $table->string('observacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscricao');
    }
};
