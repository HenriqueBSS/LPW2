<?php

namespace Database\Seeders;

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
  
       DB::insert('insert into usuarios (nome, sobrenome, cpf) values (?,?,?)', array('bruno', 'henrique', '123456789'));
    }
}
