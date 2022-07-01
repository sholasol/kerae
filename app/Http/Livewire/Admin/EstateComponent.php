<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Estates;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EstateComponent extends Component
{
    use WithFileUploads;
    public $estate;
    public $description;
    public $image;
    public $video;
    public $address;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'estate' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg',
            'address' => 'required'
        ]);
    }
    public function createEstate()
    {
        $this->validate([
            'estate' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg',
            'address' => 'required'
        ]);


        //random transfer code
        $randomString = Str::random(5);
        $code = $randomString;

        $est = new Estates;
        $est->name = $this->estate;
        $est->description = $this->description;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('property', $imageName); //storage directory and image name
        $est->image = $imageName;
        $est->code = $code;
        $est->address = $this->address;

        $est->save();

        $this->dispatchBrowserEvent('listing-success');

    }

    public function render()
    {
        //$estates = Estates::all();
        return view('livewire.admin.estate-component')->layout('layouts.admin');
    }
}
