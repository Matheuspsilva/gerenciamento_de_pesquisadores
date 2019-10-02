<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table = 'publicacoes';
    protected $fillable = [
        'pesquisador_id',
        'titulo',
        'periodico',
        'issn',
        'ano'
    ];
}
