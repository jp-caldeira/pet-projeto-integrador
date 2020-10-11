<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CadastroAdocao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_adocao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_pet');
            $table->string('especie');
            $table->string('raca');
            $table->string('porte');
            $table->string('nome_responsavel');
            $table->string('email')->unique();
            $table->char('cpf')->unique();
            $table->string('fone');
            //$table->string('genero');
            //$table->date('nascimento');
            // $table->tinyInteger('receberPromocoes')->default(0);
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('senha');
            $table->string('imagem', 90);
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });    
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_adocao');
    }
}
