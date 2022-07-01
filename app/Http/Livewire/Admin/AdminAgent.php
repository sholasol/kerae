<?php

namespace App\Http\Livewire\Admin;

use App\Models\Realtors;
use Livewire\Component;

class AdminAgent extends Component
{
    public function render()
    {
        $agents = Realtors::all();

        return view('livewire.admin.admin-agent', ['agents'=>$agents])->layout('layouts.admin');
    }
}
