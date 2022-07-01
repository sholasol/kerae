<div>
    @section('title', 'Sales')

    <div class="dasboard-wrapper fl-wrap">
        <div class="dasboard-listing-box fl-wrap">
            <div class="dasboard-opt sl-opt fl-wrap">
                {{-- <div class="dashboard-search-listing">
                    <input type="text" onclick="this.select()" placeholder="Search" value="">
                    <button type="submit"><i class="far fa-search"></i></button>
                </div> --}}
                <a href="{{ route('sales') }}" class="gradient-bg dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
                <!-- price-opt-->
                {{-- <div class="price-opt">
                    <span class="price-opt-title">Sort   by:</span>
                    <div class="listsearch-input-item">
                        <select data-placeholder="Lastes" class="chosen-select no-search-select" >
                            <option>Lastes</option>
                            <option>Oldes</option>
                            <option>Average rating</option>
                            <option>Name: A-Z</option>
                            <option>Name: Z-A</option>
                        </select>
                    </div>
                </div> --}}
                <!-- price-opt end-->
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="margin-bottom: 50px;">
                  <thead>
                      <tr>
                         <th>#</th>
                         <th>Full Name</th>
                         <th>Email Address</th>
                         <th>Phone</th>
                         <th width="40%">Model</th>
                         <th>Amount</th>
                         <th>Created</th>
                         <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($sales as $key => $sale)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$sale->custfirst.' '. $sale->custlast}}</td>
                            <td>{{$sale->email}}</td>
                            <td>{{$sale->phone}}</td>
                            <td>{{$sale->model}}</td>
                            <td>{{$sale->amount_paid}}</td>
                            <td>{{$sale->created_at->diffforHumans()}}</td>
                            <td>
                                <a href="{{route('sale-single', ['code'=>$sale->code])}}"><i class="far fa-edit text-success"></i></a>
                                <a href="#" onclick="return confirm('Are you sure?')" wire:click="deleteSale('{{ $sale->code }}')"><i class="far fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
             </div>
        </div>
    </div>

</div>
