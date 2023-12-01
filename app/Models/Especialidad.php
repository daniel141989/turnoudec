<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'especialidads';

    protected $fillable = ['nombre_especialidad','letra_especialidad','estado_especialidad','fecha_ingreso'];
	
}
