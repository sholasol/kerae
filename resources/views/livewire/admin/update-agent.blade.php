<div>
    @section('title', 'Update Realtors')

                        <!-- dashboard-title end -->
                        <div class="dasboard-wrapper fl-wrap no-pag">
                            <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
                                <ul>
                                    <li><a href="#sec1" class="act-scrlink">Info Update</a></li>

                                </ul>
                                <div class="progress-indicator">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="-1 -1 34 34">
                                        <circle cx="16" cy="16" r="15.9155"
                                            class="progress-bar__background" />
                                        <circle cx="16" cy="16" r="15.9155"
                                            class="progress-bar__progress
                                            js-progress-bar" />
                                    </svg>
                                </div>
                            </div>
                            <!-- dasboard-widget-title -->
                            <div class="dasboard-widget-title fl-wrap" id="sec1">
                                <h5><i class="fas fa-info"></i>Basic Informations</h5>
                            </div>
                        <form wire:submit.prevent="updateAgent"  enctype="multipart/form-data">
                            @csrf
                            <!-- dasboard-widget-title end -->
                            <!-- dasboard-widget-box  -->
                            <div class="dasboard-widget-box fl-wrap">
                                <div class="custom-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="firstname" type="text" placeholder="Firstname of staff" value=""/>
                                            @error('firstname')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="lastname" type="text" placeholder="Lastname of staff" value=""/>
                                            @error('lastname')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone  <span class="dec-icon"><i class="far fa-money-bill-wave"></i></span></label>
                                            <input wire:model="phone" type="text" placeholder="Phone number" value=""/>
                                            @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Email Address  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="email" type="text" placeholder="Email address" value=""/>
                                            @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="city" type="text" placeholder="city of residence" value=""/>
                                            @error('city')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Date of Birth  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="dob" type="text" value=""/>
                                            @error('dob')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>State of Origin  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="state" type="text" placeholder="State of origin" value=""/>
                                            @error('state')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Country of Residence  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="country" type="text" placeholder="Country of residence" value=""/>
                                            @error('country')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Bank Name  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="bank" type="text" placeholder="Bank name" value=""/>
                                            @error('bank')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Account No.  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="acctno" type="text" placeholder="Account number" value=""/>
                                            @error('acctno')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Account Name  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="acctname" type="text" placeholder="Account name" value=""/>
                                            @error('acctname')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Replace Image  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                            <input wire:model="image" type="file"/>
                                            @if ($image)
                                                <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                            @else
                                                <img src="{{ asset('asset/image/agent')}}/{{ $agentimage }}" width="120" alt="">
                                            @endif
                                            @error('image')<p class="text-danger">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- dasboard-widget-box  end-->
                            <button type="submit" class="btn  color-bg float-btn">Save Changes </button>
                        </form>
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>


</div>


