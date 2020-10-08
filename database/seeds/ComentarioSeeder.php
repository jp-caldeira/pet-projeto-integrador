<?php

use Illuminate\Database\Seeder;
use App\Comentarios;


class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $comentario = new Comentarios();
        // $comentario->nota = 2.5;
        // $comentario->body= "Não recomendo";
        // $comentario->users_id = 1;
        // $comentario->produtos_id = 10; 
        // // dd($comentario);
        // $comentario->save();

        factory(Comentarios::class, 175)->create();
    }
}
