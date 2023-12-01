<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empleado;

class Empleados extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $run_empleado, $nombre_empleado, $apellido_empleado, $correo_empleado, $clave, $estado_empleado, $box_id, $perfil_sistema_id, $especialidad_id, $fecha_ingreso;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.empleados.view', [
            'empleados' => Empleado::latest()
						->orWhere('run_empleado', 'LIKE', $keyWord)
						->orWhere('nombre_empleado', 'LIKE', $keyWord)
						->orWhere('apellido_empleado', 'LIKE', $keyWord)
						->orWhere('correo_empleado', 'LIKE', $keyWord)
						->orWhere('clave', 'LIKE', $keyWord)
						->orWhere('estado_empleado', 'LIKE', $keyWord)
						->orWhere('box_id', 'LIKE', $keyWord)
						->orWhere('perfil_sistema_id', 'LIKE', $keyWord)
						->orWhere('especialidad_id', 'LIKE', $keyWord)
						->orWhere('fecha_ingreso', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->run_empleado = null;
		$this->nombre_empleado = null;
		$this->apellido_empleado = null;
		$this->correo_empleado = null;
		$this->clave = null;
		$this->estado_empleado = null;
		$this->box_id = null;
		$this->perfil_sistema_id = null;
		$this->especialidad_id = null;
		$this->fecha_ingreso = null;
    }

    public function store()
    {
        $this->validate([
		'run_empleado' => 'required',
		'nombre_empleado' => 'required',
		'apellido_empleado' => 'required',
		'correo_empleado' => 'required',
		'clave' => 'required',
		'estado_empleado' => 'required',
		'box_id' => 'required',
		'perfil_sistema_id' => 'required',
		'especialidad_id' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        Empleado::create([ 
			'run_empleado' => $this-> run_empleado,
			'nombre_empleado' => $this-> nombre_empleado,
			'apellido_empleado' => $this-> apellido_empleado,
			'correo_empleado' => $this-> correo_empleado,
			'clave' => $this-> clave,
			'estado_empleado' => $this-> estado_empleado,
			'box_id' => $this-> box_id,
			'perfil_sistema_id' => $this-> perfil_sistema_id,
			'especialidad_id' => $this-> especialidad_id,
			'fecha_ingreso' => $this-> fecha_ingreso
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Empleado Successfully created.');
    }

    public function edit($id)
    {
        $record = Empleado::findOrFail($id);
        $this->selected_id = $id; 
		$this->run_empleado = $record-> run_empleado;
		$this->nombre_empleado = $record-> nombre_empleado;
		$this->apellido_empleado = $record-> apellido_empleado;
		$this->correo_empleado = $record-> correo_empleado;
		$this->clave = $record-> clave;
		$this->estado_empleado = $record-> estado_empleado;
		$this->box_id = $record-> box_id;
		$this->perfil_sistema_id = $record-> perfil_sistema_id;
		$this->especialidad_id = $record-> especialidad_id;
		$this->fecha_ingreso = $record-> fecha_ingreso;
    }

    public function update()
    {
        $this->validate([
		'run_empleado' => 'required',
		'nombre_empleado' => 'required',
		'apellido_empleado' => 'required',
		'correo_empleado' => 'required',
		'clave' => 'required',
		'estado_empleado' => 'required',
		'box_id' => 'required',
		'perfil_sistema_id' => 'required',
		'especialidad_id' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Empleado::find($this->selected_id);
            $record->update([ 
			'run_empleado' => $this-> run_empleado,
			'nombre_empleado' => $this-> nombre_empleado,
			'apellido_empleado' => $this-> apellido_empleado,
			'correo_empleado' => $this-> correo_empleado,
			'clave' => $this-> clave,
			'estado_empleado' => $this-> estado_empleado,
			'box_id' => $this-> box_id,
			'perfil_sistema_id' => $this-> perfil_sistema_id,
			'especialidad_id' => $this-> especialidad_id,
			'fecha_ingreso' => $this-> fecha_ingreso
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Empleado Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Empleado::where('id', $id)->delete();
        }
    }
}