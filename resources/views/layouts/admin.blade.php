<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from homeradar.kwst.net/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Feb 2022 18:55:48 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        {{-- <title>Kerae Homes:: Dashboard</title> --}}
        <title>@yield('title')</title>

        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('back/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('back/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('back/css/dashboard-style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('back/css/color.css')}}">

        <!--=============== datatables ===============-->
        <link rel="stylesheet" href="{{asset('back/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('back/css/buttons.dataTables.min.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('back/images/icon.png')}}">
        <style>
            .text-danger {
                color: crimson;
            }
        </style>
        @livewireStyles
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <svg>
                    <defs>
                        <filter id="goo">
                            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                            <fecolormatrix in="blur"   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                            <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!--loader end-->
        <!-- main -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!--  logo  -->
                <div class="logo-holder"><a href="{{route('dashboard')}}"><img src="{{asset('back/images/logo.png')}}" alt=""></a></div>
                <!-- logo end  -->
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap color-bg nvminit">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!-- header-search button  -->
                <div class="header-search-button">
                    <i class="fal fa-search"></i>
                    <span>Search...</span>
                </div>
                <!-- header-search button end  -->
                <!--  add new  btn -->
                <div class="add-list_wrap">
                    <a href="/create" class="add-list color-bg"><i class="fal fa-plus"></i> <span>Add Listing</span></a>
                </div>
                <!--  add new  btn end -->

                <!--  cart-btn   -->
                <div class="cart-btn  tolt show-header-modal" data-microtip-position="bottom" >
                    <i class="fal fa-bell"></i>
                    <span class="cart-btn_counter color-bg">5</span>
                </div>
                <!--  cart-btn end -->
                <!--  login btn -->
                <div class="show-reg-form dasbdord-submenu-open"><img src="{{asset('back/images/avatar/5.jpg')}}" alt=""></div>
                <!--  login btn  end -->
                <!--  dashboard-submenu-->
                <div class="dashboard-submenu">
                    <div class="dashboard-submenu-title fl-wrap">Welcome , <span>{{Auth::user()->name}}</span></div>
                    <ul>
                        <li><a href="dashboard.html"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                        <li><a href="/create"> <i class="fal fa-file-plus"></i>Add Listing</a></li>
                        <li><a href="l"><i class="fal fa-user-edit"></i>Settings</a></li>
                    </ul>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="color-bg db_log-out">
                        <i class="far fa-power-off"></i>
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!--  dashboard-submenu  end -->
                <!-- header-search-wrapper -->
                <div class="header-search-wrapper novis_search">
                    <div class="header-serach-menu">
                        <div class="custom-switcher fl-wrap">
                            <div class="fieldset fl-wrap">
                                <input type="radio" name="duration-1"  id="buy_sw" class="tariff-toggle" checked>
                                <label for="buy_sw">Buy</label>
                                <input type="radio" name="duration-1" class="tariff-toggle"  id="rent_sw">
                                <label for="rent_sw" class="lss_lb">Rent</label>
                                <span class="switch color-bg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-form">
                        <form method="post"  name="registerform">
                            <label>Keywords </label>
                            <input type="text" placeholder="Address , Street , State..." value=""/>
                            <label >Categories</label>
                            <select data-placeholder="Categories" class="chosen-select on-radius no-search-select" >
                                <option>All Categories</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Hotel</option>
                                <option>Villa</option>
                                <option>Office</option>
                            </select>
                            <label style="margin-top:10px;" >Price Range</label>
                            <div class="price-rage-item fl-wrap">
                                <input type="text" class="price-range" data-min="100" data-max="100000"  name="price-range1"  data-step="1" value="1" data-prefix="$">
                            </div>
                            <button onclick="location.href='listing.html'" type="button"  class="btn float-btn color-bg"><i class="fal fa-search"></i> Search</button>
                        </form>
                    </div>
                </div>
                <!-- header-search-wrapper end  -->
                <!-- wishlist-wrap-->
                <div class="header-modal novis_wishlist tabs-act">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="current"><a href="#tab-wish">  Wishlist <span>- 3</span></a></li>
                    </ul>
                    <!--tabs -->
                    <div class="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-wish" class="tab-content first-tab">
                                <!-- header-modal-container-->
                                <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                                    <!--widget-posts-->
                                    <div class="widget-posts  fl-wrap">
                                        <ul class="no-list-style">
                                            <li>
                                                <div class="widget-posts-img"><a href="listing-single.html"><img src="{{asset('back/images/all/small/1.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="listing-single.html">Affordable Urban Room</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square  , NJ, USA</a></div>
                                                    <div class="widget-posts-descr-price"><span>Price: </span> $ 1500 / per month</div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-posts-img"><a href="listing-single.html"><img src="{{asset('back/images/all/small/2.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="listing-single.html">Family House</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                                    <div class="widget-posts-descr-price"><span>Price: </span> $ 50.000</div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-posts-img"><a href="listing-single.html"><img src="{{asset('back/images/all/small/3.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="listing-single.html">Apartment to Rent</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                    <div class="widget-posts-descr-price"><span>Price: </span> $100 / per night</div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- widget-posts end-->
                                </div>
                                <!-- header-modal-container end-->
                                <div class="header-modal-top fl-wrap">
                                    <div class="clear_wishlist color-bg"><i class="fal fa-trash-alt"></i> Clear all</div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                    </div>
                </div>
                <!--wishlist-wrap end -->
            </header>
               <!-- wrapper  -->
               <div id="wrapper">
                <!-- dashbard-menu-wrap -->
                <div class="dashbard-menu-overlay"></div>
                <div class="dashbard-menu-wrap">
                    <div class="dashbard-menu-close"><i class="fal fa-times"></i></div>
                    <div class="dashbard-menu-container">
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Main</h3>
                            <ul class="no-list-style">
                                <li><a href="{{route('dashboard')}}"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                                <li><a href="{{route('investors')}}"><i class="fal fa-shopping-cart"></i> Investors</a></li>
                                <li><a href="{{route('estate-listing')}}"><i class="fal fa-home"></i>Estates</a></li>
                                {{-- <li><a href="{{route('estate')}}"><i class="fal fa-chart-line"></i>Create Estate</a></li> --}}
                                <li><a href="{{route('agents')}}"><i class="fal fa-users"></i> Agents List</a></li>
                                <li><a href="{{route('viewSales')}}"><i class="fal fa-briefcase"></i> Sales</a></li>
                                <li><a href="{{route('staff')}}"><i class="fal fa-users"></i> Staffs List</a></li>
                                <li><a href="{{route('create')}}"><i class="fal fa-home"></i> Create Listings</a></li>
                                <li><a href="{{route('create-staff')}}"><i class="fal fa-user-plus"></i> Create Staffs</a></li>
                                <li><a href="{{route('viewListing')}}"><i class="fal fa-home"></i> View Listings</a></li>
                                <li><a href="{{route('subscribers')}}"><i class="fal fa-briefcase"></i> Subscribers</a></li>
                                <li><a href="{{route('contacts')}}"><i class="fal fa-book"></i> Contacts</a></li>
                                <li><a href="{{route('view-blog')}}"><i class="fal fa-comment"></i> Blogs</a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                    </div>
                    <div class="dashbard-menu-footer"> &#169;  Hybridsoft LTD 2022 .  All Rights Reserved.</div>
                </div>
                <!-- dashbard-menu-wrap end  -->
                <!-- content -->
                <div class="dashboard-content">
                    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
                    <div class="container dasboard-container">
                    @livewire('admin.header-overview')

{{$slot}}


<!-- dashboard-footer -->
<div class="dashboard-footer">
    <div class="dashboard-footer-links fl-wrap">
        <span>Helpfull Links:</span>
        <ul>
            <li><a href="about.html">About  </a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="help.html">Help Center</a></li>
        </ul>
    </div>
    <a href="#main" class="dashbord-totop  custom-scroll-link"><i class="fas fa-caret-up"></i></a>
</div>
<!-- dashboard-footer end -->
</div>
<!-- content end -->
<div class="dashbard-bg gray-bg"></div>
</div>
<!-- wrapper end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="{{asset('back/js/jquery.min.js')}}"></script>
<script src="{{asset('back/js/plugins.js')}}"></script>
<script src="{{asset('back/js/scripts.js')}}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places"></script> --}}
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4WUTzRVdoGV2TIPMFHYh7fgt2uG1km8&libraries=places&callback=activatePlaces"></script>
<script src="{{asset('back/js/map-add.js')}}"></script>
<script src="{{asset('back/js/dashboard.js')}}"></script>

<!-- Custom Datatable -->
<script src="{{asset('back/js/jquery-1.12.3.js')}}"></script>
<script src="{{asset('back/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('back/js/jszip.min.js')}}"></script>
<script src="{{asset('back/js/pdfmake.min.js')}}"></script>
<script src="{{asset('back/js/vfs_fonts.js')}}"></script>
<script src="{{asset('back/js/buttons.html5.min.js')}}"></script>
{{-- <script src="{{asset('back/js/tinymce.min.js')}}"></script> --}}
<script src="https://cdn.tiny.cloud/1/faft3sejlsum17i828rexj7it0a5xngu7swu6bxsbtcu0phb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excel',
                text: 'Excel',
                className: 'exportExcel',
                filename: 'Kerea_Excel',
                exportOptions: { modifier: { page: 'all'} }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'exportExcel',
                filename: 'Kerea_Csv',
                exportOptions: { modifier: { page: 'all'} }
            },
            {
                extend: 'pdf',
                text: 'PDF',
                className: 'exportExcel',
                filename: 'Kerea_Pdf',
                exportOptions: { modifier: { page: 'all'} }
            }]
        });

    });
</script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> /
<script>
    window.addEventListener('success', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Operation successful',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('dashboard') }}';
        });
    })
</script>

<script>
    window.addEventListener('listing-success', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Property created successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('create') }}';
        });
    })
</script>
<script>
    window.addEventListener('estate-success', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Estate created successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('estate-listing') }}';
        });
    })
</script>
<script>
    window.addEventListener('listing-update', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Listing Updated Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('viewListing') }}';
        });
    })
</script>
<script>
    window.addEventListener('listing-error', event => {
        Swal.fire({
        icon: 'warning',
        title: 'Error',
        text: 'Image field is empty',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('upload') }}';
        });
    })
</script>

<script>
    window.addEventListener('update-agent', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Agent updated successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('agents') }}';
        });
    })
</script>

<script>
    window.addEventListener('staff-success', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Staff Created Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('staff') }}';
        });
    })
</script>

<script>
    window.addEventListener('blog', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Blog Created Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('view-blog') }}';
        });
    })
</script>

<script>
    window.addEventListener('updateblog', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Blog Updated Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('view-blog') }}';
        });
    })
</script>
<script>
    window.addEventListener('deleteblog', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Blog deleted Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('view-blog') }}';
        });
    })
</script>
<script>
    window.addEventListener('create-sales', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Sales Registered Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('viewSales') }}';
        });
    })
</script>
<script>
    window.addEventListener('update-sales', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Sales Updated Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('viewSales') }}';
        });
    })
</script>
<script>
    window.addEventListener('delete-sales', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Sales Deleted Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('viewSales') }}';
        });
    })
</script>
<script>
    window.addEventListener('staff-update', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Staff Updated Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('staff') }}';
        });
    })
</script>
<script>
    window.addEventListener('staff-delete', event => {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Staff Updated Successfully',
        showConfirmButton: true,
        timer: 2000
        }).then(function() {
            window.location = '{{ route('staff') }}';
        });
    })
</script>


@livewireScripts()
@stack('scripts')
@yield('scripts')
</body>

<!-- Mirrored from homeradar.kwst.net/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Feb 2022 18:56:19 GMT -->
</html>
