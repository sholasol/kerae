<?php

namespace App\Http\Livewire;

use App\Models\Estate;
use Livewire\Component;
use App\Models\Listings;
use App\Models\Realtors;

class Agents extends Component
{
    public function render()
    {
        $lists = Estate::inRandomOrder()->get();
        $agents = Realtors::limit(15)->inRandomOrder()->get();
        return view('livewire.agents', ['agents'=>$agents, 'lists'=>$lists])->layout('layouts.front');
    }
}
