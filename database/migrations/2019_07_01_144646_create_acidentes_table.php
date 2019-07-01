<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adicentes', function (Blueprint $table) {
            $table->string('id');
            $table->string('data_inversa');
            $table->string('dia_semana');
            $table->string('horario');
            $table->string('uf');
            $table->string('br');
            $table->string('km');
            $table->string('municipio');
            $table->string('causa_acidente');
            $table->string('tipo_acidente');
            $table->string('classificacao_acidente');
            $table->string('fase_dia');
            $table->string('sentido_via');
            $table->string('condicao_metereologica');
            $table->string('tipo_pista');
            $table->string('tracado_via');
            $table->string('uso_solo');
            $table->string('ano');
            $table->string('pessoas');
            $table->string('mortos');
            $table->string('feridos_leves');
            $table->string('feridos_graves');
            $table->string('ilesos');
            $table->string('ignorados');
            $table->string('feridos');
            $table->string('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acidentes');
    }
}
