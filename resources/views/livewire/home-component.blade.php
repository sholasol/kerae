<div>
    <section class="no-padding adv-search-section" style="height: 550px; background: #0d0d0d;">

        <!-- Slider main container -->
        <div id="swiper1" class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                {{-- <div class="swiper-slide" style="display: flex; justify-content: center;">
                    <video class="new_ton" loop muted autoplay class="slide-bg swiper-lazy" id="myVideo">
                        <source type="video/mp4" src="{{ asset('assets/logo.mp4') }}">
                    </video>
                </div> --}}
                <!-- Slides -->
                @foreach ($simSlides as $key => $simSlide)
                    <div class="swiper-slide">
                        <div class="slide-bg swiper-lazy" style="height: 550px"
                            data-background="{{ asset('asset/image/property') }}/{{ $simSlide->image }}"></div>
                        <!-- Preloader image -->
                        <div class="container">
                            <div class="row">
                                <div style="opacity: 1"
                                    class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-4 col-lg-offset-6 slide-desc-col slide-desc-{{ $key + 1 }}">
                                    <div class="slide-desc">
                                        <div class="slide-desc-text">
                                            <a href="{{ route('propertySingle', ['list' => $simSlide->id]) }}">
                                                <div class="estate-type">{{ $simSlide->propertytitle }}</div>
                                            </a>
                                            <h4>
                                                {{ $simSlide->location }}
                                            </h4>
                                            <div class="clearfix"></div>
                                            <p>
                                                <?php
                                                    if (strlen($simSlide->propertynote) > 200) {
                                                        $note = Str::substr($simSlide->propertynote, 0, 200);
                                                        echo "$note" . '[...]';
                                                    } else {
                                                        echo "$simSlide->propertynote";
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="slide-desc-params">
                                            <div class="slide-desc-area">
                                                <img src="{{ asset('assets/images/area-icon.png') }}"
                                                    alt="" />{{ $simSlide->area }}m<sup>2</sup>
                                            </div>
                                            <div class="slide-desc-rooms">
                                                <img src="{{ asset('assets/images/rooms-icon.png') }}"
                                                    alt="" />{{ $simSlide->bedroom }}
                                            </div>
                                            <div class="slide-desc-baths">
                                                <img src="{{ asset('assets/images/bathrooms-icon.png') }}"
                                                    alt="" />{{ $simSlide->bathroom }}
                                            </div>
                                            <div class="slide-desc-parking">
                                                <img src="{{ asset('assets/images/parking-icon.png') }}"
                                                    alt="" />{{ $simSlide->garage }}
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="slide-buttons slide-buttons-right">
                                        <a href="#" class="navigation-box navigation-box-next slide-next">
                                            <div class="navigation-triangle"></div>
                                            <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                                        </a>
                                        <a href="{{ route('propertySingle', ['list' => $simSlide->id]) }}"
                                            class="navigation-box navigation-box-more slide-more">
                                            <div class="navigation-triangle"></div>
                                            <div class="navigation-box-icon"><i class="jfont fa-lg">&#xe813;</i></div>
                                        </a>
                                        <a href="#" class="navigation-box navigation-box-prev slide-prev">
                                            <div class="navigation-triangle"></div>
                                            <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>




    </section>

    <section class="section-light bottom-padding-45 section-both-shadow" style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInLeft" id="feature1">
                        <div class="feature-icon center-block"><i class="fa fa fa-tree"></i></div>
                        <div class="feature-text" style="height: 300px;">
                            <h5 class="subtitle-margin" style="height: 18px">SERENE ENVIRONMENT</h5>
                            <h3>SERENITY<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>At Kerae Homes, we cater for every family's desire as far as housing is concerned. We
                                offer every family the perfect environment</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature2">
                        <div class="feature-icon center-block"><i class="fa fa-home"></i></div>
                        <div class="feature-text" style="height: 300px;">
                            <h5 class="subtitle-margin" style="height: 18px;">ELEGANCE & LUXURY</h5>
                            <h3>OUR HOMES<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>Are a perfect display of Elegance, Luxury and comfort. we pay attention to details as we
                                explore the perfect guidelines in Home creation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInUp" id="feature3">
                        <div class="feature-icon center-block"><i class="fa fa-industry"></i></div>
                        <div class="feature-text" style="height: 300px;">
                            <h5 class="subtitle-margin" style="height: 18px">COMPETENCE & PROFICIENCY</h5>
                            <h3>OUR DESIGNS<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>We pride ourselves in working best with quality materials and competent professionals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature wow fadeInRight" id="feature4">
                        <div class="feature-icon center-block"><i class="fa fa-eye"></i></div>
                        <div class="feature-text" style="height: 300px;">
                            <h5 class="subtitle-margin" style="height: 18px">EXCEEDS EXPECTATIONS</h5>
                            <h3>OUR FOCUS<span class="special-color">.</span></h3>
                            <div class="title-separator center-block feature-separator"></div>
                            <p>The Key is to set realistic customer expectations, and not to just meet them but to
                                exceed them</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-offers parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                            <h5 class="subtitle-margin second-color">hot</h5>
                            <h1 class="second-color">Recommended Estates<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                            <div class="title-separator-secondary2"></div>
                        </div>
                    </div>
                    <div class="row grid-offer-row">
                        @foreach ($estates as $estate)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6 grid-offer-col responsing">
                                <div class="grid-offer" style="height: 500px">
                                    <div class="grid-offer-front">

                                        <div class="grid-offer-photo">
                                            <img src="{{ asset('asset/image/property') }}/{{ $estate->image }}"
                                                alt="{{ asset('asset/image/property') }}/{{ $estate->image }}" />
                                            <div class="type-container">
                                                <div class="estate-type"><a style="color: #fff;"
                                                        href="{{ route('estates', ['code' => $estate->code]) }}">{{ $estate->name }}
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text" style="height: 168px">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 style="font-size: calc(100% + 3px);" class="grid-offer-title">
                                                    <?php
                                                    if (strlen($estate->address) > 30) {
                                                        $notelocation = Str::substr($estate->address, 0, 30);
                                                        echo "$notelocation" . '[...]';
                                                    } else {
                                                        echo "$estate->address";
                                                    }
                                                    ?>
                                                </h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p style="font-size: calc(100% + 2px);">
                                                <?php
                                                if (strlen($estate->description) > 150) {
                                                    $note = Str::substr($estate->description, 0, 150);
                                                    echo "$note" . '[...]';
                                                } else {
                                                    echo "$estate->description";
                                                }
                                                ?>
                                            </p>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                    <div class="grid-offer-back">
                                        <iframe class="featured-offer-map" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q={{ str_replace(' ', '%20', $estate->address) }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="yes" marginheight="0"
                                            marginwidth="0"></iframe>
                                        <div class="button">
                                            <a href="{{ route('estates', ['code' => $estate->code]) }}"
                                                class="button-primary">
                                                <span>view details</span>
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
    </section>

    <section class="team section-light section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin">meet</h5>
                    <h1>Our Team<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="team-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-prev" id="team-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="owl-carousel" id="team-owl">
                @foreach ($realtors as $realtor)
                    <div class="team-member-cont">
                        <div class="team-member" style="background: #000;">
                            <div class="team-photo">
                                <img src="{{ asset('asset/image/staff') }}/{{ $realtor->image }}" alt="" />
                                <div class="big-triangle"></div>
                                <div class="big-triangle2"></div>
                                <a class="big-icon big-icon-plus"
                                    href="#{{ route('realtorDetails', ['user' => $realtor->id]) }}"><i
                                        class="jfont">&#xe804;</i></a>
                                <div class="team-description">
                                    <div>
                                        <div class="team-desc-line">
                                            <span class="team-icon-circle">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <span>{{ $realtor->phone }}</span>
                                        </div>
                                        <div class="team-desc-line">
                                            <span class="team-icon-circle">
                                                <i class="fa fa-envelope fa-sm"></i>
                                            </span>
                                            <span>{{ $realtor->email }}</span>
                                        </div>
                                        {{-- <div class="team-social-cont">
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
                                        <p class="team-text">

                                            {{ $realtor->designation }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="team-name">
                                <h5>{{ $realtor->designation }}</h5>
                                <h4>
                                    <a href="#{{ route('realtorDetails', ['user' => $realtor->id]) }}">
                                        {{ $realtor->firstname . ' ' . $realtor->lastname }}<span
                                            class="special-color">.</span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin second-color">testimonials</h5>
                    <h1 class="second-color">our clients say<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="testimonials-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-prev" id="testimonials-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-secondary"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12 owl-carousel" id="testimonials-owl">
                    <div class="testimonial">
                        <img src="{{ asset('assets/images/testimonials1.jpg') }}" alt=""
                            class="testimonials-photo" />
                        <div class="testimonials-content" style="min-height: 169px; background: black;">
                            <p class="lead">The Adetunjis</p>
                            <p class="lead360" style="font-size: calc(100% + 1.5px);">
                                Kerae Homes has been my go to real estate company for three real estate experiences, and
                                it has been an amazing journey with them. Kerae Homes is smart, caring, savvy and
                                professional in handling their businesses.
                            </p>

                        </div>
                        <div class="big-triangle">
                        </div>
                        <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                    </div>
                    <div class="testimonial">
                        <img src="{{ asset('assets/images/testimonials2.jpg') }}" alt=""
                            class="testimonials-photo" />
                        <div class="testimonials-content" style="min-height: 169px; background: black;">
                            <p class="lead">The Obidikes</p>
                            <p class="lead360" style="font-size: calc(100% + 1.5px);">
                                We want to thank Kerae Homes for all the efforts you have taken to see us through the
                                journey of becoming a landlord. Thank you for bearing with us and adjusting with the
                                different demands. It has been wonderful dealing with you.
                            </p>
                            <div class="big-triangle">
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <img src="{{ asset('assets/images/testimonials3.jpg') }}" alt=""
                            class="testimonials-photo" />
                        <div class="testimonials-content" style="min-height: 169px; background: black;">
                            <p class="lead">The Hammeds</p>
                            <p class="lead360" style="font-size: calc(100% + 1.5px);">Thanks to Kerae, my husband and
                                I have our dream home. They were consistently in contact with us, from sending us new
                                models on the market, to answering all of our questions.</p>
                            <div class="big-triangle">
                            </div>
                            <div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section-light bottom-padding-45 section-top-shadow" style="background: white;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h5 class="subtitle-margin">hot</h5>
                    <h1>Recommended Models<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="navigation-box navigation-box-next" id="grid-offers-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box navigation-box-prev" id="grid-offers-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
        </div>
        <div class="grid-offers-container">
            <div class="owl-carousel turnaround" id="grid-offers-owl">
                @foreach ($allprop as $allprops)
                    <div class="grid-offer-col">
                        <div class="grid-offer">
                            <div class="grid-offer-front" style="background: black">
                                <div class="grid-offer-photo">
                                    <img style="width: 100%; height: 200px;"
                                        src="{{ asset('asset/image/property') }}/{{ $allprops->image }}"
                                        alt="" />
                                    <div class="type-container">
                                        <div class="estate-type">{{ $allprops->propertytitle }}</div>
                                        {{-- <div class="transaction-type">{{$allprops->propertytype}}</div> --}}
                                    </div>
                                </div>
                                <div class="grid-offer-text" style="min-height: 121px !important;">
                                    <i class="fa fa-map-marker grid-offer-localization"></i>
                                    <div class="grid-offer-h4">
                                        <h4 class="grid-offer-title">
                                            <?php
                                            if (strlen($allprops->location) > 30) {
                                                $noteloc = Str::substr($allprops->location, 0, 30);
                                                echo "$noteloc" . '...]';
                                            } else {
                                                echo "$allprops->location";
                                            }
                                            ?>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p>
                                        <?php
                                        if (strlen($allprops->propertynote) > 100) {
                                            $note = Str::substr($allprops->propertynote, 0, 100);
                                            echo "$note" . '...]';
                                        } else {
                                            echo "$allprops->propertynote";
                                        }
                                        ?>
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="price-grid-cont">
                                    <div class="grid-price-label pull-left">Price:</div>
                                    <div class="grid-price pull-right">
                                        $ {{ number_format($allprops->price) }}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="grid-offer-params">
                                    <div class="grid-area">
                                        <img src="{{ asset('assets/images/area-icon.png') }}"
                                            alt="" />{{ $allprops->yardsize }}m<sup>2</sup>
                                    </div>
                                    <div class="grid-rooms">
                                        <img src="{{ asset('assets/images/rooms-icon.png') }}"
                                            alt="" />{{ $allprops->bedroom }}
                                    </div>
                                    <div class="grid-baths">
                                        <img src="{{ asset('assets/images/bathrooms-icon.png') }}"
                                            alt="" />{{ $allprops->bathroom }}
                                    </div>
                                </div>

                            </div>
                            <div class="grid-offer-back">
                                {{-- <div id="grid-map1" class="grid-offer-map"></div> --}}
                                <iframe class="grid-offer-map"
                                    src="https://maps.google.com/maps?q={{ str_replace(' ', '%20', $allprops->location) }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
                                <div class="button">
                                    <a href="{{ route('propertySingle', ['list' => $allprops->id]) }}"
                                        class="button-primary">
                                        <span>view details</span>
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
    </section>



    {{-- <section class="section-light top-padding-45 bottom-padding-45">
		<div class="container">
			<div class="row count-container">
				<div class="col-xs-6 col-lg-3">
					<div class="number" id="number1">
						<div class="number-img">
							<i class="fa fa-building"></i>
						</div>
						<span class="number-label text-color2">APARTMENTS</span>
						<span class="number-big text-color3 count" data-from="0" data-to="130" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border">
					<div class="number" id="number2">
						<div class="number-img">
							<i class="fa fa-home"></i>
						</div>
						<span class="number-label text-color2">HOUSES</span>
						<span class="number-big text-color3 count" data-from="0" data-to="107" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border3">
					<div class="number" id="number3">
						<div class="number-img">
							<i class="fa fa-industry"></i>
						</div>
						<span class="number-label text-color2">COMMERCIAL</span>
						<span class="number-big text-color3 count" data-from="0" data-to="149" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border">
					<div class="number" id="number4">
						<div class="number-img">
							<i class="fa fa-tree"></i>
						</div>
						<span class="number-label text-color2">LAND</span>
						<span class="number-big text-color3 count" data-from="0" data-to="25" data-speed="2000"></span>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
</div>

@section('scripts')
    <script>
        setInterval(() => {
            // if (screen.width<759) {
            //     $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item").css("width", "380px");
            //     console.log('working for 759px')
            // }else

            if (screen.width < 992 && screen.width > 758) {
                $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item").css("width", "380px");
                console.log('working for 380px')
            } else if (screen.width > 992) {
                $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item").css("width", "292px");
                console.log('working for 292px')
            } else if (screen.width < 560) {
                $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item .grid-offer-col .grid-offer .grid-offer-front .grid-offer-text .grid-offer-h4 h4")
                    .css("font-size", "12px");
                $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item .grid-offer-col .grid-offer .grid-offer-front .grid-offer-text")
                    .css("font-size", "0.8em");
                $(".testimonials-content .lead360").css("font-size", "12px");
                $(".turnaround .owl-wrapper-outer .owl-wrapper .owl-item .grid-offer-col .grid-offer .grid-offer-front .grid-offer-text")
                    .css("font-size", "0.8em");
            }
        }, 2000);

        setInterval(() => {
            $("#team-owl-next").trigger("click");
            $("#testimonials-owl-next").trigger("click");
        }, 4000);
        $('#myVideo').get(0).play()
    </script>
@endsection
