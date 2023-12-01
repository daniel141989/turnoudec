<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Especialidad;

class Especialidads extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_especialidad, $letra_especialidad, $estado_especialidad, $fecha_ingreso;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.especialidads.view', [
            'especialidads' => Especialidad::latest()
						->orWhere('nombre_especialidad', 'LIKE', $keyWord)
						->orWhere('letra_especialidad', 'LIKE', $keyWord)
						->orWhere('estado_especialidad', 'LIKE', $keyWord)
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
		$this->nombre_especialidad = null;
		$this->letra_especialidad = null;
		$this->estado_especialidad = null;
		$this->fecha_ingreso = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_especialidad' => 'required',
		'letra_especialidad' => 'required',
		'estado_especialidad' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        Especialidad::create([ 
			'nombre_especialidad' => $this-> nombre_especialidad,
			'letra_especialidad' => $this-> letra_especialidad,
			'estado_especialidad' => $this-> estado_especialidad,
			'fecha_ingreso' => $this-> fecha_ingreso
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Especialidad Successfully created.');
    }

    public function edit($id)
    {
        $record = Especialidad::findOrFail($id);
        $this->selected_id = $id; 
		$this->nombre_especialidad = $record-> nombre_especialidad;
		$this->letra_especialidad = $record-> letra_especialidad;
		$this->estado_especialidad = $record-> estado_especialidad;
		$this->fecha_ingreso = $record-> fecha_ingreso;
    }

    public function update()
    {
        $this->validate([
		'nombre_especialidad' => 'required',
		'letra_especialidad' => 'required',
		'estado_especialidad' => 'required',
		'fecha_ingreso' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Especialidad::find($this->selected_id);
            $record->update([ 
			'nombre_especialidad' => $this-> nombre_especialidad,
			'letra_especialidad' => $this-> letra_especialidad,
			'estado_especialidad' => $this-> estado_especialidad,
			'fecha_ingreso' => $this-> fecha_ingreso
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Especialidad Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Especialidad::where('id', $id)->delete();
        }
    }
}