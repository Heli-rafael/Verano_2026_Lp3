<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $timestamps = false;
    protected $table = 'asistencias';
    protected $fillable = ['Dia', 'id_profesor', 'Hora_marcacion'];
}
