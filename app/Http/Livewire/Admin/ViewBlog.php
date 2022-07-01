<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\File;

class ViewBlog extends Component
{
    public $image;

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);
        //$this->image = $blog->image;
        $path ="asset/image/blog/".$blog->image; //get the stored image path
        if(File::exists($path))
        {
            File::delete($path);
        }

        $blog->delete();
        $this->dispatchBrowserEvent('deleteblog');
    }

    public function render()
    {
        $view = Blog::paginate(5);
        return view('livewire.admin.view-blog', ['view'=>$view])->layout('layouts.admin');
    }
}
