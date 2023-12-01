<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Turno;

class Turnos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $numero_atencion, $letra_atencion, $empleadoid, $boxid, $matriculaid, $especialidadid, $tiempo_ingreso, $tiempo_atender, $tiempo_salida, $estado_turno;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.turnos.view', [
            'turnos' => Turno::latest()
						->orWhere('numero_atencion', 'LIKE', $keyWord)
						->orWhere('letra_atencion', 'LIKE', $keyWord)
						->orWhere('empleadoid', 'LIKE', $keyWord)
						->orWhere('boxid', 'LIKE', $keyWord)
						->orWhere('matriculaid', 'LIKE', $keyWord)
						->orWhere('especialidadid', 'LIKE', $keyWord)
						->orWhere('tiempo_ingreso', 'LIKE', $keyWord)
						->orWhere('tiempo_atender', 'LIKE', $keyWord)
						->orWhere('tiempo_salida', 'LIKE', $keyWord)
						->orWhere('estado_turno', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->numero_atencion = null;
		$this->letra_atencion = null;
		$this->empleadoid = null;
		$this->boxid = null;
		$this->matriculaid = null;
		$this->especialidadid = null;
		$this->tiempo_ingreso = null;
		$this->tiempo_atender = null;
		$this->tiempo_salida = null;
		$this->estado_turno = null;
    }

    public function store()
    {
        $this->validate([
		'numero_atencion' => 'required',
		'letra_atencion' => 'required',
		'empleadoid' => 'required',
		'boxid' => 'required',
		'matriculaid' => 'required',
		'especialidadid' => 'required',
		'tiempo_ingreso' => 'required',
		'tiempo_atender' => 'required',
		'tiempo_salida' => 'required',
		'estado_turno' => 'required',
        ]);

        Turno::create([ 
			'numero_atencion' => $this-> numero_atencion,
			'letra_atencion' => $this-> letra_atencion,
			'empleadoid' => $this-> empleadoid,
			'boxid' => $this-> boxid,
			'matriculaid' => $this-> matriculaid,
			'especialidadid' => $this-> especialidadid,
			'tiempo_ingreso' => $this-> tiempo_ingreso,
			'tiempo_atender' => $this-> tiempo_atender,
			'tiempo_salida' => $this-> tiempo_salida,
			'estado_turno' => $this-> estado_turno
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Turno Successfully created.');
    }

    public function edit($id)
    {
        $record = Turno::findOrFail($id);
        $this->selected_id = $id; 
		$this->numero_atencion = $record-> numero_atencion;
		$this->letra_atencion = $record-> letra_atencion;
		$this->empleadoid = $record-> empleadoid;
		$this->boxid = $record-> boxid;
		$this->matriculaid = $record-> matriculaid;
		$this->especialidadid = $record-> especialidadid;
		$this->tiempo_ingreso = $record-> tiempo_ingreso;
		$this->tiempo_atender = $record-> tiempo_atender;
		$this->tiempo_salida = $record-> tiempo_salida;
		$this->estado_turno = $record-> estado_turno;
    }

    public function update()
    {
        $this->validate([
		'numero_atencion' => 'required',
		'letra_atencion' => 'required',
		'empleadoid' => 'required',
		'boxid' => 'required',
		'matriculaid' => 'required',
		'especialidadid' => 'required',
		'tiempo_ingreso' => 'required',
		'tiempo_atender' => 'required',
		'tiempo_salida' => 'required',
		'estado_turno' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Turno::find($this->selected_id);
            $record->update([ 
			'numero_atencion' => $this-> numero_atencion,
			'letra_atencion' => $this-> letra_atencion,
			'empleadoid' => $this-> empleadoid,
			'boxid' => $this-> boxid,
			'matriculaid' => $this-> matriculaid,
			'especialidadid' => $this-> especialidadid,
			'tiempo_ingreso' => $this-> tiempo_ingreso,
			'tiempo_atender' => $this-> tiempo_atender,
			'tiempo_salida' => $this-> tiempo_salida,
			'estado_turno' => $this-> estado_turno
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Turno Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Turno::where('id', $id)->delete();
        }
    }
}