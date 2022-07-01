<div>
    @section('title', 'Realtors')
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
                    <span class="price-opt-title">Sort by:</span>
                    <div class="listsearch-input-item">
                        <select data-placeholder="Lastes" class="chosen-select no-search-select" >
                            <option>Lastes</option>
                            <option>Oldest</option>
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
                    @foreach ($agents as $agent)

                    <div class="col-md-12">
                        <div class="bookings-item fl-wrap">
                            <div class="moveem">
                                <div class="bookings-item-content fl-wrap">
                                <ul>
                                    <li>Name: <span>{{$agent->firstname.' '.$agent->lastname}}</span></li>
                                    <li>Phone: <span>{{$agent->phone}}</span></li>
                                    <li>Email: <span>{{$agent->email}}</span></li>
                                    <li>Referred By: <span>{{$agent->ref_code}}</span></li>
                                </ul>
                                <p>Description goes Here.</p>
                                </div>
                                <div style="position: absolute; right: 0px; padding: 20px;">
                                    @if ($agent->agentImage)

                                    <img style="width: 150px; height: 150px; border-radius: 50%;" src="{{asset('asset/image/agent')}}/{{$agent->agentImage}}" alt="">
                                @else
                                    <img style="width: 150px; height: 150px; border-radius: 50%;" src="{{asset('back/images/agency/agent/5.jpg')}}" alt="">
                                @endif
                                </div>
                            </div>
                            <div class="bookings-item-footer fl-wrap">
                                <span class="message-date">12 December 2020</span>
                                <ul>
                                    <li><a href="{{route('updateAgent', ['agent'=>$agent->id])}}" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-edit"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Call"><i class="far fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
                                </ul>
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
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            <a href="#" >1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        </div>
        <!-- pagination end-->
    </div>
</div>
</div>


