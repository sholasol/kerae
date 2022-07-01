<?php

namespace App\Http\Livewire\Admin;

use App\Models\Estates;
use App\Models\Listings;
use App\Models\PrequalifyModel;
use App\Models\Realtors;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        //all realtors
        $realtor = Realtors::count('id');
        $estate  = Estates::count('id');
        $list    = Listings::count('id');
        $pre     = PrequalifyModel::count('id');
        $agents = Realtors::limit(4)->inRandomOrder()->get();
        $ques = PrequalifyModel::limit(3)->inRandomOrder()->get();
        return view('livewire.admin.admin-dashboard', ['ques'=>$ques,'realtor'=>$realtor,'agents'=>$agents, 'pre'=>$pre, 'list'=> $list, 'estate'=>$estate])->layout('layouts.admin');
    }
}
