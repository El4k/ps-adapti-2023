<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'graduado',
        'foto',
        'curso_id'
    ];

    public function nacionalidade()
    {
        return $this->belongTo(Curso::class, 'curso_id');
    }
}
