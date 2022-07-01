<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStaff extends Component
{
    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $designation;
    public $qualification;
    public $image;




    public function updated($fields){
        $this->validateOnly($fields,
        [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);
    }

    public function createStaff()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);


        $staff = new Staff();

        $staff = new Staff();
        $staff->firstname = $this->firstname;
        $staff->lastname = $this->lastname;
        $staff->phone = $this->phone;
        $staff->email = $this->email;
        $staff->address = $this->address;
        $staff->designation = $this->designation;
        $staff->qualification = $this->qualification;


        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('staff', $imageName); //storage directory and image name
        $staff->image = $imageName;

        $staff->save();
       $this->dispatchBrowserEvent('staff-success');

    }



    public function render()
    {
        return view('livewire.admin.create-staff')->layout('layouts.admin');
    }
}
