<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Estates;
use Livewire\Component;
use App\Models\Listings;

class Gallery extends Component
{
    public function render()
    {
        $props = Listings::inRandomOrder()->get();
        $blogs = Blog::inRandomOrder()->take(5)->get();
        $estates = Estates::where('code', '!=', 'ZRjJ7')
                    ->where('code', '!=', 'Pqeur')
                    ->inRandomOrder()
                    ->get();
        return view('livewire.gallery', ['props'=>$props, 'blogs'=>$blogs, 'estates'=>$estates])->layout('layouts.front');
    }
}
