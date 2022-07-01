<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\PropertyImages;

class ImageUploads extends Component
{
    use WithFileUploads;

    public $images = [];




    public function save()
    {
        $this->validate([
            'images' => 'required|image|max:1024', // 1MB Max
        ]);

        dd($this->images);
        //random transfer code
        $randomString = Str::random(5);
        $code = $randomString;

        $this->dispatchBrowserEvent('listing-success');

        // if(!empty($this->images))
        // {
        //     foreach($this->images as $photo){
        //         $originalname = $photo->getClientOriginalName();
        //         $file_extension = $photo->getClientOriginalExtension();
        //         $filename = $originalname.'.'.$file_extension;

        //         $photo->storeAs('propertyImages', $filename);

        //         PropertyImages::create([
        //             'image' => $filename,
        //             'code'   =>$code
        //         ]);
        //     }
        //     $this->dispatchBrowserEvent('listing-success');
        // }else{
        //     $this->dispatchBrowserEvent('listing-error');
        // }


        // foreach ($this->images as $key => $image) {
        //     $this->images[$key] = $image->store('images');
        // }

        // $this->images = json_encode($this->images);


        // PropertyImages::create([
        //     'image' => $this->images,
        //     'code' => $code
        // ]);

        //session()->flash('success', 'Images has been successfully Uploaded.');
        //$this->dispatchBrowserEvent('listing-success');

        //return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.image-uploads')->layout('layouts.admin');
    }
}
