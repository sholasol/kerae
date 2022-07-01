<div>
    <section class="section-light section-top-shadow" style="background: white;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
						<div class="row" style="background: black; padding: 30px 0;">
							<div class="col-xs-12 col-lg-6">
								{{-- <h5 class="subtitle-margin">OUR AGENTS</h5> --}}
								<h1>OUR REALTORS<span class="special-color">.</span></h1>
							</div>
							<div class="col-xs-12 col-lg-6">
								<div class="order-by-container">
								</div>
							</div>
							<div class="col-xs-12">
								<div class="title-separator-primary"></div>
							</div>
						</div>
						<div class="row list-agency-row">
							<div class="col-xs-12">
                                @if($agents->count() > 0)
                                    @foreach ($agents as $agent)
                                        <div class="list-agency">
                                            <div class="list-agency-left" style="background-image: url({{ asset('asset/image/agent') }}/{{$agent->agentImage}}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                                {{-- <img src="{{asset('asset/image/agent')}}/{{$agent->agentImage}}" style="width:90px; height:100px; border-radius: 50%;"/> --}}
                                                <div class="list-agency-description">
                                                    <div class="team-desc-line">
                                                        <span class="team-icon-circle">
                                                            <i class="fa fa-phone"></i>
                                                        </span>
                                                        <span>{{$agent->phone}}</span>
                                                    </div>
                                                    {{-- <div class="team-desc-line">
                                                        <span class="team-icon-circle">
                                                            <i class="fa fa-phone"></i>
                                                        </span>
                                                        <span>(0)-987-654-321</span>
                                                    </div> --}}
                                                    <div class="team-desc-line" style="display: flex; justify-content: space-evenly;">
                                                        <span class="team-icon-circle">
                                                            <i class="fa fa-envelope fa-sm"></i>
                                                        </span>
                                                        <span><a href="#">{{$agent->email}}</a></span>
                                                    </div>
                                                    {{--
                                                        Social Iconss
                                                        <div class="team-social-cont">
                                                        <div class="team-social">
                                                            <a class="team-icon-circle" href="#">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </div>
                                                        <div class="team-social">
                                                            <a class="team-icon-circle" href="#">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </div>
                                                        <div class="team-social">
                                                            <a class="team-icon-circle" href="#">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </div>
                                                        <div class="team-social">
                                                            <a class="team-icon-circle" href="#">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>

                                            <a class="list-agency-right" style="background: black;" href="{{route('realtorDetails', ['user'=>$agent->id])}}">
                                                <div class="list-agency-text">
                                                    <h3 class="list-agency-title">{{$agent->firstname.' '.$agent->lastname}}</h3>
                                                    <i class="fa fa-map-marker"></i>
                                                    <span class="list-agency-address" style="text-transform: capitalize; color: ;">{{$agent->city}}</span>
                                                    <div class="list-agency-separator"></div>
                                                    <b style="color: #cc9837; font-size: calc(100% + 1px);">{{$agent->bio}} </b>.
                                                </div>
                                            </a>
                                            <div class="small-triangle"></div>
                                            <div class="small-triangle2"></div>
                                            <a class="small-icon" href="{{route('realtorDetails', ['user'=>$agent->id])}}"><i class="jfont fa-2x">&#xe804;</i></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="sidebar-title-cont">
                                        <h4 class="sidebar-title">No record to display at this moment<span class="special-color">.</span></h4>
                                        <div class="title-separator-primary"></div>
                                    </div>
                                @endif
							</div>
						</div>


						{{-- <div class="offer-pagination margin-top-15">
							<a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>
							<div class="clearfix"></div>
						</div> --}}
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="sidebar">
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">communities<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-featured-cont">
                            @foreach ($lists as $list)
							<div class="sidebar-featured">
								<a class="sidebar-featured-image" href="{{route('estates', ['code'=>$list->code])}}">
									<img src="{{asset('asset/image/property')}}/{{$list->image}}" alt="" />
									{{-- <div class="sidebar-featured-type">
										<div class="sidebar-featured-estate">A</div>
										<div class="sidebar-featured-transaction">S</div>
									</div> --}}
								</a>
								<div class="sidebar-featured-title"><a href="{{route('estates', ['code'=>$list->code])}}">{{$list->name}}</a></div>
								{{-- <div class="sidebar-featured-price">$ {{number_format($list->price)}}</div> --}}
								<div class="clearfix"></div>
							</div>
                            @endforeach
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
