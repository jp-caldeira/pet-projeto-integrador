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
            $table->string('name_pet');
            $table->string('especie');
            $table->string('raça');
            $table->string('porte');
            $table->string('name_responsavel');
            $table->string('email')->unique();
            $table->char('cpf')->unique();
            $table->string('phone');
            $table->string('genero');
            $table->date('nascimento');
            // $table->tinyInteger('receberPromocoes')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
