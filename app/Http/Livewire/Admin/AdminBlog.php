<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;

class AdminBlog extends Component
{
    public function render()
    {
        $blogs = Blog::all();
        return view('livewire.admin.admin-blog', ['blogs'=>$blogs])->layout('layouts.admin');
    }
}
