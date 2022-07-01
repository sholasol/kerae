<div>
    <div>
        <section class="no-padding" style="height: 280px; background: #152560 url({{ asset('assets/5.jpg') }}) no-repeat center; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 short-image-title">
                        <h5 class="subtitle-margin second-color">from</h5>
                        <h1 class="second-color">our blog</h1>
                        <div class="short-title-separator"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-light section-top-shadow" style="background: white;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        @foreach ($blogs as $blog)
                            <article class="archive-item zoom-cont2" style="background: black; padding: 30px 20px;">
                                <a href="blog-right-sidebar.html" class="title-link"><h2 class="title-negative-margin">{{$blog->title}}<span class="special-color">.</span></h2></a>
                                <a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-user"></i>{{$blog->author}}</div></a>
                                <a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-calendar-o"></i>{{$blog->created_at->diffForHumans()}}</div></a>
                                {{-- <a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-folder-open-o"></i>Some category</div></a> --}}
                                {{-- <a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-comment-o"></i>2</div></a> --}}
                                <div class="clearfix"></div>
                                <div class="title-separator-primary"></div>
                                <div class="containBlog">
                                    <figure style="contain:content;" class="col-md-5"><a href="{{route('blogSingle', ['blogid'=>$blog->id])}}">
                                        <img style="background-size: cover;" src="{{asset('asset/image/blog')}}/{{$blog->image}}" alt="" class="zoom" /></a>
                                    </figure>
                                    <div class="blog-text col-md-7" style="font-size: calc(100% + 1px); text-align:left; color: #cda231;">

                                        <?php
                                            // $content = $blog->content;
                                            // $html = html_entity_decode($content);
                                            // if (strlen($html)>2000) {
                                            //     $subbed = substr($html,0,200);
                                            //     echo "$subbed";
                                            // }else {
                                            //     echo "$html";
                                            // }
                                            if (strlen($blog->content)>200) {
                                                $note= Str::substr($blog->content, 0, 200);
                                                echo "$note"."...]";
                                            }else {
                                                echo "$blog->content";
                                            }

                                        ?>

                                    </div>
                                </div>
                                <a href="{{route('blogSingle', ['blogid'=>$blog->id])}}" class="button-primary pull-right">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                                <div class="clearfix"></div>
                            </article>
                            <br><br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
