<?php

namespace App\Http\Livewire\Admin;

use App\Models\Estate;
use Livewire\Component;

class Estates extends Component
{
    public $estate;
    public $description;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'estate' => 'required',
            'description' => 'required'
        ]);
    }
    public function createEstate()
    {
        $this->validate([
            'estate' => 'required',
            'description' => 'required'
        ]);

        $est = new Estates;
        $est->name = $this->estate;
        $est->description = $this->description;

        $est->save();

        $this->dispatchBrowserEvent('estate-success');

    }
    public function render()
    {
        return view('livewire.admin.estates');
    }
}
