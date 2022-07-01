<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listings;

class ListingComponent extends Component
{
    public function render()
    {
        $allprop= Listings::all();
        return view('livewire.listing-component', ['allprop'=>$allprop])->layout('layouts.front');
    }
}
