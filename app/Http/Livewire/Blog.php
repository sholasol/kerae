<?php

namespace App\Http\Livewire;


use App\Models\Blog as BlogModel;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {

        $blogs = BlogModel::orderBy('id', 'DESC')->get();
        return view('livewire.blog', ['blogs'=>$blogs])->layout('layouts.front');
    }
}
