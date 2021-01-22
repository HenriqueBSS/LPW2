<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{
    protected $fillable = ['nome', 'sobrenome', 'cpf' ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuario';

    public function getNome(){
        return $this->attributes['nome'];
    }

   public function setNome($nome){
       $this->atrributes['nome'] = $nome;
   }
}
