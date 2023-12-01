<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Box;

class Boxs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_box, $id_estado_box;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.boxes.view', [
            'boxes' => Box::latest()
						->orWhere('nombre_box', 'LIKE', $keyWord)
						->orWhere('id_estado_box', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->nombre_box = null;
		$this->id_estado_box = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_box' => 'required',
		'id_estado_box' => 'required',
        ]);

        Box::create([ 
			'nombre_box' => $this-> nombre_box,
			'id_estado_box' => $this-> id_estado_box
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Box Successfully created.');
    }

    public function edit($id)
    {
        $record = Box::findOrFail($id);
        $this->selected_id = $id; 
		$this->nombre_box = $record-> nombre_box;
		$this->id_estado_box = $record-> id_estado_box;
    }

    public function update()
    {
        $this->validate([
		'nombre_box' => 'required',
		'id_estado_box' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Box::find($this->selected_id);
            $record->update([ 
			'nombre_box' => $this-> nombre_box,
			'id_estado_box' => $this-> id_estado_box
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Box Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Box::where('id', $id)->delete();
        }
    }
}