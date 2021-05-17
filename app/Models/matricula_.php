<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matricula_ extends Model
{
    use HasFactory;
    protected $fillable = ['id_aluno','id_curso'];
}
