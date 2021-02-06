<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable = ['nomeC', 'cpf', 'Assunto', 'data', 'hora'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'ficha';

    public function getNome(){
        return $this->attributes['nome'];
    }
}
