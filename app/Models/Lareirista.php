<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lareirista extends Model
{
    use HasFactory;

    protected $table = "lareirista";


    protected $datanascimentonomeesposa = ['datanascimentonomeesposa'];
    protected $datanascimentonomeesposo = ['datanascimentonomeesposo'];
    protected $datacasamento = ['datacasamento'];

    protected $fillable = [
        'nomeesposa',
        'nomeesposo',
        'datanascimentonomeesposa',
        'datanascimentonomeesposo',
        'telefoneesposa',
        'telefoneesposo',
        'emailesposa',
        'emailesposo',
        'enderecocasal',
        'filhos',
        'datacasamento',
        'padrinhos',
        'instagramesposa',
        'instagramesposo'

    ];
}
