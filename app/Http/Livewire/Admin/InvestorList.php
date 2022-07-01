<?php

namespace App\Http\Livewire\Admin;

use App\Models\Investor;
use Livewire\Component;

class InvestorList extends Component
{
    public function render()
    {
        $investors = Investor::paginate(7);
        return view('livewire.admin.investor-list', ['investors'=>$investors])->layout('layouts.admin');
    }
}
