<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Estates;
use Livewire\Component;
use App\Models\Listings;

class EstateListings extends Component
{
    public $code;
    public $name;
    public $phone;
    public $email;
    public $message;

    public function mount($code)
    {
        $this->code = $code;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
    }

    public function getintouch()
    {

        $this->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $type = 'schedule';
        $contact = new Contact();
        $contact->fullname = $this->name;
        $contact->phone = $this->phone;
        $contact->email = $this->email;
        $contact->type = $type;
        $contact->message = $this->message;

        //dd($contact);

        $contact->save();

        // $this->dispatchBrowserEvent('contact');
        $this->dispatchBrowserEvent('schedule');
    }



    public function render()
    {


         $est = Estates::where('id', '<', '3')
         ->where('code', $this->code)->first();
         $allprop = Listings::where('code', $this->code)->get();
        return view('livewire.estate-listings', ['allprop'=>$allprop, 'est'=>$est])->layout('layouts.front');
    }
}
