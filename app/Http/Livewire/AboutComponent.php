<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listings;
use App\Models\Realtors;
use App\Models\Staff;

class AboutComponent extends Component
{
    public function render()
    {
        $simSlides = Listings::limit(5)->inRandomOrder()->get();
        $allprop = Listings::limit(6)->inRandomOrder()->get();
        $realtors = Staff::limit(8)->inRandomOrder()->get();
        return view('livewire.about-component', ['simSlides'=>$simSlides, 'allprop'=>$allprop, 'realtors'=>$realtors])->layout('layouts.front');
    }
}
