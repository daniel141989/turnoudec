<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudiante;

class Estudiantes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $matricula, $run_estudiante, $nombre_estudiante, $apellido_estudiante, $correo_estudiante, $carrera, $sede, $estado_matricula, $fecha_ingreso;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.estudiantes.view', [
            'estudiantes' => Estudiante::latest()
						->orWhere('matricula', 'LIKE', $keyWord)
						->orWhere('run_estudiante', 'LIKE', $keyWord)
						->orWhere('nombre_estudiante', 'LIKE', $keyWord)
						->orWhere('apellido_estudiante', 'LIKE', $keyWord)
						->orWhere('correo_estudiante', 'LIKE', $keyWord)
						->orWhere('carrera', 'LIKE', $keyWord)
						->orWhere('sede', 'LIKE', $keyWord)
						->orWhere('estado_matricula', 'LIKE', $keyWord)
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
		$this->matricula = null;
		$this->run_estudiante = null;
		$this->nombre_estudiante = null;
		$this->apellido_estudiante = null;
		$this->correo_estudiante = null;
		$this->carrera = null;
		$this->sede = null;
		$this->estado_matricula = null;
		$this->fecha_ingreso = null;
    }

    public function store()
    {
        $this->validate([
		'matricula' => 'required',
		'run_estudiante' => 'required',
		'nombre_estudiante' => 'required',
		'apellido_estudiante' => 'required',
		'correo_estudiante' => 'required',
		'carrera' => 'required',
		'sede' => 'required',
		'estado_matricula' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        Estudiante::create([ 
			'matricula' => $this-> matricula,
			'run_estudiante' => $this-> run_estudiante,
			'nombre_estudiante' => $this-> nombre_estudiante,
			'apellido_estudiante' => $this-> apellido_estudiante,
			'correo_estudiante' => $this-> correo_estudiante,
			'carrera' => $this-> carrera,
			'sede' => $this-> sede,
			'estado_matricula' => $this-> estado_matricula,
			'fecha_ingreso' => $this-> fecha_ingreso
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Estudiante Successfully created.');
    }

    public function edit($id)
    {
        $record = Estudiante::findOrFail($id);
        $this->selected_id = $id; 
		$this->matricula = $record-> matricula;
		$this->run_estudiante = $record-> run_estudiante;
		$this->nombre_estudiante = $record-> nombre_estudiante;
		$this->apellido_estudiante = $record-> apellido_estudiante;
		$this->correo_estudiante = $record-> correo_estudiante;
		$this->carrera = $record-> carrera;
		$this->sede = $record-> sede;
		$this->estado_matricula = $record-> estado_matricula;
		$this->fecha_ingreso = $record-> fecha_ingreso;
    }

    public function update()
    {
        $this->validate([
		'matricula' => 'required',
		'run_estudiante' => 'required',
		'nombre_estudiante' => 'required',
		'apellido_estudiante' => 'required',
		'correo_estudiante' => 'required',
		'carrera' => 'required',
		'sede' => 'required',
		'estado_matricula' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Estudiante::find($this->selected_id);
            $record->update([ 
			'matricula' => $this-> matricula,
			'run_estudiante' => $this-> run_estudiante,
			'nombre_estudiante' => $this-> nombre_estudiante,
			'apellido_estudiante' => $this-> apellido_estudiante,
			'correo_estudiante' => $this-> correo_estudiante,
			'carrera' => $this-> carrera,
			'sede' => $this-> sede,
			'estado_matricula' => $this-> estado_matricula,
			'fecha_ingreso' => $this-> fecha_ingreso
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Estudiante Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Estudiante::where('id', $id)->delete();
        }
    }
}