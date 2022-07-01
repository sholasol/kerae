<div>
    <section class="no-padding contact-short-title" style="height: 250px; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">get in touch</h5>
					<h1 class="second-color">Contact Us</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>

    </section>

    <section class="section-light section-both-shadow top-padding-45" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 margin-top-45">
					<p class="negative-margin" style="font-size: calc(100% + 2px)">
                        We pride ourselves in our unwavering commitment to delivering quality building projects, sales of lands and homes with authentic verifiable documents, and topnotch customer service to all our clients. We are structured in estate development with a customer partnership approach at heart.
                    </p>
					<img src="images/contact-image.jpg" alt="" class="pull-left margin-top-45" />
					<address class="contact-info pull-left">
						<span><i class="fa fa-map-marker"></i><b >5th floor, Beniz mall by Olokonla Km 32 lekki Epe Expressway Lagos.</b></span>
						<span><i class="fa fa-envelope"></i><a href="info@keraehomes.com"><b style="color: #cc9837"> info@keraehomes.com</b> </a></span>
						<span><i class="fa fa-phone"></i><b> (+234) 70 0022 0000 </b></span>
						<span><i class="fa fa-globe"></i><b>https://keraehomes.com</b></span>
						<span><i class="fa fa-clock-o"></i><b>mon-fri: 8:00 - 18:00</b></span>
						<span class="span-last"><b>sat: 10:00 - 16:00</b></span>
					</address>
				</div>
				<div class="col-xs-12 col-md-6 margin-top-45">
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
	</section>

	{{-- <section class="contact-map2" id="contact-map2"></section> --}}

    <iframe class="contact-map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4181455136186!2d3.70154811477041!3d6.468596995320433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bffc46c24b91b%3A0x9595f745411a2a01!2sKerae%20Homes!5e0!3m2!1sen!2sng!4v1649681798795!5m2!1sen!2sng"  style="border:0; width:100%; height:500px;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
