<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Listings;
use App\Models\PropertyImages;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminListing extends Component
{

    use WithFileUploads;
    public $propertytitle;
    public $propertytype;
    public $price;
    public $location;
    public $city;
    public $phone;
    public $propertyImages;
    public $area;
    public $yardsize;
    public $bedroom;
    public $bathroom;
    public $garage;
    public $image;
    public $propertynote;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'propertytitle' => 'required',
            'propertytype' => 'required',
            'price' => 'required|numeric',
            'location' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'propertyImages' => 'required',
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'propertynote' => 'required'
        ]);
    }

    public function createProperty()
    {
        $this->validate([
            'propertytitle' => 'required',
            'propertytype' => 'required',
            'price' => 'required',
            'location' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'propertyImages' => 'required',
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'garage' => 'required',
            'propertynote' => 'required'
        ]);

        dd($this->propertytitle);

        //random transfer code
        $randomString = Str::random(5);
        $code = $randomString;

         //This uploads multiple images
        //  if(!empty($this->propertyImages))
        //  {
        //      foreach($this->propertyImages as $photo){
        //          $originalname = $photo->getClientOriginalName();
        //          $file_extension = $photo->getClientOriginalExtension();
        //          $filename = $originalname.'.'.$file_extension;

        //          $photo->storeAs('propertyImages', $filename);

        //          //$filename->store('additional_photos');
        //          //save image to database

        //          PropertyImages::create([
        //              'code' => $code,
        //              'image'   =>$filename
        //          ]);
        //      }
        //  }


        // $listing = new Listings();
        // $listing->propertytitle = $this->propertytitle;
        // $listing->propertytype = $this->propertytype;
        // $listing->price = $this->price;
        // $listing->location = $this->location;
        // $listing->city = $this->city;
        // $listing->phone = $this->phone;
        // $listing->image = $this->image;
        // $listing->area = $this->area;
        // $listing->yardsize = $this->yardsize;
        // $listing->bedroom = $this->bedroom;
        // $listing->bathroom = $this->bathroom;
        // $listing->garage = $this->garage;
        // $listing->propertynote = $this->propertynote;
        // $listing->code = $code;

        // $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        // $this->image->storeAs('property', $imageName); //storage directory and image name
        // $listing->image = $imageName;
        // $listing->save();
       // $this->dispatchBrowserEvent('listing-success');

       //session()->flash('success_message', 'Item added in cart');

    }


    public function render()
    {
        return view('livewire.admin.admin-listing')->layout('layouts.admin');
    }
}
