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
    <title>Login Manager</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="https://laravel.pixelstrap.com/cuba/dashboard/index"><img
                                    class="img-fluid for-light"
                                    src="{{asset('assets/images/logo/logo.png')}}"
                                    alt="looginpage"><img class="img-fluid for-dark"
                                    src="{{asset('assets/images/logo/logo_dark.png')}}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="" id="login-form">
                                @csrf
                                <h4>Đăng nhập</h4>
                                @if (Session::has('error'))
                                    <h1></h1>
                                    <div class="alert alert-secondary dark alert-dismissible fade show" role="alert"><strong>{!!Session::get('error')!!}</strong>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
                                     </div>
                                @endif

                                {{-- <p>Enter your email & password to login</p> --}}
                                <div class="form-group">
                                    <label class="col-form-label">Tên đăng nhập</label>
                                    <input class="form-control" id="username" name="username" type="username" value="{{ old('username') }}" autocomplete="username">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Mật khẩu</label>
                                    <input class="form-control" id="password" type="password" name="password"  autocomplete="current-password">
                                    <div class="show-hide"><span class="show"></span></div>
                                    <span class="invalid-feedback">Vui lòng nhập mật khẩu</span>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Nhớ mật khẩu</label>
                                    </div>
                                    <a class="link"
                                        href="https://laravel.pixelstrap.com/cuba/authentication/forget-password">Quên mật khẩu?</a>
                                    <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
                                </div>
                                {{-- <h6 class="text-muted mt-4 or">Hoặc đăng nhập với</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light"
                                            href="https://www.linkedin.com/login" target="_blank"><i
                                                class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a
                                            class="btn btn-light" href="https://twitter.com/login?lang=en"
                                            target="_blank"><i class="txt-twitter"
                                                data-feather="twitter"></i>twitter</a><a class="btn btn-light"
                                            href="https://www.facebook.com/" target="_blank"><i class="txt-fb"
                                                data-feather="facebook"></i>facebook</a></div>
                                </div> --}}
                                <p class="mt-4 mb-0">Chưa có tài khoản ?<a class="ms-2"
                                        href="https://laravel.pixelstrap.com/cuba/authentication/sign-up">Tạo tài khoản mới</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- Plugin used-->
    <!-- Custom validate start -->
    <script src="{{asset('assets/custom/validator.js')}}"></script>
    <!-- Custom validate end -->
    <script>
        Validator({
            form:'#login-form',
            rules:[
                Validator.isRequired('#username','Tên đăng nhập không được bỏ trống!'),
                Validator.isEmail('#username'),
                Validator.isRequired('#password','Mật khẩu không được bỏ trống!'),
                Validator.minLength('#password',6,'Mật khẩu không được dưới 6 ký tự!')
            ]
        })
    </script>
</body>

</html>
