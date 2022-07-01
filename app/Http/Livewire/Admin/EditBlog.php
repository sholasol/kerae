<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditBlog extends Component
{

    use WithFileUploads;
    public $title;
    public $content;
    public $image;
    public $newimage;
    public $blogID;
    public $author;

    public function mount($blogID)
    {
        $blog = Blog::where('id', $blogID)->first();
        $this->title = $blog->title;
        $this->author = $blog->author;
        $this->image = $blog->image;
        $this->content = $blog->content;
    }

    public function render()
    {
        return view('livewire.admin.edit-blog')->layout('layouts.admin');
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'title'=>'required',
            'content'=>'required',
            'newimage'=>'required|mimes:png,jpg,jpeg',
            'author'=>'required'
        ]);
    }

    public function editBlog(){
        $this->validate([
            'title'=>'required|min:15',
            'content'=>'required',
            'newimage'=>'required|mimes:png,jpg,jpeg',
            'author'=>'required|min:15'
        ]);


        // $blog = new Blog();
        $blog = Blog::find($this->blogID);
        $blog->title = $this->title;
        $blog->content = $this->content;
        $blog->author = $this->author;

        if($this->newimage)
        {
            //delete existing picture asset/image/property
            $path ="asset/image/blog/".$blog->image; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }

            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('blog', $imageName); //storage directory and image name
            $blog->image = $imageName;
        }

        $blog->save();
        $this->dispatchBrowserEvent('updateblog');
    }
}
