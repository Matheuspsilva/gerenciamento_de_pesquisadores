<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesquisador extends Model
{
    protected $table = 'pesquisadores';
    protected $fillable = [
        'nome',
        'cpf',
        'area_formacao',
        'link_lattes'
    ];

    public function publicacoes()
    {
        return $this->hasMany('App\Publicacao');
    }
}
