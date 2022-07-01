<?php

namespace App\Http\Livewire\Admin;

use App\Models\PrequalifyModel;
use Livewire\Component;
use Livewire\WithPagination;

class Subscribers extends Component
{
    use WithPagination;

    public function render()
    {

        $subscribers = PrequalifyModel::paginate(10);
        return view('livewire.admin.subscribers', ['subscribers'=>$subscribers])->layout('layouts.admin');
    }
}
