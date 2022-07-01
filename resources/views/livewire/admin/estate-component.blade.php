<div>
    @section('title', 'New Estate')
    <div class="dasboard-wrapper fl-wrap no-pag">

        <form wire:submit.prevent="createEstate" >
            @csrf
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title fl-wrap" id="sec1">
            <h5><i class="fas fa-info"></i>Estate Informations</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box fl-wrap">
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Estate Title  <span class="dec-icon"><i class="far fa-briefcase"></i></span></label>
                        <input wire:model="estate" type="text" placeholder="Estate Name"/>
                        @error('estate')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="col-sm-12">
                        <label>Featured Image  </label>
                        <input wire:model="image" type="file"/>
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                        @endif
                    </div>

                    <div class="col-sm-12">
                        <label>Featured Video  </label>
                        <input wire:model="video" type="file"/>
                        @if ($video)
                            <img src="{{ $video->temporaryUrl() }}" width="120" alt="">
                        @endif
                    </div>

                    <div class="col-sm-12">
                        <label>Estate Description </label>
                        <textarea wire:model="description"  ></textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-12">
                        <label>Estate Location <span class="dec-icon"><i class="far fa-map-marker"></i></span></label>
                        <input wire:model="address" type="text" placeholder="Estate Location"/>
                        @error('address')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>

                </div>
            </div>
        </div>

        <!-- dasboard-widget-box  end-->
        <!-- dasboard-widget-title -->


        <button type="submit" class="btn color-bg float-btn">Save Changes</button>
        </form>
    </div>
</div>

<div>

</div>

