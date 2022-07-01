<div>
    <section class="adv-search-section no-padding">
		{{-- <div id="offers-map"></div> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507456.48245939345!2d3.673403750495853!3d6.457673432306258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10395691de9240b9%3A0x9f90ac31e4b0e0cf!2sIbeju%20Lekki!5e0!3m2!1sen!2sng!4v1652983090944!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
						<div class="row">
							<div class="col-xs-12 col-lg-6">
								<h5 class="subtitle-margin">Kerae Homes Models</h5>
								<h1>hot recommended models<span class="special-color">.</span></h1>
							</div>

							<div class="col-xs-12">
								<div class="title-separator-primary"></div>
							</div>
						</div>
						<div class="row list-offer-row">
							<div class="col-xs-12">
                                @foreach ($props as $prop)

								<div class="list-offer">
									<div class="list-offer-left">
										<div class="list-offer-front">

											<div class="list-offer-photo">
                                                <a href="{{ route('propertySingle', ['list'=>$prop->id]) }}">
												    <img src="{{ asset('asset/image/property') }}/{{ $prop->image }}" alt="" />
                                                </a>
												<div class="type-container">
													{{-- <div class="estate-type">{{ $prop->propertytitle }}</div> --}}
													<div class="transaction-type">{{ $prop->estate }}</div>
												</div>
											</div>
											<div class="list-offer-params">
												<div class="list-area">
													<img src="{{ asset('assets/images/area-icon.png') }}" alt="" />{{ $prop->area }}m<sup>2</sup>
												</div>
												<div class="list-rooms">
													<img src="{{ asset('assets/images/rooms-icon.png') }}" alt="" />{{ $prop->bedroom }}
												</div>
												<div class="list-baths">
													<img src="{{ asset('assets/images/bathrooms-icon.png') }}" alt="" />{{ $prop->bathroom }}
												</div>
											</div>
										</div>
										<div class="list-offer-back">
                                            <iframe class="grid-offer-map"  src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $prop->location)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
										</div>
									</div>
									<a class="list-offer-right" href="{{ route('propertySingle', ['list'=>$prop->id]) }}" style="height: 241px">
										<div class="list-offer-text">
											<i class="fa fa-map-marker list-offer-localization hidden-xs"></i>
											<div class="list-offer-h4"><h4 class="list-offer-title">{{ $prop->propertytitle.', '.$prop->location }}</h4></div>
											<div class="clearfix"></div>
                                            <p class="colo">
                                                <?php
                                                    if (strlen($prop->propertynote)>400) {
                                                        $note= Str::substr($prop->propertynote, 0, 400);
                                                        echo "$note"."...]";
                                                    }else {
                                                        echo "$prop->propertynote";
                                                    }
                                                ?>
                                            </p>
											<div class="clearfix"></div>
										</div>
									</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>

                                @endforeach







							</div>
						</div>

						<div class="offer-pagination margin-top-30">
							<a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>
							<div class="clearfix"></div>
						</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="sidebar">

						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">featured estates<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-featured-cont">
                            @foreach ($estates as $estate)
                                <div class="sidebar-featured">
                                    <a class="sidebar-featured-image" href="{{route('estates', ['code'=>$estate->code])}}">
                                        <img style="height: 70px" src="{{ asset('asset/image/property') }}/{{ $estate->image }}" alt="" />
                                        <div class="sidebar-featured-type">
                                            {{-- <div class="sidebar-featured-estate">A</div> --}}
                                            {{-- <div class="sidebar-featured-transaction"></div> --}}
                                        </div>
                                    </a>
                                    <div style="font-size: calc(100% - 1px);" class="sidebar-featured-title"><a href="{{route('estates', ['code'=>$estate->code])}}">{{ $estate->name.', '.$estate->address }}</a></div>
                                    {{-- <div class="sidebar-featured-price">$ 320 000</div> --}}
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
						</div>
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">kerae blogs<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-blog-cont">
                            @foreach ($blogs as $blog)
                                <article>
                                    <a href="blog-right-sidebar.html"><img src="{{ asset('asset/image/blog') }}/{{ $blog->image }}" alt="blog image" style="height: 69px;" class="sidebar-blog-image" /></a>
                                    <div class="sidebar-blog-title">
                                        <a href="{{route('blogSingle', ['blogid'=>$blog->id])}}" style="font-size: 10px">
                                            <p style="color: #ddbc3b;">{{ $blog->title }}</p>
                                            <?php
                                                if (strlen($blog->content)>60) {
                                                    $note= Str::substr($blog->content, 0, 60);
                                                    echo "$note"."...]";
                                                }else {
                                                    echo "$blog->content";
                                                }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="sidebar-blog-date colo" style="font-size: 11px"><i class="fa fa-calendar-o"></i>{{ $blog->created_at->diffForHumans() }}</div>
                                    <div class="clearfix"></div>
                                </article>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
