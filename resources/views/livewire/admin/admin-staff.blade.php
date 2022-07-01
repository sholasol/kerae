<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
        @section('title', 'Staffs')
        <div class="dasboard-wrapper fl-wrap">
            <div class="dasboard-listing-box fl-wrap">
                <div class="dasboard-opt sl-opt fl-wrap">
                    <div class="dashboard-search-listing">
                        <input type="text" onclick="this.select()" placeholder="Search" value="">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </div>
                    <a href="{{route('create-staff')}}" class="gradient-bg dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
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
                        @foreach ($staff as $staff)

                        <div class="col-md-12">
                            <div class="bookings-item fl-wrap">
                                <div class="moveem">
                                    <div class="bookings-item-content fl-wrap">
                                    <ul>
                                        <li>Name: <span>{{$staff->firstname.' '.$staff->lastname}}</span></li>
                                        <li>Phone: <span>{{$staff->phone}}</span></li>
                                        <li>Email: <span>{{$staff->email}}</span></li>
                                    </ul>
                                    <p>Description goes Here.</p>
                                    </div>
                                    <div style="position: absolute; right: 0px; padding: 20px;">
                                        @if ($staff->image)

                                        <img style="width: 70px; height: 80px; border-radius: 50%;" src="{{asset('asset/image/staff')}}/{{$staff->image}}" alt="">
                                    @else
                                        <img style="width: 90px; height: 90px; border-radius: 50%;" src="{{asset('back/images/agency/staff/1651079027.jpg')}}" alt="">
                                    @endif
                                    </div>
                                </div>
                                <div class="bookings-item-footer fl-wrap">
                                    <span class="message-date">{{$staff->designation}}</span>
                                    <ul>
                                        {{-- <li><a href="{{route('updateAgent', ['agent'=>$agent->id])}}" class="tolt" data-microtip-position="top-left"  data-tooltip="Write"><i class="far fa-edit"></i></a></li> --}}
                                        <li><a href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="{{$staff->phone}}"><i class="far fa-phone"></i></a></li>
                                        <li><a href="{{ route('staff-edit', ['code'=>$staff->id]) }}" class="tolt" data-microtip-position="top-left"  data-tooltip="Update"><i class="far fa-edit"></i></a></li>
                                        <li><a href="#" wire:click="deleteStaff('{{ $staff->id }}')" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash"></i></a></li>
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



</div>
