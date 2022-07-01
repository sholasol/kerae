<div>
    {{-- <section class="short-image no-padding blog-short-title"> --}}
        <section class="no-padding" style="height: 280px; background: #152560 url({{ asset('assets/2.jpg') }}) no-repeat center; background-position-y: -65px; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">Realtors</h5>
					<h1 class="second-color">create account</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>

	<section class="section-light section-top-shadow">
		<form wire:submit.prevent="createRealtor" name="offer-from"  enctype="multipart/form-data">
            @csrf
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<h3 class="title-negative-margin" style="color: #cc9837;">Realtor details<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<div class="row">
                                <h6>Basic details</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="fname" class="colo">First Name:</label>
                                        <input wire:model="firstname" type="text" class="input-full main-input"/>
                                        @error('firstname')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="lname" class="colo">Last Name:</label>
                                        <input wire:model="lastname" type="text" class="input-full main-input"/>
                                        @error('lastname')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="phone" class="colo">Phone:</label>
                                        <input wire:model="phone" type="text" class="input-full main-input"/>
                                        @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="email" class="colo">Email Address:</label>
                                        <input wire:model="email" type="email" class="input-full main-input"/>
                                        @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="city" class="colo">Address:</label>
									<input wire:model="address" type="text" class="input-full main-input"/>
                                    @error('address')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="dob" class="colo">Date Of Birth:</label>
									<input wire:model="dob" type="date" class="input-full main-input"/>
                                    @error('dob')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="state" class="colo">State:</label>
									<input wire:model="state" type="text" class="input-full main-input"/>
                                    @error('state')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="country" class="colo">Country:</label>
									<input wire:model="country" type="text" class="input-full main-input" list="exampleList"/>
                                    <datalist id="exampleList">
                                        <option value="Nigeria"></option>
                                        <option value="Ghana"></option>
                                        <option value="Togo"></option>
                                        <option value="Cameroon"></option>
                                    </datalist>
                                    @error('country')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-12">
                                    <label for="ref_code" class="colo">Agent Image:</label>
									<input wire:model="agentImage" type="file" class="input-full main-input" placeholder="Optional"/>
                                    @error('agentImage')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                @if ($agentImage)
                                    <img src="{{ $agentImage->temporaryUrl() }}" width="120" alt="">
                                @endif
                                <div class="col-xs-12 col-sm-12">
                                    <label for="ref_code" class="colo">Referred By:</label>
									<input wire:model="referral" type="text" class="input-full main-input" placeholder="Optional"/>
                                    @error('referral')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
							</div>

							<div class="row">
                                <hr>
                                <h6>Bank details</h6>
                                <hr>

                                <div class="col-xs-12 col-sm-6">
                                    <label for="bank" class="colo">Bank name:</label>
									<input wire:model="bank" type="text" class="input-full main-input"/>
                                    @error('bank')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="acctno" class="colo">Account No.:</label>
									<input wire:model="acctno" type="text" class="input-full main-input"/>
                                    @error('acctno')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-12">
                                    <label for="acctname" class="colo">Account name:</label>
									<input wire:model="acctname" type="text" class="input-full main-input"/>
                                    @error('acctname')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                                <div class="col-xs-12 col-sm-12">
                                    <label for="acctname" class="colo">Bio:</label>
                                    <textarea class="input-full main-input" wire:model="bio" cols="60" rows="3"></textarea>
                                    @error('bio')<p class="text-danger">{{ $message }}</p> @enderror
								</div>
                            </div>

						</div>
					</div>
					<div class="col-xs-12 col-md-6 margin-top-xs-60 margin-top-sm-60">
						<h3 class="title-negative-margin" style="color: #cc9837;">Our Location<span class="special-color">.</span></h3>
						<div class="title-separator-primary"></div>
						<div class="dark-col margin-top-60">
							<p class="negative-margin bold-indent">Or drag the marker to property position<p>
							{{-- <div id="submit-property-map" class="submit-property-map"></div> --}}
                            <iframe class="submit-property-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4181455136186!2d3.70154811477041!3d6.468596995320433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bffc46c24b91b%3A0x9595f745411a2a01!2sKerae%20Homes!5e0!3m2!1sen!2sng!4v1649681121891!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

						</div>
					</div>

					<div class="col-xs-12">
						<div class="center-button-cont margin-top-60">
							<button type="submit" name="submit" class="button-primary button-shadow">
								<span>Register</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-lg fa-user"></i></div>
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
