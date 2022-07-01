<?php

namespace App\Http\Livewire;

use App\Models\Estates;
use App\Models\PrequalifyModel;
use Livewire\Component;

class Prequalify extends Component
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

     //validate input fields
     public function updated($fields)
     {
         $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'model' => 'required',
            'phone' => 'required',
            'estate' => 'required',
            'invamount' => 'required',
            'invperiod' => 'required',
            'occupation' => 'required',
            'details' => 'required|min:50',
            'invdate' => 'required',
            'knowabout' => 'required',
            'awareness' => 'required'
         ]);
     }

    public function prequalify()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'model' => 'required',
            'phone' => 'required',
            'estate' => 'required',
            'invamount' => 'required',
            'invperiod' => 'required',
            'occupation' => 'required',
            'details' => 'required|min:20',
            'invdate' => 'required',
            'knowabout' => 'required',
            'awareness' => 'required'
        ]);

        $preq = new PrequalifyModel();
        $preq->fullname = $this->name;
        $preq->phone = $this->phone;
        $preq->email = $this->email;
        $preq->invdate = $this->invdate;
        $preq->details = $this->details;
        $preq->estate = $this->estate;
        $preq->model = $this->model;
        $preq->occupation = $this->occupation;
        $preq->invperiod = $this->invperiod;
        $preq->invamount = $this->invamount;
        $preq->knowabout = $this->knowabout;
        $preq->awareness = $this->awareness;


        $preq->save();


        $this->dispatchBrowserEvent('prequalify');

    }

    public function render()
    {
        $loopings = Estates::all();
        return view('livewire.prequalify', ['loopings'=>$loopings])->layout('layouts.front');
    }
}
