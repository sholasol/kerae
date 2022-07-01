<?php

namespace App\Http\Livewire;

use App\Models\Estate;
use App\Models\Estates;
use Livewire\Component;

class EstateMenu extends Component
{
    public function render()
    {
        //$estate = Estate::all();
        $estate = Estate::where('id', '<', '3')->get();
        return view('livewire.estate-menu', ['estate'=>$estate])->layout('layouts.front');
    }
}
