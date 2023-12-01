<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'estudiantes';

    protected $fillable = ['matricula','run_estudiante','nombre_estudiante','apellido_estudiante','correo_estudiante','carrera','sede','estado_matricula','fecha_ingreso'];
	
}
