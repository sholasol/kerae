<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use App\Models\Listings;
use Illuminate\Support\Facades\File;

class BlogSingle extends Component
{
    public $blogid;

    public function mount($blogid)
    {
        $blog = Blog::find($blogid);
        $blog->id = $this->blogid;
    }
    public function render()
    {
        $featProps = Listings::take(3)->inRandomOrder()->get();
        $featBlogs = Blog::where('id','!=', $this->blogid)->take(3)->get();
        $det = Blog::where('id', $this->blogid)->first();

        return view('livewire.blog-single', ['det'=>$det, 'featProps'=>$featProps, 'featBlogs'=>$featBlogs])->layout('layouts.front');
    }
}
