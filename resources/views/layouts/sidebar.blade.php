<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="https://laravel.pixelstrap.com/cuba"><img class="img-fluid for-light"
                    src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo.png" alt=""><img
                    class="img-fluid for-dark"
                    src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{route('home')}}"><img class="img-fluid"
                    src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{route('home')}}"><img class="img-fluid"
                                src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General </h6>
                            <p class="lan-2">Dashboards,widgets &amp; layout.</p>
                        </div>
                    </li> --}}
                    <li class="sidebar-list">
                        <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title active"
                            href="javascript:void(0);" data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg><span class="lan-3">Component</span>
                            <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: block">
                            <li><a class="lan-4 active" href="javascript:void(0);"
                                    data-bs-original-title="" title="">JqxDataTable</a></li>
                            <li><a class="lan-5 " href="javascript:void(0);"
                                    data-bs-original-title="" title="">SelectBox</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
