<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'empleados';

    protected $fillable = ['run_empleado','nombre_empleado','apellido_empleado','correo_empleado','clave','estado_empleado','box_id','perfil_sistema_id','especialidad_id','fecha_ingreso'];
	
}
