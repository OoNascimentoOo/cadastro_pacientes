<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $table = "paciente_facial";
    protected $fillable = [
        'user_id',
        'nome',
        'email',
        'endereco',
        'cep',
        'telefone',
    ];
}
