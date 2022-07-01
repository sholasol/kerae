<?php

namespace App\Http\Livewire\Admin;

use App\Models\Staff;
use Livewire\Component;
use Illuminate\Support\Facades\File;

class AdminStaff extends Component
{

    public function deleteStaff($code){
        $staff = Staff::where('id', $code)->first();
        $path ="asset/image/staff/".$staff->image; //get the stored image path
            if(File::exists($path))
            {
                File::delete($path);
            }
        $staff->delete();
        $this->dispatchBrowserEvent('staff-delete');
    }

    public function render()
    {
        $staffs = Staff::all();
        return view('livewire.admin.admin-staff', ['staff'=>$staffs])->layout('layouts.admin');
    }
}
