<?php

namespace App\Http\Livewire\Admin;

use App\Models\SalesModel;
use Livewire\Component;

class ViewSales extends Component
{

    public function deleteSale($code){
        $delsale = SalesModel::where('code', $code)->first();
        $delsale->delete();
        $this->dispatchBrowserEvent('delete-sales');
    }

    public function render()
    {
        $sales = SalesModel::paginate(15);
        return view('livewire.admin.view-sales', ['sales'=>$sales])->layout('layouts.admin');
    }
}
