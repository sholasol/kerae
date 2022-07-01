<div>

    <a id="rooms"></a>
    <section class="rooms parallax">

		<div class="container">
            <div class="row" style="margin-top: 20px">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_inv_1.png') }}" alt="" srcset="">
                            </div>
                            <div class="col-md-6">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_inv_2.png') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="contact3 wow fadeInUp">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 text-center">
                                <h5 class="subtitle-margin">Invest Now</h5>
                                <h1 class="">Become an Investor<span class="special-color">.</span></h1>
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
                                {{-- download brochure --}}
                                <div class="form-submit-cont" style="margin-top: 50px !important;">
                                    {{-- <a href="{{ route('download_brochure') }}"> --}}
                                        <a href="{{ asset('asset/kerae_investment_brochure.pdf') }}" target="_blank" title="KeraeHomes_Investment_guide.pdf" style="width: 225px; margin: 20px;" name="submit" class="button-primary pull-right" >
                                                <span class="hovertoogle">Investment Guide</span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="fa fa-book"></i></div>
                                        </a>
                                    {{-- </a> --}}
                                    <div class="clearfix"></div>
                                </div>
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
                                <form  wire:submit.prevent="prequalify">
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
                                        <select wire:model="project" class="input-full main-input">
                                            <option selected value="">Project of Interest</option>
                                            @foreach ($estates as $estate)
                                                <option>{{ $estate->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('project')<p class="text-danger">{{ $message }}</p> @enderror
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
                                                <option value="N240 - 250 Million">N240 - 250 Million+</option>
                                        </select>
                                        @error('invamount')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <select wire:model="invperiod" class="input-full main-input">
                                            <option selected value="">Terms</option>
                                            <option value="1 Year">1 Year</option>
                                            @for ($i=2; $i<6; $i++)
                                                <option value="{{$i}} Years">{{$i}} Years</option>
                                            @endfor
                                        </select>
                                        @error('invperiod')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <input wire:model="invdate" type="text" class="input-full main-input" placeholder="When are you looking to invest?">
                                        @error('invdate')<p class="text-danger">{{ $message }}</p> @enderror
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
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_inv_4.png') }}" alt="" srcset="">
                            </div>
                            <div class="col-md-6">
                                <img style="width: 450px; height: 310px; border-radius: 15px; padding: 10px; margin-top: 20px;" src="{{ asset('asset/image/kerae_inv_3.png') }}" alt="" srcset="">
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
    $('a#buttonpull').attr({download,
    href  : 'http://localhost/directory/file.pdf'});
</script>
@endsection
