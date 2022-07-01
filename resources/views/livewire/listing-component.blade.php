<div>
    <section class="adv-search-section no-padding">
		{{-- <div id="offers-map"></div> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d507482.9236043406!2d3.4176952478676528!3d6.431243740384503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slekki%20free%20trade%20zone!5e0!3m2!1sen!2sng!4v1649239810581!5m2!1sen!2sng" style="border:0; width:100%; height:500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    {{-- <section class="short-image no-padding contact-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">get in touch</h5>
					<h1 class="second-color">Contact Us</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>

    </section> --}}

    <section class="section-light bottom-padding-45 section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInLeft" id="feature1">
						<div class="feature2-icon"><i class="fa fa-building"></i></div>
						<div class="feature2-text">
							<h4>PIXEL PERFECT DESIGN<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInUp" id="feature2">
						<div class="feature2-icon"><i class="fa fa-home"></i></div>
						<div class="feature2-text">
							<h4>50 HTML FILES<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInRight" id="feature3">
						<div class="feature2-icon"><i class="fa fa-industry"></i></div>
						<div class="feature2-text">
							<h4>MASONRY, LIST &amp; GRID<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInLeft" id="feature4">
						<div class="feature2-icon"><i class="fa fa-tree"></i></div>
						<div class="feature2-text">
							<h4>MODERN CLEAN PROJECT<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInUp" id="feature5">
						<div class="feature2-icon"><i class="fa fa-gears"></i></div>
						<div class="feature2-text">
							<h4>3 BLOG STYLES<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInRight" id="feature6">
						<div class="feature2-icon"><i class="fa fa-pie-chart"></i></div>
						<div class="feature2-text">
							<h4>6 HOMEPAGES<span class="special-color">.</span></h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section class="featured-offers parallax">

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin second-color">highly recommended</h5>
							<h1 class="second-color">featured offers<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next" id="featured-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev" id="featured-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-secondary2"></div>
				</div>
			</div>
		</div>
		<div class="featured-offers-container">
			<div class="owl-carousel" id="featured-offers-owl">
                @foreach ($allprop as $allprops)
                <div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img style="width: 360px; height: 269px;" src="{{asset('asset/image/property')}}/{{$allprops->image}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">{{$allprops->propertytype}}</div>
							</div>
						</div>
						<div class="featured-offer-text" style="min-height: 200px">
							<h4 class="featured-offer-title">{{$allprops->location}}</h4>
							<p>
                                <?php

                                if (strlen($allprops->propertynote)>200) {
                                    $note= Str::substr($allprops->propertynote, 0, 200);
                                    echo "$note"."...";
                                }else {
                                    echo "$allprops->propertynote";
                                }

                                ?>

                            </p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{asset('assets/images/area-icon.png')}}" alt="" />{{$allprops->area}}m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{asset('assets/images/rooms-icon.png')}}" alt="" />{{$allprops->bedroom}}
							</div>
							<div class="featured-baths">
								<i class="fas fa-car"></i>{{$allprops->garage}}
							</div>
						</div>
						<div class="featured-price" style="font-size: 12px">
							N {{$allprops->price}}
						</div>
					</div>
					<div class="featured-offer-back">
                        <div class="mapouter"><div class="featured-offer-map gmap_canvas"><iframe style="width: 100%; height:450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $allprops->location)}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div>
                        {{-- <div id="featured-map1" class="featured-offer-map"></div> --}}
                        {{-- <div class="mapouter"><div class="featured-offer-map gmap_canvas"><iframe style="width: 100%; height:450px" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(' ', '%20', $allprops->location)}}&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:100%;}</style></div></div> --}}
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
                @endforeach


			</div>
		</div>
    </section>

	<section class="team section-light section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin">meet our</h5>
							<h1>proffesional team<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next secondary" id="team-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev secondary"  id="team-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2"></div>
				</div>
			</div>
		</div>
		<div class="team-container">
			<div class="owl-carousel" id="team-owl">
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent1.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>manager</h5>
							<h4>Mark Smith<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent2.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>Agent</h5>
							<h4>Michelle Jackson<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent3.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>specialist</h5>
							<h4>Robert Duncan<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent4.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>agent</h5>
							<h4>Veronica Green<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent5.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>agent</h5>
							<h4>Timothe Lee<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
				<div class="team-member-cont">
					<div class="team-member">
						<div class="team-photo">
							<img src="{{asset('assets/images/agent6.jpg')}}" alt="" />
							<div class="big-triangle"></div>
							<div class="big-triangle2"></div>
							<a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
							<div class="team-description">
								<div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-phone"></i>
										</span>
										<span>(0)-123-456-789</span>
									</div>
									<div class="team-desc-line">
										<span class="team-icon-circle">
											<i class="fa fa-envelope fa-sm"></i>
										</span>
										<span>apartment@domain.tld</span>
									</div>
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
									</div>
									<p class="team-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
							  </div>
							</div>
						</div>
						<div class="team-name">
							<h5>agent</h5>
							<h4>Joanne Doe<span class="special-color">.</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials parallax">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin second-color">recommendations</h5>
							<h1 class="second-color">our clients say<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next" id="testimonials-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev" id="testimonials-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-secondary2"></div>
				</div>
			</div>
		</div>

			<div class="container margin-top-90">
				<div class="row">
					<div class="col-xs-12 owl-carousel" id="testimonials-owl">
						<div class="testimonial2">
							<img src="{{asset('assets/images/testimonials1b.jpg')}}" alt="" class="testimonials-photo img-circle" />
							<div class="testimonials2-content">
								<p class="lead">Smith’s Family</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
							</div>

						</div>
						<div class="testimonial2">
							<img src="{{asset('assets/images/testimonials2b.jpg')}}" alt="" class="testimonials-photo img-circle" />
							<div class="testimonials2-content">
								<p class="lead">Meggy Johnson</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
							</div>
						</div>
						<div class="testimonial2">
							<img src="{{asset('assets/images/testimonials3b.jpg')}}" alt="" class="testimonials-photo img-circle" />
							<div class="testimonials2-content">
								<p class="lead">Paola Brown &amp; Tommy</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>

	<section class="section-light no-bottom-padding section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin">hot</h5>
							<h1>new estates<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next secondary" id="grid-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev secondary" id="grid-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2"></div>
				</div>
			</div>
		</div>
		<div class="grid-offers-container">
			<div class="owl-carousel" id="grid-offers-owl">
                @foreach ($allprop as $allprops)
                    <div class="grid-offer-col">
                        <div class="grid-offer">
                            <div class="grid-offer-front">
                                <div class="grid-offer-photo">
                                    <img style="width: 100%; height: 250px;" src="{{asset('asset/image/property')}}/{{$allprops->image}}" alt="" />
                                    <div class="type-container">
                                        <div class="estate-type">apartment</div>
                                        <div class="transaction-type">{{$allprops->propertytype}}</div>
                                    </div>
                                </div>
                                <div class="grid-offer-text">
                                    <i class="fa fa-map-marker grid-offer-localization"></i>
                                    <div class="grid-offer-h4"><h4 class="grid-offer-title">{{$allprops->location}}</h4></div>
                                    <div class="clearfix"></div>
                                    <p>
                                        <?php
                                            if (strlen($allprops->propertynote)>200) {
                                                $note= Str::substr($allprops->propertynote, 0, 100);
                                                echo "$note"."...]";
                                            }else {
                                                echo "$allprops->propertynote";
                                            }
                                        ?>
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="price-grid-cont">
                                    <div class="grid-price-label pull-left">Price:</div>
                                    <div class="grid-price pull-right">
                                        N {{number_format($allprops->price)}}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="grid-offer-params">
                                    <div class="grid-area">
                                        <img src="{{asset('assets/images/area-icon.png')}}" alt="" />{{$allprops->yardsize}}m<sup>2</sup>
                                    </div>
                                    <div class="grid-rooms">
                                        <img src="{{asset('assets/images/rooms-icon.png')}}" alt="" />{{$allprops->bedroom}}
                                    </div>
                                    <div class="grid-baths">
                                        <img src="{{asset('assets/images/bathrooms-icon.png')}}" alt="" />{{$allprops->bathroom}}
                                    </div>
                                </div>

                            </div>
                            <div class="grid-offer-back">
                                <div id="grid-map1" class="grid-offer-map"></div>
                                <div class="button">
                                    <a href="estate-details-right-sidebar.html" class="button-primary">
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
	</section>

	<section class="section-dark">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 text-center">
					<h5 class="subtitle-margin">latest from</h5>
							<h1 class="">our blog<span class="special-color">.</span></h1>
				</div>

				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-primary2"></div>
				</div>
			</div>
		</div>
		<div class="container margin-top-60">
			<div class="row">
				<div class="col-xs-12">
					<div class="masonry-grid">
						<!-- width of .grid-sizer used for columnWidth -->
						<div class="masonry-grid-sizer"></div>
						<article class="masonry-grid-item masonry-grid-item-big big-blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/big-blog-grid2.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2a.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Home prices are rising, hitting record levels</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2b.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Real Estate Trends to Watch in 2015</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2c.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Mortgage rates are still low, but hurry up</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2d.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Why the recovery is going so slowly?</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2e.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Apartment Building Investment Loan Rate</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{asset('assets/images/blog-grid2f.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>51% people with a mortgage can’t afford to move</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-light">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="price-table">
						<div class="price-table-header">
							<h5 class="second-color subtitle-margin">starter</h5>
							<h2 class="second-color">package 1<span class="third-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$19</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-primary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 margin-top-xs-30">
					<div class="price-table price-table-secondary">
						<div class="price-table-header">
							<h5 class="subtitle-margin">starter</h5>
							<h2 class="">package 1<span class="special-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$29</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
								<li>Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-secondary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 margin-top-xs-30 margin-top-sm-30">
					<div class="price-table">
						<div class="price-table-header">
							<h5 class="second-color subtitle-margin">starter</h5>
							<h2 class="second-color">package 1<span class="third-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$49</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-primary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
