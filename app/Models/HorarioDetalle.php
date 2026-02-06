<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioDetalle extends Model
{
    protected $table = 'horario_detalles';
    protected $fillable = ['Dia', 'Hora_entrada', 'Hora_salida', 'id_horario'];
}
