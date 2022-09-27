<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('common/plugins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/plugins/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css?v='.rand(1,99)) }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css?v='.rand(1,99)) }}" rel="stylesheet">

    <script src="{{ asset('common/plugins/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="{{ asset('common/plugins/js/popper.min.js') }}"></script>
    <script src="{{ asset('common/plugins/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('common/plugins/js/sweetalert.min.js') }}"></script> --}}
    <script src="{{ asset('common/js/common_function.js?v='.rand(1,99)) }}"></script>
    <script src="{{ asset('front/js/script.js?v='.rand(1,99)) }}"></script>
    <script src="{{ asset('front/js/upload_file.js?v='.rand(1,99)) }}"></script>
    <script src="{{ asset('front/js/validation.js?v='.rand(1,99)) }}"></script>

    <title>BCPH - @yield('title')</title>
    @yield('style')
</head>
<body>
    <div class="loader" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff !important;
    z-index: 99999;
    margin: 0px auto;
    text-align: center;
    background-image: url({{asset('front/images/loader.gif')}});
    background-position: center center;
    background-repeat: no-repeat; 
    display:none">
    </div>

    @auth
        <header class="d-print-none">
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group float-end">
                          <a type="button" class="text-decoration-none text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, <span class="fw-bold">{{ auth::user()->applicant_name }}</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('changePassword') }}">Change Password</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endauth

    @yield('content')
					
    <script>
        var baseUrl = "{{url('/') }}";
    </script>
    @yield('script')
</body>
</html>