<?php

namespace App\Http\Livewire\Admin;

use App\Models\Estates;
use Livewire\Component;

class EstateListing extends Component
{
    public function render()
    {
        $lists = Estates::all();
        return view('livewire.admin.estate-listing', ['lists'=>$lists])->layout('layouts.admin');
    }
}
