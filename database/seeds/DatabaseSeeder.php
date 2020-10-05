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
      $this->call(CriarPetsSeeder::class);
      $this->call(produtos_seeder::class);

    }
}
