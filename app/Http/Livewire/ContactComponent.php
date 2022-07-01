<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{

    public $name;
    public $phone;
    public $email;
    public $message;


    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.front');
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

        $type = 'contact';
        $contact = new Contact();
        $contact->fullname = $this->name;
        $contact->phone = $this->phone;
        $contact->email = $this->email;
        $contact->type = $type;
        $contact->message = $this->message;

        //dd($contact);

        $contact->save();

        // $this->dispatchBrowserEvent('contact');
        $this->dispatchBrowserEvent('appointment');
    }




}
