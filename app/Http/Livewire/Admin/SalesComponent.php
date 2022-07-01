<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SalesModel;
use Illuminate\Support\Str;

class SalesComponent extends Component
{

    public $custfirst;
    public $custlast;
    public $phone;
    public $email;
    public $state;
    public $occupation;
    public $status;
    public $religion;
    public $gender;
    public $address;
    public $estate;
    public $model;
    public $unit;
    public $salesamount;
    public $amount_paid;
    public $remark;
    public $account;
    public $pay_date;
    public $kinfirst;
    public $kinlast;
    public $kinphone;
    public $kinemail;
    public $relationship;
    public $kinaddress;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'custfirst' => 'required',
            'custlast' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'state' => 'required',
            'status' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'estate' => 'required',
            'model' => 'required',
            'unit' => 'required',
            'salesamount' => 'required',
            'amount_paid' => 'required',
            'remark' => 'required',
            'account' => 'required',
            'pay_date' => 'required'
        ]);
    }

    public function createSales()
    {
        $this->validate([
            'custfirst' => 'required',
            'custlast' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'state' => 'required',
            'status' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'estate' => 'required',
            'model' => 'required',
            'unit' => 'required',
            'salesamount' => 'required',
            'amount_paid' => 'required',
            'remark' => 'required',
            'account' => 'required',
            'pay_date' => 'required'
        ]);

        $randomString = Str::random(5);
        $code = $randomString;

        $sales = new SalesModel();
        $sales->custfirst = $this->custfirst;
        $sales->custlast = $this->custlast;
        $sales->phone = $this->phone;
        $sales->email = $this->email;
        $sales->occupation = $this->occupation;
        $sales->state = $this->state;
        $sales->status = $this->status;
        $sales->religion = $this->religion;
        $sales->gender = $this->gender;
        $sales->address = $this->address;
        $sales->estate = $this->estate;
        $sales->model = $this->model;
        $sales->unit = $this->unit;
        $sales->salesamount = $this->salesamount;
        $sales->amount_paid = $this->amount_paid;
        $sales->remark = $this->remark;
        $sales->account = $this->account;
        $sales->pay_date = $this->pay_date;
        $sales->kinfirst = $this->kinfirst;
        $sales->kinlast = $this->kinlast;
        $sales->kinphone = $this->kinphone;
        $sales->kinemail = $this->kinemail;
        $sales->relationship = $this->relationship;
        $sales->kinaddress = $this->kinaddress;
        $sales->code = $code;

        $sales->save();
        $this->dispatchBrowserEvent('create-sales');

    }

    public function render()
    {
        return view('livewire.admin.sales-component')->layout('layouts.admin');
    }


}
