<div>
    @section('title', 'Dashboard')


    <div class="dasboard-wrapper fl-wrap no-pag">
        <div class="dashboard-stats-container fl-wrap">
            <div class="row">
                <!--dashboard-stats-->
                <div class="col-md-3">
                    <div class="dashboard-stats fl-wrap">
                        <i class="fal fa-users"></i>
                        <h4>Active Realtors</h4>
                        <div class="dashboard-stats-count">{{$realtor}}</div>
                    </div>
                </div>
                <!-- dashboard-stats end -->

                <!--dashboard-stats-->
                <div class="col-md-3">
                    <div class="dashboard-stats fl-wrap">
                        <i class="fal fa-home"></i>
                        <h4>Estates</h4>
                        <div class="dashboard-stats-count">{{$estate}}<span>(<strong>{{$list}}</strong> Models)</span></div>
                    </div>
                </div>
                <!-- dashboard-stats end -->
                <!--dashboard-stats-->
                <div class="col-md-3">
                    <div class="dashboard-stats fl-wrap">
                        <i class="fal fa-chart-bar"></i>
                        <h4>Model Views</h4>
                        <div class="dashboard-stats-count">{{$list}}<span>(<strong>{{$estate}}</strong> Estates)</span></div>
                    </div>
                </div>
                <!-- dashboard-stats end -->
                <!--dashboard-stats-->
                <div class="col-md-3">
                    <div class="dashboard-stats fl-wrap">
                        <i class="fal fa-heart"></i>
                        <h4>Prequalify</h4>
                        <div class="dashboard-stats-count">{{$pre}}<span>( Customers Inquiries)</span></div>
                    </div>
                </div>
                <!-- dashboard-stats end -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                {{-- <div class="notification success-notif  fl-wrap">
                    <p>Your listing <a href="#">Family house in Brooklyn</a> has been approved!</p>
                    <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
                </div> --}}
                <div class="dashboard-widget-title fl-wrap">Your  Statistic</div>
                <div class="dasboard-content fl-wrap">
                    <!-- chart-wra-->
                    <div class="chart-wrap   fl-wrap">
                        <div class="chart-header fl-wrap">
                            <div class="listsearch-input-item">
                                <select data-placeholder="Week" class="chosen-select no-search-select" >
                                    <option>Week</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                </select>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                        <canvas id="canvas-chart"></canvas>
                    </div>
                    <!--chart-wrap end-->
                </div>
                <div class="dashboard-widget-title fl-wrap">Enquiries Activites</div>
                <div class="dashboard-list-box  fl-wrap">
                    @foreach ($ques as $que)
                    <!-- dashboard-list end-->
                    <div class="dashboard-list fl-wrap">
                        <div class="dashboard-message">
                            <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                            <div class="main-dashboard-message-icon color-bg"><i class="far fa-check"></i></div>
                            <div class="main-dashboard-message-text">
                                <p>{{ $que->fullname }} is intrested in <a href="{{ route('subscribers') }}">{{ $que->estate }}</a> and willing to invest {{ $que->invamount }}! </p>
                            </div>
                            <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> {{ $que->created_at->DiffForHumans() }}</div>
                        </div>
                    </div>
                    <!-- dashboard-list end-->
                    @endforeach

                </div>
            </div>
            <div class="col-md-4">
                <!--box-widget-->
                <div class="dasboard-widget fl-wrap">
                    <div class="dasboard-widget-title fl-wrap">
                        <h5><i class="fas fa-user"></i>Recent Realtors</h5>
                    </div>
                    <div class="chat-contacts fl-wrap">
                        @foreach ($agents as $agent)

                        <!-- chat-contacts-item-->
                        <a class="chat-contacts-item" href="#">
                            <div class="dashboard-message-avatar">
                                <img src="{{asset('back/images/avatar/2.jpg')}}" alt="">
                                <div class="message-counter">2</div>
                            </div>
                            <div class="chat-contacts-item-text">
                                <h4>{{ $agent->firstname." ".$agent->lastname }}</h4>
                                <span>{{ $agent->created_at->DiffForHumans() }} </span>
                                <p>{{ $agent->bio }}</p>
                            </div>
                        </a>
                        <!-- chat-contacts-item -->
                        @endforeach
                    </div>
                </div>
                <!--box-widget end -->
                <!--box-widget-->
                <div class="box-widget fl-wrap">
                    <div class="banner-widget fl-wrap">
                        <div class="bg-wrap bg-parallax-wrap-gradien">
                            <div class="bg  "  data-bg="{{asset('back/images/all/blog/1.jpg')}}"></div>
                        </div>
                        <div class="banner-widget_content">
                            <h5>Participate in our loyalty program. Refer a friend and get a discount.</h5>
                            <a href="#" class="btn float-btn color-bg small-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <!--box-widget end -->
            </div>
        </div>
    </div>
</div>

</div>
