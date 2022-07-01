<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Listings;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\PropertyImages;
use Illuminate\Support\Facades\File;

class UpdateListing extends Component
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
    public $list;
    public $newimage;
    public $code;

    public function mount($list)
    {
        $listing = Listings::where('id', $list)->first();
        $this->propertytitle = $listing->propertytitle;
        $this->propertytype = $listing->propertytype;
        $this->price = $listing->price;
        $this->location = $listing->location;
        $this->city = $listing->city;
        $this->phone = $listing->phone;
        $this->area = $listing->area;
        $this->yardsize = $listing->yardsize;
        $this->bedroom = $listing->bedroom;
        $this->bathroom = $listing->bathroom;
        $this->garage = $listing->garage;
        $this->propertynote = $listing->propertynote;
        $this->image = $listing->image;
        $this->code = $listing->code;
    }

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
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'propertynote' => 'required'
        ]);
    }

    public function updateProperty()
    {
        $this->validate([
            'propertytitle' => 'required',
            'propertytype' => 'required',
            'price' => 'required',
            'location' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'garage' => 'required',
            'propertynote' => 'required'
        ]);

        //random transfer code
        // $randomString = Str::random(5);
        // $code = $randomString;

        //  //This uploads multiple images
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


        $listing = Listings::find($this->list);
        $listing->propertytitle = $this->propertytitle;
        $listing->propertytype = $this->propertytype;
        $listing->price = $this->price;
        $listing->location = $this->location;
        $listing->city = $this->city;
        $listing->phone = $this->phone;
        $listing->image = $this->image;
        $listing->area = $this->area;
        $listing->yardsize = $this->yardsize;
        $listing->bedroom = $this->bedroom;
        $listing->bathroom = $this->bathroom;
        $listing->garage = $this->garage;
        $listing->propertynote = $this->propertynote;
        if($this->newimage)
        {
            //delete existing picture asset/image/property
            $path ="asset/image/property/".$listing->image; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }

            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('property', $imageName); //storage directory and image name
            $listing->image = $imageName;
        }
        $listing->save();
        $this->dispatchBrowserEvent('listing-update');

    }

    public function render()
    {
        return view('livewire.admin.update-listing')->layout('layouts.admin');
    }
}
