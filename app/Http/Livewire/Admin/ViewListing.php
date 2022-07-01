<?php

namespace App\Http\Livewire\Admin;

use App\Models\Listings;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;

class ViewListing extends Component
{
    use WithPagination;

    public function render()
    {
        $lists = Listings::all();
        return view('livewire.admin.view-listing', ['lists'=>$lists])->layout('layouts.admin');
    }
}
