<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HeaderOverview extends Component
{
    public function render()
    {
        return view('livewire.admin.header-overview')->layout('layouts.admin');
    }
}
