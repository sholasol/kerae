<div>
    <section class="short-image no-padding blog-short-title">
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
				<div class="col-xs-12 col-md-9 ineedyou">
					<article class="archive-item zoom-cont2">
						<h2 class="title-negative-margin">{{$det->title}}<span class="special-color">.</span></h2>
						<a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-user"></i>{{$det->author}}</div></a>
						<a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-calendar-o"></i>{{$det->created_at->DiffForHumans()}}</div></a>
						<div class="clearfix"></div>
						<div class="title-separator-primary"></div>
						<figure><a href="#"><img src="{{asset('asset/image/blog')}}/{{$det->image}}" alt="" class="zoom" /></a></figure>
						<div class="blog-text" style="font-size: calc(100% + 2px); color: #cda231;">
						{!! $det->content !!}
						</div>
					</article>
				</div>
				<div class="col-xs-12 col-md-3 idontneedyou">
					<div class="sidebar">
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">featured offers<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-featured-cont">
                            @foreach($featProps as $featProp)
                                <div class="sidebar-featured">
                                    <a class="sidebar-featured-image" href="{{route('propertySingle', ['list'=>$featProp->id])}}">
                                        <img src="{{asset('asset/image/property')}}/{{$featProp->image}}" alt="" />
                                        <div class="sidebar-featured-type">
                                            <div class="sidebar-featured-transaction">
                                                @if ($featProp->propertytype=='Sale')
                                                    S
                                                @else
                                                    R
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                    <div class="sidebar-featured-title" style="text-transform: capitalize;"><a href="{{route('propertySingle', ['list'=>$featProp->id])}}">{{$featProp->propertytitle.' '.$featProp->location}}</a></div>
                                    <div class="sidebar-featured-price">$ {{number_format($featProp->price)}}</div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
						</div>
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">latest blog<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-blog-cont">
                            @foreach ($featBlogs as $featBlog)
							<article>
								<a href="blog-right-sidebar.html"><img src="{{asset('asset/image')}}/{{$featBlog->image}}" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">{{$featBlog->title}}</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>{{$featBlog->created_at->DiffForHumans()}}</div>
								<div class="clearfix"></div>
							</article>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
