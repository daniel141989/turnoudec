<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'turnos';

    protected $fillable = ['numero_atencion','letra_atencion','empleadoid','boxid','matriculaid','especialidadid','tiempo_ingreso','tiempo_atender','tiempo_salida','estado_turno'];
	
}
