<div>
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
        <form wire:submit.prevent="save"  enctype="multipart/form-data">
         {{-- @csrf --}}
         <div class="dasboard-widget-box fl-wrap">
            <div class="custom-form">
                <div class="col-sm-12">
                    <input wire:model="images" type="file" class="upload" multiple>
                    @error('images')<p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
         </div>
         <button type="submit" class="btn color-bg float-btn">Save Upload</button>
        </form>
    </div>
</div>
