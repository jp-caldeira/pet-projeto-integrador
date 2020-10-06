<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name'=>'Rafaelle Cristiane Bonifacio',
        'email'=>'rafaelle.bonifacio@gmail.com',
        'password'=>bcrypt('123456789'),
        'phone' => '11987534165',
        'genero'=> 'feminino',
        'cpf'=> '666666666666',
        'nascimento'=> '1990-08-25',

 ]);
    }
}
