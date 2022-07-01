<div>
    <section class="section-dark no-padding touchit" style="height: 720px;">
		<!-- Slider main container -->
		<div id="swiper-gallery" class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
                @foreach ($images as $key => $image)

				<div class="swiper-slide">
					<div class="slide-bg swiper-lazy" data-background="{{asset('asset/image/propertyImages')}}/{{$image->image}}" data-sub-html="<strong>{{$detail->propertytitle}}</strong><br/>{{$detail->location}}"></div>
					<!-- Preloader image -->
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					<div class="container">
                        <div class="row">
                            <div class="col-sm-12 clear col-md-9 col-lg-8 slide-desc-col animated fadeInUp gallery-slide-desc-{{$key+1}}">
								<div class="gallery-slide-cont">
									<div class="gallery-slide-cont-inner">
										<div class="gallery-slide-title pull-right" style="background: black;">
											<h5 class="subtitle-margin">{{$detail->estate}}</h5>
											<h3>{{$detail->propertytitle}}<span class="special-color">.</span></h3>
										</div>
										<div class="gallery-slide-estate pull-right hidden-xs">
											<i class="fa fa-home"></i>
										</div>
										<div class="clearfix"></div>
									</div>
									{{-- <div class="clearfix"></div>
									<div class="gallery-slide-desc-price pull-right">
										$ {{number_format($detail->price)}}
									</div> --}}
									{{-- <div class="clearfix"></div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>

			<div class="slide-buttons slide-buttons-center">
				<a href="#" class="navigation-box navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
				<div id="slide-more-cont"></div>
				<a href="#" class="navigation-box navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
			</div>

		</div>

    </section>
	<section class="thumbs-slider section-both-shadow" style="height: 151px; background: white;">
		<div class="container">
			<div class="row">
				<div class="col-xs-1">
					<a href="#" class="thumb-box thumb-prev pull-left"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-10">
					<!-- Slider main container -->
					<div id="swiper-thumbs" class="swiper-container">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
                            @foreach ($images as $image)
							<div class="swiper-slide">
								<img class="slide-thumb" src="{{asset('asset/image/propertyImages')}}/{{$image->image}}" style="width: 140px; height: 110px;" alt="{{$detail->propertytitle}}">
							</div>
                            @endforeach
						</div>
					</div>
				</div>
				<div class="col-xs-1">
					<a href="#" class="thumb-box thumb-next pull-right"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-light no-bottom-padding" style=" background: white;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9" style="padding: 20px; background: black;">
							<div class="details-image pull-left hidden-xs">
								<i class="fa fa-home"></i>
							</div>
							<div class="details-title pull-left">
								<h5 class="subtitle-margin"> {{$detail->estate}}</h5>
								<h3>{{$detail->propertytitle.', '.$detail->location}}<span class="special-color">.</span></h3>
							</div>
							<div class="clearfix"></div>
							<div class="title-separator-primary"></div>
							<p class="details-desc">
                                {!! $detail->propertynote !!}
                            </p>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
							<div class="details-parameters-price">$ {{number_format($detail->price)}}</div>
							<div class="details-parameters">
								<div class="details-parameters-cont">
									<div class="details-parameters-name">City</div>
									<div class="details-parameters-val" style="text-transform: capitalize">{{$detail->city}}</div>
									<div class="clearfix"></div>
								</div>
								<div class="details-parameters-cont">
									<div class="details-parameters-name">Area</div>
									<div class="details-parameters-val">{{$detail->area}}m<sup>2</sup></div>
									<div class="clearfix"></div>
								</div>
								<div class="details-parameters-cont">
									<div class="details-parameters-name">Yard size</div>
									<div class="details-parameters-val">{{$detail->yardsize}}m<sup>2</sup></div>
									<div class="clearfix"></div>
								</div>
								<div class="details-parameters-cont">
									<div class="details-parameters-name">Bedrooms</div>
									<div class="details-parameters-val">{{$detail->bedroom}}</div>
									<div class="clearfix"></div>
								</div>
								<div class="details-parameters-cont">
									<div class="details-parameters-name">Bathrooms</div>
									<div class="details-parameters-val">{{$detail->bathroom}}</div>
									<div class="clearfix"></div>
								</div>
								<div class="details-parameters-cont">
									<div class="details-parameters-name">Parking Space</div>
									<div class="details-parameters-val">{{$detail->garage}}</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row margin-top-45">
						<div class="col-xs-12 apartment-tabs">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
										<span>Map</span>
										<div class="button-triangle2"></div>
									</a>
								</li>
								<li role="presentation">
									<a href="#tab-street-view" aria-controls="tab-street-view" role="tab" data-toggle="tab">
										<span>Street view</span>
										<div class="button-triangle2"></div>
									</a>
								</li>
							</ul>
								<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tab-map">
                                    <div class="mapouter"><div class="gmap_canvas">
                                        <iframe style="width: 100%; height:450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $detail->location)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
                                        <a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div>

								</div>
								<div role="tabpanel" class="tab-pane" id="tab-street-view">
									{{-- <div id="estate-street-view" class="details-map"></div> --}}

                                    <div class="mapouter"><div class="gmap_canvas"><iframe style="width: 100%; height:450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $detail->location)}}&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row margin-top-60" style="background: black; padding: 30px 0;">
						<div class="col-xs-12">
							<h3 class="title-negative-margin" style="color: #cc9837;">contact the agent<span class="special-color">.</span></h3>
							<div class="title-separator-primary"></div>
						</div>
					</div>
					<div class="row margin-top-60">
						<div class="col-xs-12 col-sm-12">
							<div class="agent-social-bar">
								<div class="pull-left">
									<span class="agent-icon-circle">
										<i class="fa fa-phone"></i>
									</span>
									<span class="agent-bar-text"> (+234) 70 0022 0000</span>
								</div>
								<div class="pull-left">
									<span class="agent-icon-circle">
										<i class="fa fa-envelope fa-sm"></i>
									</span>
									<span class="agent-bar-text">info@karaehomes.com</span>
								</div>
								<div class="pull-right">
									<div class="pull-right">
										<a class="agent-icon-circle" href="#">
											<i class="fa fa-facebook"></i>
										</a>
									</div>
									<div class="pull-right">
										<a class="agent-icon-circle icon-margin" href="#">
											<i class="fa fa-twitter"></i>
										</a>
									</div>
									<div class="pull-right">
										<a class="agent-icon-circle icon-margin" href="#">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
									<div class="pull-right">
										<a class="agent-icon-circle icon-margin" href="#">
											<i class="fa fa-skype"></i>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<form name="contact-from" action="#">
								<input name="name" type="text" class="input-long main-input" placeholder="Your name" />
								<input name="phone" type="text" class="input-short pull-right main-input" placeholder="Your phone" />
								<input name="mail" type="email" class="input-full main-input" placeholder="Your email" />
								<textarea name="message" class="input-full agent-textarea main-input" placeholder="Your question"></textarea>
								<div class="form-submit-cont">
									<a href="#" class="button-primary pull-right">
										<span>send</span>
										<div class="button-triangle"></div>
										<div class="button-triangle2"></div>
										<div class="button-icon"><i class="fa fa-paper-plane"></i></div>
									</a>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>

					<div class="row margin-top-90">
						<div class="col-xs-12 col-sm-9">
							<h5 class="subtitle-margin">hot</h5>
									<h1>Recommended Models<span class="special-color">.</span></h1>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
							<a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
						</div>
						<div class="col-xs-12">
							<div class="title-separator-primary"></div>
						</div>
					</div>

					<div class="grid-offers-container">
						<div class="owl-carousel" id="grid-offers-owl">
                            @foreach ($fetchRecs as $fetchRec)
							<div class="grid-offer-col">
								<div class="grid-offer">
									<div class="grid-offer-front" style="background: black;">

										<div class="grid-offer-photo" style="height: 147.383px">
											<img src="{{asset('asset/image/property')}}/{{$fetchRec->image}}" alt="" />
											<div class="type-container">
												<div class="estate-type">{{$fetchRec->propertytitle}}</div>
												{{-- <div class="transaction-type">{{$fetchRec->propertytype}}</div> --}}
											</div>
										</div>
										<div class="grid-offer-text" style="height: 200px">
											<i class="fa fa-map-marker grid-offer-localization"></i>
											<div class="grid-offer-h4"><h4 class="grid-offer-title">{{$fetchRec->location}}</h4></div>
											<div class="clearfix"></div>
											<p>
                                                <?php

                                                    if (strlen($fetchRec->propertynote)>200) {
                                                        $note= Str::substr($fetchRec->propertynote, 0, 200);
                                                        echo "$note"."[...]";
                                                    }else {
                                                        echo "$fetchRec->propertynote";
                                                    }

                                                ?>

                                            </p>
											<div class="clearfix"></div>
										</div>
										{{-- <div class="price-grid-cont">
											<div class="grid-price-label pull-left">Price:</div>
											<div class="grid-price pull-right" style="font-size: 13px">
												$ {{$fetchRec->price}}
											</div>
											<div class="clearfix"></div>
										</div> --}}
										<div class="grid-offer-params">
											<div class="grid-area">
												<img src="{{asset('assets/images/area-icon.png')}}" alt="" />{{$fetchRec->area}}m<sup>2</sup>
											</div>
											<div class="grid-rooms">
												<img src="{{asset('assets/images/rooms-icon.png')}}" alt="" />{{$fetchRec->bedroom}}
											</div>
											<div class="grid-baths">
												<img src="{{asset('assets/images/bathrooms-icon.png')}}" alt="" />{{$fetchRec->bathroom }}
											</div>
										</div>

									</div>
									<div class="grid-offer-back">
										{{-- <div id="grid-map1" class="grid-offer-map"></div> --}}
                                        <div class="mapouter"><div class="featured-offer-map gmap_canvas"><iframe style="width: 100%; margin-top: 30px; height:500px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $fetchRec->location)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div>
										<div class="button">
											<a href="{{route('propertySingle', ['list'=>$fetchRec->id])}}" class="button-primary">
												<span>read more</span>
												<div class="button-triangle"></div>
												<div class="button-triangle2"></div>
												<div class="button-icon"><i class="fa fa-search"></i></div>
											</a>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
					<div class="margin-top-45"></div>
				</div>
			</div>
		</div>
	</section>


</div>
@section('scripts')
    <script>
        // $('.gallery-slide-estate:first-child').addClass("hidden-xs");
        setInterval(() => {
            $('.touchit #swiper-gallery').css("height", "720px");
            $('.container .row .clear').css("height", "570px");
        }, 2000);
    </script>
@endsection

