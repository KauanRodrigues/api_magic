<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'filme', 'classificacao', 'atores', 'diretor'
    ];
}
