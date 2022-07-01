<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Realtors;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class UpdateAgent extends Component
{


    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $city;
    public $dob;
    public $state;
    public $country;
    public $bank;
    public $acctno;
    public $acctname;
    public $image;
    public $agent;
    public $agentimage;


    public function mount($agent)
    {
        $agents = Realtors::where('id', $agent)->first();
        $this->firstname = $agents->firstname;
        $this->lastname = $agents->lastname;
        $this->phone = $agents->phone;
        $this->email = $agents->email;
        $this->city = $agents->city;
        $this->dob = $agents->dob;
        $this->state = $agents->state;
        $this->country = $agents->country;
        $this->agentimage = $agents->agentImage;
        $this->bank = $agents->bank;
        $this->acctno = $agents->acc_no;
        $this->acctname = $agents->acc_name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required',
            'city' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'country' => 'required',
            'image' => 'max:2048|dimensions:width=780,height=520',
            'bank' => 'required',
            'acctno' => 'required|numeric',
            'acctname' => 'required'
        ]);
    }

    public function updateAgent()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required',
            'city' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'country' => 'required',
            'image' => 'max:2048|dimensions:width=780,height=520',
            'bank' => 'required',
            'acctno' => 'required|numeric',
            'acctname' => 'required'
        ]);


        $agents = Realtors::find($this->agent);
        $agents->firstname = $this->firstname;
        $agents->lastname = $this->lastname;
        $agents->phone = $this->phone;
        $agents->email = $this->email;
        $agents->city = $this->city;
        $agents->dob = $this->dob;
        $agents->state = $this->state;
        $agents->country = $this->country;
        $agents->bank = $this->bank;
        $agents->acc_no = $this->acctno;
        $agents->acc_name = $this->acctname;
        if($this->image)
        {
            //delete existing picture asset/image/property
            $path ="asset/image/agent/".$agents->agentImage; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }

            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('agent', $imageName); //storage directory and image name
            $agents->agentImage = $imageName;
        }
        $agents->save();
        $this->dispatchBrowserEvent('update-agent');

    }
    public function render()
    {
        return view('livewire.admin.update-agent')->layout("layouts.admin");
    }

}
