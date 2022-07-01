<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBlog extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $image;
    public $author;


    public function render()
    {
        return view('livewire.admin.create-blog')->layout('layouts.admin');
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'title'=>'required|min:5',
            'content'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
            'author'=>'required|min:5'
        ]);
    }

    public function createBlog(){
        $this->validate([
            'title'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
            'author'=>'required'
        ]);


        $blog = new Blog();
        $blog->title = $this->title;
        $blog->content = $this->content;
        // $blog->image = $this->image;
        $blog->author = $this->author;


        $image = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blog', $image); //storage directory and image name
        $blog->image = $image;

        $blog->save();
        $this->dispatchBrowserEvent('blog');
    }
}
