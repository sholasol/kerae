<div>

    <a id="rooms"></a>
    <section class="rooms parallax">

		<div class="container">
            <div class="row" style="margin-top: 20px">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md-12">
                            <div class="col-md-6" style="display: flex;justify-content: center;">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_prequal_1.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="col-md-6" style="display: flex;justify-content: center;">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_prequal_2.jpg') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="contact3 wow fadeInUp" style="padding: 0 15px 60px 15px;">
                        <div class="row" style="padding: 60px 30px 30px 30px; background:black;">
                            <div class="col-xs-12 col-lg-12 text-center">
                                <h5 class="subtitle-margin">contact the agent</h5>
                                <h1 class="">Pre-qualify for a Home<span class="special-color">.</span></h1>
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                                <div class="title-separator-primary2"></div>
                            </div>
                        </div>
                        <div class="row margin-top-60">
                            <div class="col-xs-10 col-sm-4 col-xs-offset-1 col-sm-offset-0">
                                {{-- <h5 class="subtitle-margin">realtor</h5>
                                <h3 class="title-negative-margin">Mark Smith<span class="special-color">.</span></h3> --}}
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
                                <form wire:submit.prevent="prequalify">
                                    @csrf
                                    <div id="form-result"></div>

                                    <div>
                                        <input wire:model="name" id="" type="text" class="input-full main-input" placeholder="Enter Full Name" />
                                        @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <input wire:model="phone" type="text" class="input-full main-input" placeholder="Contact Number" />
                                        @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <input wire:model="email" id="" type="email" class="input-full main-input" placeholder="Your email" />
                                        @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="invperiod" class="input-full main-input">
                                            <option selected value="">Financing</option>
                                            <option value="Outright Payment">Outright Payment</option>
                                            <option value="1 Month">1 Month</option>
                                            @for ($i=2; $i<37; $i++)
                                                <option value="{{$i}} Months">{{$i}} Months</option>
                                            @endfor
                                        </select>
                                        @error('invperiod')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <input wire:model="invdate" type="text" class="input-full main-input" placeholder="When are you looking to buy">
                                        @error('invdate')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="invamount" class="input-full main-input">
                                            <option selected value="">How much are you looking to invest?</option>
                                                <option value="N10 - 20 Million">N10 - 20 Million</option>
                                                <option value="N20 - 30 Million">N20 - 30 Million</option>
                                                <option value="N40 - 50 Million">N40 - 50 Million</option>
                                                <option value="N50 - 60 Million">N50 - 60 Million</option>
                                                <option value="N60 - 70 Million">N60 - 70 Million</option>
                                                <option value="N80 - 90 Million">N80 - 90 Million</option>
                                                <option value="N90 - 100 Million">N90 - 100 Million</option>
                                                <option value="N100 - 110 Million">N100 - 110 Million</option>
                                                <option value="N110 - 120 Million">N110 - 120 Million</option>
                                                <option value="N120 - 130 Million">N120 - 130 Million</option>
                                                <option value="N130 - 140 Million">N130 - 140 Million</option>
                                                <option value="N140 - 150 Million">N140 - 150 Million</option>
                                                <option value="N150 - 160 Million">N150 - 160 Million</option>
                                                <option value="N160 - 170 Million">N160 - 170 Million</option>
                                                <option value="N170 - 180 Million">N170 - 180 Million</option>
                                                <option value="N180 - 190 Million">N180 - 190 Million</option>
                                                <option value="N190 - 200 Million">N190 - 200 Million</option>
                                                <option value="N200 - 210 Million">N200 - 210 Million</option>
                                                <option value="N210 - 220 Million">N210 - 220 Million</option>
                                                <option value="N220 - 230 Million">N220 - 230 Million</option>
                                                <option value="N230 - 240 Million">N230 - 240 Million</option>
                                                <option value="N240 - 250 Million">N240 - 250 Million</option>
                                        </select>
                                        @error('invamount')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="estate" class="input-full main-input">
                                            <option selected value="">Select estate of choice</option>
                                            @foreach ($loopings as $looping)
                                                <option value="{{$looping->name}}">{{$looping->name}}</option>
                                            @endforeach
                                            @error('estate')<p class="text-danger">{{ $message }}</p> @enderror
                                        </select>
                                    </div>
                                    <div>
                                        <input wire:model="model" type="text" class="input-full main-input" placeholder="Enter Model of Choice" />
                                        @error('model')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="occupation" class="input-full main-input">
                                            <option selected value="">What is your employment status?</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                        </select>
                                        @error('occupation')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <textarea type="text" wire:model="details" class="input-full main-input" placeholder="Please fill in company details."></textarea>
                                        @error('details')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="awareness" class="input-full main-input">
                                            <option selected value="">How did you hear about us?</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Family & Friends">Family & Friends</option>
                                            <option value="Agent">Agent</option>
                                            <option value="Google">Google</option>
                                            <option value="Youtube">Youtube</option>
                                            <option value="LinkedIn">LinkedIn</option>
                                        </select>
                                        @error('awareness')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="knowabout" class="input-full main-input">
                                            <option selected value="">How much do you know about us</option>
                                            <option value="Nothing">Nothing</option>
                                            <option value="Not Much">Not so much</option>
                                            <option value="Very Much">Very Much</option>
                                        </select>
                                        @error('knowabout')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>


                                    <div class="form-submit-cont" style="margin-top: 50px !important;">
                                        <button type="submit" name="submit" class="button-primary pull-right" >
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
	</section>
</div>
