<?php

namespace App\Http\Livewire\Admin;

use App\Models\SalesModel;
use Livewire\Component;

class SaleSingle extends Component
{
    public $code;
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

    public function mount($code) {
        $this->code = $code;
        $sale = SalesModel::where('code', $this->code)->first();
        $this->custfirst = $sale->custfirst;
        $this->custlast = $sale->custlast;
        $this->phone = $sale->phone;
        $this->email = $sale->email;
        $this->state = $sale->state;
        $this->status = $sale->status;
        $this->address = $sale->address;
        $this->occupation = $sale->occupation;
        $this->estate = $sale->estate;
        $this->model = $sale->model;
        $this->unit = $sale->unit;
        $this->salesamount = $sale->salesamount;
        $this->amount_paid = $sale->amount_paid;
        $this->remark = $sale->remark;
        $this->account = $sale->account;
        $this->religion = $sale->religion;
        $this->gender = $sale->gender;
        $this->pay_date = $sale->pay_date;
        $this->kinfirst = $sale->kinfirst;
        $this->kinlast = $sale->kinlast;
        $this->kinemail = $sale->kinemail;
        $this->kinphone = $sale->kinphone;
        $this->relationship = $sale->relationship;
        $this->kinaddress = $sale->kinaddress;
    }



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

    public function updateSale()
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

        $sales = SalesModel::where('code', $this->code)->first();
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

        // dd($sales);
        $sales->save();
        $this->dispatchBrowserEvent('update-sales');

    }

    public function render()
    {

        return view('livewire.admin.sale-single')->layout('layouts.admin');
    }
}
