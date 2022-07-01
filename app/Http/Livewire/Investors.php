<?php

namespace App\Http\Livewire;

use App\Models\Estates;
use App\Models\Investor;
use Livewire\Component;

class Investors extends Component
{
    public $name;
    public $phone;
    public $email;
    public $estate;
    public $model;
    public $invamount;
    public $invperiod;
    public $knowabout;
    public $awareness;
    public $details;
    public $invdate; //invdate
    public $occupation;
    public $project;

     //validate input fields
     public function updated($fields)
     {
         $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'invamount' => 'required',
            'invperiod' => 'required',
            'invdate' => 'required',
            'project' => 'required'
         ]);
     }

    public function prequalify()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'invamount' => 'required',
            'invperiod' => 'required',
            'invdate' => 'required',
            'project' => 'required'
        ]);

        $investor = new Investor();
        $investor->fullname = $this->name;
        $investor->phone = $this->phone;
        $investor->email = $this->email;
        $investor->invdate = $this->invdate;
        $investor->invperiod = $this->invperiod;
        $investor->invamount = $this->invamount;
        $investor->project = $this->project;

        $investor->save();


        $this->dispatchBrowserEvent('investor');

    }



    public function render()
    {
        $estates = Estates::all();
        return view('livewire.investors', ['estates'=>$estates])->layout('layouts.front');
    }
}
