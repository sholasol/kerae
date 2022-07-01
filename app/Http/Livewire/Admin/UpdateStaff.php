<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class UpdateStaff extends Component
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
    public $newimage;

    public $code;

    public function mount($code){
        $this->code = $code;
        $staff = Staff::where('id', $code)->first();
        $this->firstname = $staff->firstname;
        $this->lastname = $staff->lastname;
        $this->email = $staff->email;
        $this->phone = $staff->phone;
        $this->address = $staff->address;
        $this->designation = $staff->designation;
        $this->designation = $staff->designation;
        $this->qualification = $staff->qualification;
        $this->image = $staff->image;
    }


    public function updated($fields){
        $this->validateOnly($fields,
        [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);
    }

    public function updateStaff()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required'

        ]);



        $staff = Staff::where('id', $this->code)->first();
        $staff->firstname = $this->firstname;
        $staff->lastname = $this->lastname;
        $staff->phone = $this->phone;
        $staff->email = $this->email;
        $staff->address = $this->address;
        $staff->designation = $this->designation;
        $staff->qualification = $this->qualification;

        if (!empty($this->newimage)) {
            $path ="asset/image/staff/".$staff->image; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('staff', $imageName); //storage directory and image name
            $staff->image = $imageName;
        }

        $staff->save();
       $this->dispatchBrowserEvent('staff-update');

    }

    public function render()
    {
        return view('livewire.admin.update-staff')->layout('layouts.admin');
    }
}
