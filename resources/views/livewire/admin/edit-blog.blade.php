<div>
    @section('title', 'Update Blog')
    <div class="dasboard-wrapper fl-wrap no-pag">
        {{-- <div class="dasboard-scrollnav-wrap scroll-to-fixed-fixed scroll-init2 fl-wrap">
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
        </div> --}}
        <form wire:submit.prevent="editBlog"  enctype="multipart/form-data">
            @csrf
        <!-- dasboard-widget-title -->
        <div class="dasboard-widget-title fl-wrap" id="sec1">
            <h5><i class="fas fa-info"></i>Create Blog.</h5>
        </div>
        <!-- dasboard-widget-title end -->
        <!-- dasboard-widget-box  -->
        <div class="dasboard-widget-box fl-wrap">
            <div class="custom-form">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Blog Title  <span class="dec-icon"><i class="far fa-list"></i></span></label>
                        <input wire:model="title" type="text" placeholder="Title of your Blog"/>
                        @error('title')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label> Author  <span class="dec-icon"><i class="far fa-user"></i></span></label>
                        <input wire:model="author" type="text" placeholder="Author name"/>
                        @error('author')<p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="col-sm-6">
                        <label> Blog Image  <span class="dec-icon"><i class="far fa-file"></i></span></label>
                        <input wire:model="newimage" type="file"/>
                        @error('newimage')<p class="text-danger">{{ $message }}</p> @enderror
                        @if ($newimage)
                            <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                        @else
                            <img src="{{asset('asset/image/blog')}}/{{ $image }}" width="120" alt="">
                        @endif
                    </div>
                    <div class="col-sm-12">
                        <label>Blog Content</label>
                        <div class="input-box"  wire:ignore>
                            <textarea name="form_message" id="description" placeholder="Content...." wire:model="content"></textarea>
                            @error('content')<p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        {{-- <div class="listsearch-input-item" wire:ignore>
                            <textarea wire:model="content" id="description" cols="40" rows="3" style="height: 235px" placeholder="Write content of blog here..." spellcheck="true"></textarea>
                            @error('content')<p class="text-danger">{{ $message }}</p> @enderror
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- dasboard-widget-box  end-->
        <button type="submit" class="btn color-bg float-btn">Save Changes</button>
        </form>
    </div>
</div>



@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val(); //d_data is variable for description data
                        @this.set('content', d_data);
                    });
                }
            });
        });
    </script>
@endpush
