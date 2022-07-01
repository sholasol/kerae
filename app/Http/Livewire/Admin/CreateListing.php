<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Estates;
use Livewire\Component;
use App\Models\Listings;
// use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\PropertyImages;

class CreateListing extends Component
{
    use WithFileUploads;
    public $propertytitle;
    public $propertytype;
    public $price;
    public $location;
    public $city;
    public $phone;
    public $propertyImages  = [];
    public $area;
    public $yardsize;
    public $bedroom;
    public $bathroom;
    public $garage;
    public $image;
    public $estate;
    public $propertynote;
    public $code;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'propertytitle' => 'required',
            'estate' => 'required',
            'propertytype' => 'required',
            // 'price' => 'required|numeric',
            'location' => 'required',
            'city' => 'required',
            'phone' => 'required',
            // 'image' => 'required',
            // 'propertyImages' => 'required',
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'propertynote' => 'required'
        ]);
    }

    public function createListing()
    {
        $this->validate([
            'propertytitle' => 'required',
            'propertytype' => 'required',
            'estate' => 'required',
            // 'price' => 'required',
            'location' => 'required',
            'city' => 'required',
            'phone' => 'required',
            // 'image' => 'required',
            // 'propertyImages' => 'required',
            'area' => 'required',
            'yardsize' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'garage' => 'required',
            'propertynote' => 'required'
        ]);

        $estate = Estates::where('name', $this->estate)->first();
        $this->code = $estate->code;


        // dd($this->propertyImages);


         //random transfer code
         $randomString = Str::random(5);
         $code = $randomString;


        $listing = new Listings();
        $listing->estate = $this->estate;
        $listing->propertytitle = $this->propertytitle;
        $listing->propertytype = $this->propertytype;
        $listing->price = $this->price;
        $listing->location = $this->location;
        $listing->city = $this->city;
        $listing->phone = $this->phone;
        $listing->area = $this->area;
        $listing->yardsize = $this->yardsize;
        $listing->bedroom = $this->bedroom;
        $listing->bathroom = $this->bathroom;
        $listing->garage = $this->garage;
        $listing->propertynote = $this->propertynote;
        $listing->code = $this->code;

        // $originalImgname = $this->image->getClientOriginalName();
        // $file_extension = $this->image->getClientOriginalExtension();
        // $Imgfilename = $originalImgname;
        // $this->image->storeAs('property', $Imgfilename);
        // $listing->image = $Imgfilename;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('property', $imageName); //storage directory and image name
        $listing->image = $imageName;


        // $file = $request->file('image');
        // $extension = $file->getClientOriginalExtension();
        // $filename = time(). '.'.$extension;
        // $file->move('uploads/users/', $filename);//move file to uploads/listings directory
        // $usr->picture = 'uploads/users/'.$filename;

        $listing->save();
        $id = $listing->id;



        //  //This uploads multiple images
        if(!empty($this->propertyImages))
         {
             foreach($this->propertyImages as  $photo){
                 $originalname = $photo->getClientOriginalName();
                 $file_extension = $photo->getClientOriginalExtension();
                 $filename = $originalname;
                //  $filename = $originalname.'.'.$file_extension;
                 //$filename =  Carbon::now()->timestamp.'.'.$photo->extension();

                 $photo->storeAs('propertyImages', $filename);

                 PropertyImages::create([
                     'code' => $listing->id,
                     'image'   =>$filename
                 ]);

             }
         }







       $this->dispatchBrowserEvent('listing-success');


    }




    public function render()
    {
        $ests = Estates::all();
        return view('livewire.admin.create-listing', ['ests'=>$ests])->layout('layouts.admin');
    }
}
