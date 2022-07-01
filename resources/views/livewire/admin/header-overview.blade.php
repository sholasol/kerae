<!-- dashboard-title -->
<div class="dashboard-title fl-wrap">
    <div class="dashboard-title-item"><span>
        @yield('title')
         {{-- @section('title', 'Dashboard') --}}
        </span></div>
    <div class="dashbard-menu-header">
        <div class="dashbard-menu-avatar fl-wrap">
            <img src="{{asset('back/images/avatar/5.jpg')}}" alt="">
            <h4>Welcome, <span>{{Auth::user()->name}}</span></h4>
        </div>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="log-out-btn   tolt" data-microtip-position="bottom"  data-tooltip="Log Out">
            <i class="far fa-power-off"></i></a>
    </div>
    <!--Tariff Plan menu-->
    <div class="tfp-det-container">
        <div class="tfp-det">
            <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
            <a href="#" class="tfp-det-btn color-bg">Details</a>
        </div>
    </div>
    <!--Tariff Plan menu end-->
</div>
<!-- dashboard-title end -->
