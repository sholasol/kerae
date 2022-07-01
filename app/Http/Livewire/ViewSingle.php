<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Listings;
use App\Models\PropertyImages;

class ViewSingle extends Component
{
    public $list;
    public $code;


    public function mount($list)
    {
        $listing = Listings::where('id', $list)->first();
        //$this->code = $listing->code;

        // $this->propertytype = $listing->propertytype;
        // $this->price = $listing->price;
        // $this->location = $listing->location;
        // $this->city = $listing->city;
        // $this->phone = $listing->phone;
        // $this->area = $listing->area;
        // $this->yardsize = $listing->yardsize;
        // $this->bedroom = $listing->bedroom;
        // $this->bathroom = $listing->bathroom;
        // $this->garage = $listing->garage;
        // $this->propertynote = $listing->propertynote;
        // $this->image = $listing->image;
        // $this->code = $listing->code;
    }



    public function render()
    {
        $detail= Listings::where('id', $this->list)->first();
        $images = PropertyImages::where('code', $this->list)->get();

        $fetchRecs = Listings::where('code', '!=', $this->list)->get();

        return view('livewire.view-single', ['detail'=>$detail, 'images'=>$images, 'fetchRecs'=>$fetchRecs])->layout("layouts.front");
    }
}
