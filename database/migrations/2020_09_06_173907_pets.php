<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Pets', function(Blueprint $table){
           $table->increments('id');
           $table->string('especie',100);
           $table->string('nome',100);
           $table->string('genero',100);
           $table->date('nascimento',20);
           $table->string('comentarios',300);
           $table->string('preferencias',300);
           $table->timestamps();
           $table->unsignedInteger('users_id')->nullable();
           $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('Pets');
    }
}
