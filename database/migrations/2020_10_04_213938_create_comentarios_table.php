<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('produtos_id');
            // $table->unsignedInteger('user_id');
            $table->string('nota');
            $table->text('body');
            $table->timestamps();
            $table->unsignedInteger('produtos_id')->nullable();
            $table->foreign('produtos_id')->references('id')->on('produtos')->onDelete('cascade');
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
        Schema::dropIfExists('comentarios');
    }
}
