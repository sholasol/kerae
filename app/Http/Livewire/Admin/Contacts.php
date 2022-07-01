<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contacts', ['contacts'=>$contacts])->layout('layouts.admin');
    }
}
