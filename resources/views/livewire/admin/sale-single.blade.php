<div>
    @section('title', 'Update Sale')
    <div class="dasboard-wrapper fl-wrap no-pag">
        <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
            <ul>
                <li><a href="#sec1" class="act-scrlink">Customer Information</a></li>
                <li><a href="#sec2">Property Information</a></li>
                <li><a href="#sec3">Payment Details</a></li>
                <li><a href="#sec4">Next Of Kin</a></li>
            </ul>
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar" />
                </svg>
            </div>
        </div>
        <form wire:submit.prevent="updateSale"  enctype="multipart/form-data">
            @csrf
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title fl-wrap" id="sec1">
            <h5><i class="fas fa-info"></i>Customer Information</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box fl-wrap">
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Firstname  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="custfirst" type="text" placeholder="Enter Customer Firstname"/>
                        @error('custfirst')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Lastname  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="custlast" type="text" placeholder="Enter Customer Lastname"/>
                        @error('custlast')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Phone number  <span class="dec-icon"><i class="far fa-telephone"></i></span></label>
                        <input wire:model="phone" type="number" placeholder="Enter Customer Phone Number"/>
                        @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Email Address  <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input wire:model="email" type="email" placeholder="Enter Occupation"/>
                        @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>State Of Origin  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="state" type="text" placeholder="State Of Occupation"/>
                        @error('state')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Marital Status  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="status" type="text" placeholder="Marital Status"/>
                        @error('status')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Religion  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="religion" type="text" placeholder="Customer Religion"/>
                        @error('religion')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Gender  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="gender" type="text" placeholder="Customer Gender"/>
                        @error('gender')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Address  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="address" type="text" placeholder="House Address"/>
                        @error('address')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Occupation  <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input wire:model="occupation" type="text" placeholder="Occupation"/>
                        @error('occupation')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- dasboard-widget-box  end-->
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec2">
            <h5><i class="fas fa-image"></i>Property Information</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box fl-wrap">
            {{-- @error('image')<p class="text-danger">{{ $message }}</p> @enderror --}}
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Estate <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="estate" type="text" placeholder="Select Estate"/>
                        @error('estate')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Model <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="model" type="text" placeholder="Purchased Model"/>
                        @error('model')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>No. of Units  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="unit" type="text" placeholder="Number Of Units Bought"/>
                        @error('unit')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Sales Amount  <span class="dec-icon"><i class="far fa-telephone"></i></span></label>
                        <input wire:model="salesamount" type="text" placeholder="Initial Sales Amount"/>
                        @error('salesamount')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Amount Paid  <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input wire:model="amount_paid" type="text" placeholder="Amount Paid"/>
                        @error('amount_paid')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-12">
                        <label>Remark(s)  </label>
                        <textarea wire:model="remark" type="text" placeholder="Write remark here, if any..."></textarea>
                        @error('remark')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- dasboard-widget-box  end-->
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec3">
            <h5><i class="fas fa-image"></i>Payment Details</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box fl-wrap">
            {{-- @error('image')<p class="text-danger">{{ $message }}</p> @enderror --}}
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Account Credited <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="account" type="text" placeholder="Enter Payment Account"/>
                        @error('account')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>Payment Date <span class="dec-icon"><i class="far fa-calendar"></i></span></label>
                        <input wire:model="pay_date" type="date"/>
                        @error('pay_date')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- dasboard-widget-box  end-->
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec4">
            <h5><i class="fas fa-list"></i>Next Of Kin Information</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box   fl-wrap">
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Firstname  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="kinfirst" type="text" placeholder="Next Of Kin Firstname"/>
                        @error('kinfirst')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Lastname  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="kinlast" type="text" placeholder="Next Of Kin Lastname"/>
                        @error('kinlast')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Phone number  <span class="dec-icon"><i class="far fa-mobile"></i></span></label>
                        <input wire:model="kinphone" type="number" placeholder="Next Of Kin Phone Number"/>
                        @error('kinphone')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Email Address  <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input wire:model="kinemail" type="text" placeholder="Next Of Kin Email Address"/>
                        @error('kinemail')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>Relationship  <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                        <input wire:model="relationship" type="text" placeholder="Relationship With NOK"/>
                        @error('relationship')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-4">
                        <label>House Address  <span class="dec-icon"><i class="far fa-location"></i></span></label>
                        <input wire:model="kinaddress" type="text" placeholder="Next Of Kin Address"/>
                        @error('kinaddress')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- dasboard-widget-box  end-->
        <button type="submit" class="btn color-bg float-btn">Save Changes</button>
        </form>
    </div>
</div>
