<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    #EVITA QUE SEJA CRIADO O CAMPO CREATED_AT E UPDATED_AT NA TABELA
    public $timestamps = false;

    protected $table = 'cadastro_usuario';

    protected $fillable = [
        'nome', 'supervisor', 'campanha', 'permissao', 'skill'
    ];
}