<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="{{ asset('common/plugins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="{{url('/admin/assets/plugins/dataTable/fixedHeader.bootstrap.min.css')}}">    
    <link rel="stylesheet" href="{{url('/admin/assets/plugins/dataTable/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet"
          href="{{url('admin/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">
    <link rel="stylesheet" href="{{url('admin/assets/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/assets/css/custom.css')}}">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">
            <div class="btn-group float-end">
                <a type="button" class="text-decoration-none text-dark dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, <span class="fw-bold">{{ auth::user()->applicant_name }}</span>
                </a>
                <ul class="dropdown-menu">
                    
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>

            {{-- <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <span>{{Auth::user()->applicant_name}}</span>
                </a>

                

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="">My Account</a>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div> --}}
        </ul>

    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{url('/admin/dashboard')}}" class="brand-link text-center">
            <img src="{{ url('/admin/login/img/logo.png') }}" alt="AdminLTE Logo" class="img-responsive"
                 height="80">
        </a>

        <div class="sidebar">        
            @include('admin.sidebar')
        </div>
    </aside>

    <div class="content-wrapper">
        @yield('breadcrum')
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2020 </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">

        </div>
    </footer>


    <aside class="control-sidebar control-sidebar-dark">

    </aside>
</div>

<script>
    var BASE_URL = "<?php echo url('/'); ?>";
</script>



<script src="{{ asset('common/plugins/js/jquery.min.js') }}"></script>
<script src="{{ asset('common/plugins/js/popper.min.js') }}"></script>
<script src="{{ asset('common/plugins/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="{{ url('/common/plugins/js/jquery.validate.min.js') }}"></script>

<script src="{{url('/admin/assets/plugins/dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/dataTables.buttons.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/jszip.min.js')}}"></scrip>
<script src="{{url('/admin/assets/plugins/dataTable/pdfmake.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="{{url('/admin/assets/plugins/dataTable/vfs_fonts.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/buttons.html5.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/buttons.print.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/dataTables.select.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/dataTables.responsive.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/responsive.bootstrap.min.js')}}"></script>
<script src="{{url('/admin/assets/plugins/dataTable/dataTables.bootstrap4.min.js')}}"></script>

<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<script src="{{url('admin/assets/js/adminlte.js')}}"></script>
<!-- <script src="{{url('admin/assets/js/pages/dashboard.js')}}"></script> -->
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script src="{{ url('admin/assets/js/demo.js')}}"></script>
<script src="{{ url('/admin/assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ url('/admin/assets/plugins/sweet_alert/sweetalert.min.js') }}"></script>
<script
    src="{{ url('/admin/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ url('admin/assets/js/scripts.js') }}"></script>
<script src="{{ url('admin/assets/js/datatable-listing.js') }}"></script>

@yield('scripts')

</body>
</html>
