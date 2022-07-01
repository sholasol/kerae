<div>
    @section('title', 'Subscribers')
    <div class="dasboard-wrapper fl-wrap">
        <div class="dasboard-listing-box fl-wrap">
            <div class="dasboard-opt sl-opt fl-wrap">
                <div class="dashboard-search-listing">
                    <input type="text" onclick="this.select()" placeholder="Search" value="">
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
                <a href="#" class="gradient-bg dashboard-addnew_btn show-popup-form">Add New <i class="fal fa-plus"></i></a>
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
                <div class="popup-form">
                    <div class="custom-form">
                        <label>Name <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                        <input type="text" placeholder="Alica Noory" value=""/>
                        <label>Email Address <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input type="text" placeholder="AlicaNoory@domain.com" value=""/>
                        <label>Agent Link<span class="dec-icon"><i class="fal fa-link"></i></span></label>
                        <input type="text" placeholder="homeradar.net/agent-alicanoory/" value=""/>
                        <button type="submit" class="btn float-btn color-bg fw-btn"> Send</button>
                    </div>
                </div>
            </div>
            <!-- dashboard-listings-wrap-->
            <div class="dashboard-listings-wrap fl-wrap">
                <div class="row">
                    @foreach ($subscribers as $agent)

                    <div class="col-md-12">
                        <div class="bookings-item fl-wrap">
                            <div class="moveem">
                                <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Full Name: <span>{{$agent->fullname}}</span></li>
                                    <li>Phone Number: <span>{{$agent->phone}}</span></li>
                                    <li>Address Email: <span>{{$agent->email}}</span></li>
                                    <li>Estate of interest: <span>{{$agent->estate}}</span></li>
                                    <li>Start Date: <span>{{$agent->invdate}}</span></li>
                                    <li>Investment Period: <span>{{$agent->invperiod}}</span></li>
                                    <li>Investment Amount: <span>{{$agent->invamount}}</span></li>
                                    <li>Occupation: <span>{{$agent->occupation}}</span></li>
                                    <li>How much do you know about us: <span>{{$agent->knowabout}}</span></li>
                                    <li>How did you get to know us?: <span>{{$agent->awareness}}</span></li>
                                </ul>
                                {{-- <p>Description goes Here.</p> --}}
                                </div>
                                <div style="position: absolute; right: 0px; padding: 20px;">
                                    <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset('back/images/icon.png')}}" alt="">
                                </div>
                            </div>
                            <div class="bookings-item-footer fl-wrap" style="padding-bottom: 15px">
                                <span class="message-date">{{$agent->created_at->DiffForHumans()}}</span>
                                {{-- <ul>
                                    <li><a href="{{route('updateAgent', ['agent'=>$agent->id])}}" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-edit"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- dashboard-listings-item end-->
                </div>
            </div>
            <!-- dashboard-listings-wrap end-->
        </div>
        <!-- pagination-->
        <div class="pagination float-pagination">
            {{$subscribers->links()}}
        </div>
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


