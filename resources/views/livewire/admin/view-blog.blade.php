<div>
    @section('title', 'View Blog')

    <div class="dasboard-wrapper fl-wrap">
        <div class="dasboard-listing-box fl-wrap">
            <div class="dasboard-opt sl-opt fl-wrap">
                <div class="dashboard-search-listing">
                    <input type="text" onclick="this.select()" placeholder="Search" value="">
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
                <a href="{{route('create-blog')}}" class="gradient-bg dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
                <!-- price-opt-->
                <div class="price-opt">
                    <span class="price-opt-title">Sort by:</span>
                    <div class="listsearch-input-item">
                        <select data-placeholder="Lastes" class="chosen-select no-search-select" >
                            <option>Lastes</option>
                            <option>Oldes</option>
                            <option>Average rating</option>
                            <option>Name: A-Z</option>
                            <option>Name: Z-A</option>
                        </select>
                    </div>
                </div>
                <!-- price-opt end-->
            </div>
            <!-- dashboard-listings-wrap-->
            <div class="dashboard-listings-wrap fl-wrap">
                <div class="row">
                    @foreach ($view as $views)

                    <!-- dashboard-listings-item-->
                    <div class="col-md-6">
                        <div class="dashboard-listings-item fl-wrap" style="height: 190px">
                            <div class="dashboard-listings-item_img">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{asset('asset/image/blog')}}/{{$views->image}}"></div>
                                </div>
                                <div class="overlay"></div>
                                <a href="{{route('blogSingle', ['blogid'=>$views->id])}}" target="_blank" class="color-bg">View</a>
                            </div>
                            <div class="dashboard-listings-item_content">
                                <h4 style="text-transform: capitalize;">
                                    <a href="{{route('blogSingle', ['blogid'=>$views->id])}}" target="_blank">
                                        <?php
                                        if (strlen($views->title)>40) {
                                                $note= Str::substr($views->title, 0, 40);
                                                echo "$note"."...";
                                            }else {
                                                echo "$views->title";
                                            }
                                        ?>
                                    </a>
                                </h4>
                                <hr style="margin: 5px 5px; opacity: 0.4;">
                                <div class="geodir-category-location" style="height: 30px">
                                    <a href="{{route('blogSingle', ['blogid'=>$views->id])}}" target="_blank" style="font-size: 15px;"><i class="fas fa-user"></i> <span>  {{$views->author}}</span></a>
                                    <a href="{{route('blogSingle', ['blogid'=>$views->id])}}" target="_blank" style="font-size: 13px;"><i class="fas fa-watch"></i> <span>  {{$views->created_at}}</span></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="dashboard-listings-item_opt">
                                    {{-- <span class="viewed-counter"><i class="far fa-wallet"></i> Price - $ {{number_format($views->price)}} </span> --}}
                                    <ul>
                                        <li><a style="width: 35px; height: 30px;" href="{{route('edit-blog', ['blogID'=>$views->id])}}" class="tolt" data-microtip-position="top-left"  data-tooltip="Edit"><i class="far fa-edit text-danger"></i></a></li>
                                        <li><a style="width: 40px; height: 30px;" onclick="confirm('Are you sure, you want to delete this blog?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $views->id }})"
                                            href="#" class="tolt" data-microtip-position="top-left"  data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dashboard-listings-item end-->
                    @endforeach
                </div>
            </div>
            <!-- dashboard-listings-wrap end-->
        </div>
        <!-- pagination-->
        {{-- {{$viewss->links()}} --}}
        {{-- <div class="pagination float-pagination">
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            <a href="#" >1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        </div> --}}
        <!-- pagination end-->
    </div>
</div>
</div>
