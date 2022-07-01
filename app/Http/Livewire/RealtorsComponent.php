<?php

namespace App\Http\Livewire;

use App\Models\Realtors;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class RealtorsComponent extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $address;
    public $dob;
    public $state;
    public $country;
    public $referral;
    public $acctno;
    public $acctname;
    public $bank;
    public $agentImage;
    public $bio;

    //validate input fields
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
    }

    public function createRealtor()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $realtor = new Realtors();
        $realtor->firstname = $this->firstname;
        $realtor->lastname = $this->lastname;
        $realtor->phone = $this->phone;
        $realtor->email = $this->email;
        $realtor->city = $this->address;
        $realtor->country = $this->country;
        $realtor->dob = $this->dob;
        $realtor->state = $this->state;
        $realtor->ref_code = $this->referral;
        $realtor->bank = $this->bank;
        $realtor->acc_no = $this->acctno;
        $realtor->acc_name = $this->acctname;
        $realtor->bio = $this->bio;

        if(!empty($this->agentImage)){
            $imageName = Carbon::now()->timestamp.'.'.$this->agentImage->extension();
            $this->agentImage->storeAs('agent', $imageName); //storage directory and image name
            $realtor->agentImage = $imageName;
        }




        $realtor->save();
        $this->dispatchBrowserEvent('success');

    }

    public function render()
    {
        return view('livewire.realtors-component')->layout('layouts.front');
    }
}
