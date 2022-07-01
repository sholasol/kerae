<div>
    @section('title', 'View Listings')

    <div class="dasboard-wrapper fl-wrap">
        <div class="dasboard-listing-box fl-wrap">
            <div class="dasboard-opt sl-opt fl-wrap">
                <div class="dashboard-search-listing">
                    <input type="text" onclick="this.select()" placeholder="Search" value="">
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
                <a href="{{ route('create') }}" class="gradient-bg dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
                <!-- price-opt-->
                <div class="price-opt">
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
                </div>
                <!-- price-opt end-->
            </div>
            <!-- dashboard-listings-wrap-->
            <div class="dashboard-listings-wrap fl-wrap">
                <div class="row">
                    @foreach ($lists as $list )

                    <!-- dashboard-listings-item-->
                    <div class="col-md-6">
                        <div class="dashboard-listings-item fl-wrap" style="height: 190px">
                            <div class="dashboard-listings-item_img">
                                <div class="bg-wrap">
                                    <div class="bg  "  data-bg="{{asset('asset/image/property')}}/{{$list->image}}"></div>
                                </div>
                                <div class="overlay"></div>
                                <a href="{{route('propertySingle', ['list'=>$list->id])}}" target="_blank" class="color-bg">View</a>
                            </div>
                            <div class="dashboard-listings-item_content">
                                <h4><a href="">{{$list->propertytitle}}</a></h4>
                                <div class="geodir-category-location">
                                    <a href="#"><i class="fas fa-map-marker-alt"></i> <span>  {{$list->location}}</span></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="listing-rating card-popup-rainingvis tolt" data-microtip-position="right" data-tooltip="Good" data-starrating2="4"></div>
                                <div class="dashboard-listings-item_opt">
                                    <span class="viewed-counter"><i class="far fa-wallet"></i> Price - $ {{number_format($list->price)}} </span>
                                    <ul>
                                        <li><a style="width: 35px; height: 30px;" href="{{route('updateListing', ['list'=>$list->id])}}" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit text-danger"></i></a></li>
                                        <li><a style="width: 40px; height: 30px;" href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-listings-item end-->
                    @endforeach
                </div>
            </div>
            <!-- dashboard-listings-wrap end-->
        </div>
        <!-- pagination-->
        {{-- {{$lists->links()}} --}}
        {{-- <div class="pagination float-pagination">
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            <a href="#" >1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        </div> --}}
        <!-- pagination end-->
    </div>
</div>
</div>
