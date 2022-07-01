<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;

// use App\Models\Estate as ModelsEstate;

class Estate extends Component
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

        $est = new Estate;

    }

    public function render()
    {
        // $estate = Estate::all();
        return view('livewire.admin.estate')->layout('layouts.admin');
    }
}
