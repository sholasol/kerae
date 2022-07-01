<div>
    {{-- The whole world belongs to you. --}}
    <div>
        @section('title', 'New Staff')
        <div class="dasboard-wrapper fl-wrap no-pag">
            <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
                <ul>
                    <li><a href="#sec1" class="act-scrlink">Info</a></li>
                    <li><a href="#sec2">Location</a></li>
                    <li><a href="#sec3">Media</a></li>
                    <li><a href="#sec4">Details</a></li>
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
            <form wire:submit.prevent="createStaff"  enctype="multipart/form-data">
                @csrf
            <!-- dasboard-widget-title -->
            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Basic Informations</h5>
            </div>
            <!-- dasboard-widget-title end -->
            <!-- dasboard-widget-box  -->
            <div class="dasboard-widget-box fl-wrap">
                <div class="custom-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>First Name  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                            <input wire:model="firstname" type="text" placeholder="First Name"/>
                            @error('firstname')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Last Name  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                            <input wire:model="lastname" type="text" placeholder="Last Name"/>
                            @error('lastname')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label> Email <span class="dec-icon"><i class="far fa-user"></i></span></label>
                            <input wire:model="email" type="email" placeholder="Email Address"/>
                            @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Phone Number  <span class="dec-icon"><i class="far fa-phone"></i></span></label>
                            <input wire:model="phone" type="text" placeholder="Phone Number"/>
                            @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label> Address  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                            <input wire:model="address" type="text" placeholder="Address"/>
                            @error('address')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Designation  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                            <input wire:model="designation" type="text" placeholder="Designation"/>
                            @error('designation')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Qualification<span class="dec-icon"><i class="far fa-user"></i></span></label>
                            <input wire:model="qualification" type="text" placeholder="Qualification"/>
                            @error('qualification')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Featured Image  </label>
                            <input wire:model="image" type="file"/>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- dasboard-widget-box  end-->
            <button type="submit" class="btn color-bg float-btn">Save Changes</button>
            </form>
        </div>
    </div>

</div>
