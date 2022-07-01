<div>
    <section class="adv-search-section no-padding">
        {{-- <div style="height: 450px"> --}}
            <video autoplay loop muted class="stiff">
                <source style="background-size: cover;" src="{{asset('asset/video')}}/{{$est->video}}" type="video/mp4">
            </video>
            {{-- <div id="offers-map"></div> --}}
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d507482.9236043406!2d3.4176952478676528!3d6.431243740384503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slekki%20free%20trade%20zone!5e0!3m2!1sen!2sng!4v1649239810581!5m2!1sen!2sng" style="border:0; width:100%; height:500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            <iframe class="stiff-child" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $est->address)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
    </section>

    <a id="overview"></a>
    <section class="section-light bottom-padding-45 section-both-shadow" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center">
					<h5 class="subtitle-margin">elegance & luxury</h5>
							<h1 class="">{{$est->name}}<span class="special-color">.</span></h1>
				</div>

				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2"></div>
				</div>
			</div>
		</div>
		<div class="container margin-top-60">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 text-center">
					<p class="negative-margin" style="font-size: calc(100% + 2px); text-align: justify !important;">
                        {{$est->description}}
                    </p>
					<div class="swiper2-buttons margin-top-30">
						{{-- <a href="#localization" class="button-secondary button-shadow scroll">
							<span>view it on map</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="fa fa-map-marker fa-lg"></i></div>
						</a> --}}

						<a href="/contact" class="button-fourth button-shadow scroll">
							<span>Get in Touch</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="fa fa-home"></i></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>

    <section class="featured-offerz parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                                <h5 class="subtitle-margin second-color">highly recommended</h5>
                                        <h1 class="second-color">{{$est->name}} Models<span class="special-color">.</span></h1>
                            </div>
                            <div class="col-xs-12 col-sm-3 navigation-box2-cont" style="display: none">
                                <a href="#" class="navigation-box2 navigation-box-next" id="featured-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
                                <a href="#" class="navigation-box2 navigation-box-prev" id="featured-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                <div class="title-separator-secondary2"></div>
                            </div>
                        </div>
                        <div class="row grid-offer-row">
                            @foreach ($allprop as $allprops)
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-offer-col">
                                   <div class="grid-offer white" style="height: 500px">
                                            <div class="grid-offer-front" style="background: black">

                                            <div class="grid-offer-photo improvise">
                                                <img src="{{asset('asset/image/property')}}/{{$allprops->image}}" alt="" />
                                                <div class="type-container">
                                                    <div class="estate-type"><a style="color: white" href="{{route('propertySingle', ['list'=>$allprops->id])}}">{{$allprops->propertytitle}}</a></div>
                                                    {{-- <div class="transaction-type"></div> --}}
                                                </div>
                                            </div>
                                            <div class="grid-offer-text">
                                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                                <div class="grid-offer-h4"><h4 class="grid-offer-title">{{$allprops->location}}</h4></div>
                                                <div class="clearfix"></div>
                                                <p style="font-size: calc(100% + 1px);">
                                                    <?php

                                                    if (strlen($allprops->propertynote)>200) {
                                                        $note= Str::substr($allprops->propertynote, 0, 200);
                                                        echo "$note"."...";
                                                    }else {
                                                        echo "$allprops->propertynote";
                                                    }

                                                    ?>

                                                </p>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="price-grid-cont">
                                                <div class="grid-price-label pull-left">Price:</div>
                                                <div class="grid-price pull-right" style="font-size: 12px">
                                                    $ {{$allprops->price}}
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="grid-offer-params">
                                                <div class="grid-area">
                                                    <img src="{{asset('assets/images/area-icon.png')}}" alt="" />{{$allprops->area}}m<sup>2</sup>
                                                </div>
                                                <div class="grid-rooms">
                                                    <img src="{{asset('assets/images/rooms-icon.png')}}" alt="" />{{$allprops->bedroom}}
                                                </div>
                                                <div class="grid-baths">
                                                    <img src="{{asset('assets/images/parking-icon.png')}}" alt="" />{{$allprops->garage}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-back">
                                            <div class="mapouter"><div class="featured-offer-map gmap_canvas"><iframe style="width: 100%; height:450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $allprops->location)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div>
                                            <div class="button">
                                                <a href="{{route('propertySingle', ['list'=>$allprops->id])}}" class="button-primary">
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
                </div>
            </div>
			</div>
		</div>
    </section>


    <section class="contact-page-1 section-dark no-padding" style="background-color: #e8eaed;">
		{{-- <div id="contact-map1"></div> --}}
			<div class="contact1-cont">
				{{-- <a id="contact"></a> --}}
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-10 col-lg-offset-1">
							<div class="contact3 wow fadeInUp" style="padding: 0 15px 60px 15px;">
								<div class="row" style="padding: 60px 30px 30px 30px; background:black;">
									<div class="col-xs-12 col-lg-12 text-center">
										<h5 class="subtitle-margin">contact the agent</h5>
										<h1 class="">Shedule a visit<span class="special-color">.</span></h1>
									</div>
									<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
										<div class="title-separator-primary2"></div>
									</div>
								</div>
								<div class="row margin-top-60">
									<div class="col-xs-10 col-sm-4 col-xs-offset-1 col-sm-offset-0">
										{{-- <h5 class="subtitle-margin">agent</h5>
										<h3 class="title-negative-margin">Mark Smith<span class="special-color">.</span></h3>
										<a href="#" class="agent-photo">
											<img src="{{asset('assets/images/agent3.jpg')}}" alt="" class="img-responsive" />
										</a> --}}
                                        <a href="#" class="agent-photo">
                                            <img style="margin-top: 80px;" src="{{asset('back/images/logo.png')}}" alt="" class="img-responsive" />
                                        </a>
									</div>
									<div class="col-xs-12 col-sm-8">
										<div class="agent-social-bar">
											<div class="pull-left">
												<span class="agent-icon-circle">
													<i class="fa fa-phone"></i>
												</span>
												<span class="agent-bar-text"> +234 70 0022 0000</span>
											</div>
											<div class="pull-left">
												<span class="agent-icon-circle">
													<i class="fa fa-envelope fa-sm"></i>
												</span>
												<span class="agent-bar-text">Info@keraehomes.com</span>
											</div>
											<div class="pull-right">
												<div class="pull-right">
													<a class="agent-icon-circle" href="https://www.facebook.com/keraehomeslimited?_rdc=1&_rdr" target="_blank">
														<i class="fa fa-facebook"></i>
													</a>
												</div>
												<div class="pull-right">
													<a class="agent-icon-circle icon-margin" href="https://twitter.com/keraehomes" target="_blank">
														<i class="fa fa-twitter"></i>
													</a>
												</div>
												<div class="pull-right">
													<a class="agent-icon-circle icon-margin" href="https://www.linkedin.com/in/kerae-homes-2065a1200/" target="_blank">
														<i class="fa fa-linkedin"></i>
													</a>
												</div>
												<div class="pull-right">
													<a class="agent-icon-circle icon-margin" href="https://www.instagram.com/accounts/login/?next=/keraehomesltd/" target="_blank">
														<i class="fa fa-instagram"></i>
													</a>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<form wire:submit.prevent="getintouch">
                                            @csrf
                                                    <div id="form-result"></div>
                                                    <input wire:model="name" type="text" class="input-full main-input required,all" placeholder="Your name" />
                                                    @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                                                    <input wire:model="phone" type="text" class="input-full pull-right main-input required,all" placeholder="Your phone" />
                                                    @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                                                    <input wire:model="email" type="email" class="input-full main-input required,email" placeholder="Your email" />
                                                    @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                                                    <textarea wire:model="message" class="input-full contact-textarea main-input required,email" placeholder="Your question"></textarea>
                                                    @error('message')<p class="text-danger">{{ $message }}</p> @enderror
                                                    <div class="form-submit-cont">
                                                        <button type="submit" name="submit" class="button-primary pull-right">
                                                            <span>send</span>
                                                            <div class="button-triangle"></div>
                                                            <div class="button-triangle2"></div>
                                                            <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                                        </button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </section>

</div>

@section('scripts')
<script>


</script>
@endsection
