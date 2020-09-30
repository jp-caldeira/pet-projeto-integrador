<?php

use Illuminate\Database\Seeder;
use App\Pets;

class CriarPetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // $pets = new Pets();
    // $pets->nome = "Snoopy";
    // $pets->especie= "cachorro";
    // $pets->genero= "masculino";
    // $pets->nascimento= "04/10/1950";
    // $pets->save();

    factory(Pets::class,20)->create();
    }
}
