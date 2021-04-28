<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    @include('css');

</head>
<script>
    var base_url = "{{asset('/')}}";
</script>

<body>

    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="mb-3 w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/cuba"><img class="img-fluid"
                                src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        <li class="mega-menu outside">
                            <a class="nav-link" href="#!"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                            <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col mega-box">
                                            <div class="mobile-title d-none">
                                                <h5>Mega menu</h5>
                                                <i data-feather="x"></i>
                                            </div>
                                            <div class="link-section icon">
                                                <div>
                                                    <h6>Error Page</h6>
                                                </div>
                                                <ul>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/400">Error
                                                            page 400</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/401">Error
                                                            page 401</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/403">Error
                                                            page 403</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/404">Error
                                                            page 404</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/500">Error
                                                            page 500</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/others/503">Error
                                                            page 503</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section doted">
                                                <div>
                                                    <h6> Authentication</h6>
                                                </div>
                                                <ul>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/login">Login</a>
                                                    </li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/login-one">Login
                                                            with image</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/login-bs-validation">Login
                                                            with validation</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/sign-up">Sign
                                                            Up</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/sign-up-one">SignUp
                                                            with image</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/sign-up-two">SignUp
                                                            with image</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section dashed-links">
                                                <div>
                                                    <h6>Usefull Pages</h6>
                                                </div>
                                                <ul>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/search">Search
                                                            Website</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/unlock">Unlock
                                                            User</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/forget-password">Forget
                                                            Password</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/reset-password">Reset
                                                            Password</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/maintenance">Maintenance</a>
                                                    </li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/authentication/login-bs-validation">Login
                                                            validation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section">
                                                <div>
                                                    <h6>Email templates</h6>
                                                </div>
                                                <ul>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/basic-template">Basic
                                                            Email</a></li>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/email-header">Basic
                                                            With Header</a></li>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/template-email">Ecomerce
                                                            Template</a></li>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/template-email-2">Email
                                                            Template 2</a></li>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/ecommerce-templates">Ecommerce
                                                            Email</a></li>
                                                    <li class="ps-0"><a
                                                            href="https://laravel.pixelstrap.com/cuba/email-order-success">Order
                                                            Success</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section">
                                                <div>
                                                    <h6>Coming Soon</h6>
                                                </div>
                                                <ul class="svg-icon">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/comingsoon"> <i
                                                                data-feather="file"> </i>Coming-soon</a></li>
                                                    <li><a
                                                            href="https://laravel.pixelstrap.com/cuba/comingsoon-bg-video">
                                                            <i data-feather="film"> </i>Coming-video</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/comingsoon-bg-img"><i
                                                                data-feather="image"> </i>Coming-Image</a></li>
                                                </ul>
                                                <div>
                                                    <h6>Other Soon</h6>
                                                </div>
                                                <ul class="svg-icon">
                                                    <li><a class="txt-secondary"
                                                            href="https://laravel.pixelstrap.com/cuba/sample-page"> <i
                                                                data-feather="airplay"></i>Sample Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="level-menu outside">
                            <a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Level Menu</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li>
                                    <a href="https://laravel.pixelstrap.com/cuba/file-manager" data-original-title=""
                                        title=""> <i data-feather="git-pull-request"></i><span>File manager </span></a>
                                </li>
                                <li>
                                    <a href="#!" data-original-title="" title=""> <i
                                            data-feather="users"></i><span>Users</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li>
                                            <a href="https://laravel.pixelstrap.com/cuba/users/user-profile"
                                                data-original-title="" title=""> <i data-feather="user"></i><span>User
                                                    Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="https://laravel.pixelstrap.com/cuba/users/edit-profile"
                                                data-original-title="" title=""> <i
                                                    data-feather="user-minus"></i><span>User Edit</span></a>
                                        </li>
                                        <li>
                                            <a href="https://laravel.pixelstrap.com/cuba/users/user-cards"
                                                data-original-title="" title=""> <i
                                                    data-feather="user-check"></i><span>Users Cards</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://laravel.pixelstrap.com/cuba/kanban" data-original-title=""
                                        title=""> <i data-feather="airplay"></i><span>Kanban Board</span></a>
                                </li>
                                <li>
                                    <a href="https://laravel.pixelstrap.com/cuba/bookmark" data-original-title=""
                                        title=""> <i data-feather="heart"></i><span>Bookmark</span></a>
                                </li>
                                <li>
                                    <a href="https://laravel.pixelstrap.com/cuba/social-app" data-original-title=""
                                        title=""> <i data-feather="zap"></i><span>Social App </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang"><i class="flag-icon flag-icon-vn"></i><span class="lang-txt">Việt
                                            Nam
                                        </span></div>
                                </div>
                                <div class="more_lang">
                                    <a href="https://laravel.pixelstrap.com/cuba/lang/en" class="active">
                                        <div class="lang selected" data-value="en"><i
                                                class="flag-icon flag-icon-us"></i> <span
                                                class="lang-txt">English</span><span> (US)</span></div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="star"></i></div>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front">
                                            <ul class="droplet-dropdown bookmark-dropdown">
                                                <li class="gradient-primary">
                                                    <i data-feather="star"></i>
                                                    <h6 class="f-18 mb-0">Bookmark</h6>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-4 text-center"><i data-feather="file-text"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="activity"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="users"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="clipboard"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="anchor"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="settings"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="back">
                                            <ul>
                                                <li>
                                                    <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="search...">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="d-block flip-back" id="flip-back">Back</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="cart-nav onhover-dropdown">
                            <div class="cart-box"><i data-feather="shopping-cart"></i><span
                                    class="badge rounded-pill badge-primary">2</span></div>
                            <ul class="cart-dropdown onhover-show-div">
                                <li>
                                    <h6 class="mb-0 f-20">Shoping Bag</h6>
                                    <i data-feather="shopping-cart"></i>
                                </li>
                                <li class="mt-0">
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3 img-60"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/ecommerce/01.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                            <p>Yellow(#fcb102)</p>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn quantity-left-minus" type="button"
                                                            data-type="minus" data-field=""><i
                                                                data-feather="minus"></i></button></span>
                                                    <input class="form-control input-number" type="text" name="quantity"
                                                        value="1"><span class="input-group-prepend">
                                                        <button class="btn quantity-right-plus" type="button"
                                                            data-type="plus" data-field=""><i
                                                                data-feather="plus"></i></button></span>
                                                </div>
                                            </div>
                                            <h6 class="text-end text-muted">$299.00</h6>
                                        </div>
                                        <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                    </div>
                                </li>
                                <li class="mt-0">
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3 img-60"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/ecommerce/03.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                            <p>Yellow(#fcb102)</p>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn quantity-left-minus" type="button"
                                                            data-type="minus" data-field=""><i
                                                                data-feather="minus"></i></button></span>
                                                    <input class="form-control input-number" type="text" name="quantity"
                                                        value="1"><span class="input-group-prepend">
                                                        <button class="btn quantity-right-plus" type="button"
                                                            data-type="plus" data-field=""><i
                                                                data-feather="plus"></i></button></span>
                                                </div>
                                            </div>
                                            <h6 class="text-end text-muted">$299.00</h6>
                                        </div>
                                        <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="total">
                                        <h6 class="mb-2 mt-0 text-muted">Order Total : <span
                                                class="f-right f-20">$598.00</span></h6>
                                    </div>
                                </li>
                                <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart"
                                        href="https://laravel.pixelstrap.com/cuba/ecommerce/cart">Go to shoping
                                        bag</a><a class="btn btn-block w-100 btn-secondary view-cart"
                                        href="https://laravel.pixelstrap.com/cuba/ecommerce/checkout">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li>
                                    <i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Message Box </h6>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/user/1.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body">
                                            <span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/user/2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body">
                                            <span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/user/4.jpg" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="media-body">
                                            <span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media">
                                <img class="b-r-10"
                                    src="https://laravel.pixelstrap.com/cuba/assets/images/dashboard/profile.jpg"
                                    alt="">
                                <div class="media-body">
                                    <span>{{Auth::user()->name}}</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="{{route('logout')}}"><i data-feather="log-in"> </i><span>Log out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                        <div class="ProfileCard-realName">Quốc Thái</div>
                        </div>
                        </div>
                </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends  -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Default</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/cuba"> <i
                                                data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">Default</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">

                </div>
                <script type="text/javascript">
                    var session_layout = '';
                </script>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Manager</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    @include('scripts')
</body>

</html>
