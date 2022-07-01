<div>
    @section('title', 'Create Model')
    {{-- @if(Session::has('success_message'))
    <div class="alert alert-success">{{ Session::get('success_message') }}</div>
    @endif --}}
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
                                <form wire:submit.prevent="createProperty"  enctype="multipart/form-data">
                                    @csrf
                                <!-- dasboard-widget-title -->
                                <div class="dasboard-widget-title fl-wrap" id="sec1">
                                    <h5><i class="fas fa-info"></i>Basic Information</h5>
                                </div>
                                <!-- dasboard-widget-title end -->
                                <!-- dasboard-widget-box  -->
                                <div class="dasboard-widget-box fl-wrap">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Model Title  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                                                <input wire:model="propertytitle" type="text" placeholder="Name of model"/>
                                                @error('propertytitle')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Property Type  <span class="dec-icon" style="border: none"></span></label>
                                                    <select wire:model="propertytype" class="chosen-select no-search-select" >
                                                        <option selected> -- select --</option>
                                                        <option>Rent</option>
                                                        <option>Sale</option>
                                                    </select>
                                                    @error('propertytype')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Model Price  <span class="dec-icon"><i class="far fa-money-bill-wave"></i></span></label>
                                                <input wire:model="price" type="number" placeholder="Model Price"/>
                                                @error('price')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- dasboard-widget-box  end-->
                                <!-- dasboard-widget-title -->
                                <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec2">
                                    <h5><i class="fas fa-street-view"></i>Location / Contacts</h5>
                                </div>
                                <!-- dasboard-widget-title end -->
                                <!-- dasboard-widget-box  -->
                                <div class="dasboard-widget-box   fl-wrap">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Location (Input this after viewing on google map)<span class="dec-icon"><i class="far fa-map-marker"></i></span></label>
                                                <input wire:model="location" type="text" placeholder="Location of Property"/>
                                                @error('location')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="map-container">
                                            {{-- <div id="singleMap" class="drag-map" data-latitude="6.4362" data-longitude="3.9588"></div> --}}
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126875.50063298157!2d3.9281875!3d6.4121057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10394c586be9f6ff%3A0xdadbee951ee4db3c!2sLekki%20Free%20Trade%20Zone!5e0!3m2!1sen!2sng!4v1649409339430!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>City</label>
                                                <input wire:model="city" type="text" placeholder="City where property is located"/>
                                                @error('city')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Phone <span class="dec-icon"><i class="far fa-phone"></i> </span> </label>
                                                <input wire:model="phone" type="text" placeholder="+7(123)987654"/>
                                                @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- dasboard-widget-box  end-->
                                <!-- dasboard-widget-title -->
                                <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec3">
                                    <h5><i class="fas fa-image"></i>Property Media</h5>
                                </div>
                                <!-- dasboard-widget-title end -->
                                <!-- dasboard-widget-box  -->
                                <div class="dasboard-widget-box fl-wrap">
                                    <div class="col-sm-12">
                                        <label>Featured Image  </label>
                                        <input wire:model="image" type="file"/>
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                        @endif
                                        @error('image')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="custom-form">
                                        <div class="add-list-media-header"  >
                                            <span>Upload up to seven(7) or more images at once.</span>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="listsearch-input-item fl-wrap">
                                            <div class="fuzone">
                                                <div class="fu-text">
                                                    <span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
                                                    <div class="photoUpload-files fl-wrap"></div>
                                                </div>
                                                <input wire:model="propertyImages" type="file" class="upload" multiple>
                                            </div>
                                            {{-- @foreach($propertyImages as $photo)
                                                @if ($photo)
                                                    <img src="{{ $photo->temporaryUrl() }}" width="120" alt="">
                                                @endif
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- dasboard-widget-box  end-->
                                <!-- dasboard-widget-title -->
                                <div class="dasboard-widget-title dwb-mar fl-wrap" id="sec4">
                                    <h5><i class="fas fa-list"></i>Model Details</h5>
                                </div>
                                <!-- dasboard-widget-title end -->
                                <!-- dasboard-widget-box  -->
                                <div class="dasboard-widget-box   fl-wrap">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div>
                                                            <label>Area (SQM): <span class="dec-icon"><i class="far fa-sort-size-down-alt"></i></span></label>
                                                            <input wire:model="area" type="number" placeholder="House Area"/>
                                                            @error('area')<p class="text-danger">{{ $message }}</p> @enderror
                                                        </div>
                                                        <div>
                                                            <label>Yard size: <span class="dec-icon"><i class="far fa-trees"></i></span></label>
                                                            <input wire:model="yardsize" type="text" placeholder="Yard size"/>
                                                            @error('yardsize')<p class="text-danger">{{ $message }}</p> @enderror
                                                        </div>
                                                        <div>
                                                            <label>Bedrooms: <span class="dec-icon"><i class="far fa-bed"></i></span></label>
                                                            <input wire:model="bedroom" type="number" placeholder="House Bedrooms"/>
                                                            @error('bedroom')<p class="text-danger">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div>
                                                            <label>Bathrooms: <span class="dec-icon"><i class="far fa-bath"></i></span></label>
                                                            <input wire:model="bathroom" type="number" placeholder="House Bathrooms"/>
                                                            @error('bathroom')<p class="text-danger">{{ $message }}</p> @enderror
                                                        </div>
                                                        <div>
                                                            <label>Garage: <span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                                                            <input wire:model="garage" type="number" placeholder="Number of cars"/>
                                                            @error('garage')<p class="text-danger">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Details Text</label>
                                                <div class="listsearch-input-item">
                                                    <textarea wire:model="propertynote" cols="40" rows="3" style="height: 235px" placeholder="Write short note on property details..." spellcheck="false"></textarea>
                                                    @error('propertynote')<p class="text-danger">{{ $message }}</p> @enderror
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
                        <div class="limit-box fl-wrap"></div>
</div>
