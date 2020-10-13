<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
      $this->call([
<<<<<<< HEAD
         UsersSeeder::class,
=======
           UsersSeeder::class,
>>>>>>> cf33c9b50ba6093941760cb99922fffdf9c66595
        CriarPetsSeeder::class,
        produtos_seeder::class,
        ComentarioSeeder::class
      ]);

    }
}
