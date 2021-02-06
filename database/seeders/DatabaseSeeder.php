<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
  
       DB::insert('insert into usuario (nome, sobrenome, cpf) values (?,?,?)', array('bruno', 'henrique', '123456789'));
       DB::insert('insert into usuario (nome, sobrenome, cpf) values (?,?,?)', array('henri', 'siva', '1234569'));
       DB::insert('insert into ficha (nome, acao, data) values (?,?,?)', array('bruno', 'sacar via cpf', '04/02/2021'));
    }
}
