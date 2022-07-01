<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use App\Models\Estates;
use Livewire\Component;
use App\Models\Listings;

class HomeComponent extends Component
{
    public function render()
    {
        $simSlides = Listings::limit(5)->inRandomOrder()->get();
        $estates = Estates::where('id', '<', '3')->get();
        $allprop = Listings::limit(6)->inRandomOrder()->get();
        $realtors = Staff::limit(8)->inRandomOrder()->get();

        return view('livewire.home-component', ['simSlides'=>$simSlides, 'allprop'=>$allprop, 'estates'=>$estates, 'realtors'=>$realtors])->layout('layouts.front');
    }
}
