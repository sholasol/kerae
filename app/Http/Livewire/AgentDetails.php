<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Realtors;

class AgentDetails extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
        // $realtor = Realtors::where('id', $user)->first();
        // $user_id = $realtor->id;
    }

    public function render()
    {
        $detail = Realtors::where('id', $this->user)->first();
        return view('livewire.agent-details', ['detail' =>$detail])->layout('layouts.front');
    }
}
