<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('common/plugins/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('common/plugins/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css?v=' . rand(1, 99)) }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css?v=' . rand(1, 99)) }}" rel="stylesheet">
    <link href="{{ asset('front/theme_css/style.css?v=' . rand(1, 99)) }}" rel="stylesheet">
    {{-- <link href="{{ asset('front/theme_css/core/assets/css/sway-font.css?v=' . rand(1, 99)) }}" rel="stylesheet"> --}}


    <script src="{{ asset('common/plugins/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="{{ asset('common/plugins/js/popper.min.js') }}"></script>
    <script src="{{ asset('common/plugins/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('common/plugins/js/sweetalert.min.js') }}"></script> --}}
    <script src="{{ asset('common/js/common_function.js?v=' . rand(1, 99)) }}"></script>
    <script src="{{ asset('front/js/script.js?v=' . rand(1, 99)) }}"></script>
    <script src="{{ asset('front/js/upload_file.js?v=' . rand(1, 99)) }}"></script>
    <script src="{{ asset('front/js/validation.js?v=' . rand(1, 99)) }}"></script>

    <title>BCPH - @yield('title')</title>
    @yield('style')
</head>

<body>
    <div class="loader"
        style="position: fixed; top: 0;left: 0; width: 100%; height: 100%; background-color: #fff !important;
    z-index: 99999; margin: 0px auto; text-align: center; background-image: url({{ asset('front/images/loader.gif') }});
    background-position: center center;background-repeat: no-repeat; 
    display:none">
    </div>

    <nav class="no-print" style="    box-shadow: 0px 2px 40px 0px hsl(0deg 0% 6% / 5%);">
        <div class="topbar tb-border-design visible-on-mobile">
            <div class="container">
                <div class="topbar-left-content ">
                    <div class="topbar-contact"><span class="topbar-phone"><a href="tel:+91(0)172-2688519"><i
                                    class="sway-phone-topbar fas"
                                    aria-hidden="true"></i><span>+91(0)172-2688519</span></a></span><span
                            class="topbar-phone"><a href="tel:+91-8195017269"><i class="sway-phone-topbar fas"
                                    aria-hidden="true"></i><span>+91-8195017269</span></a></span><span
                            class="topbar-email"><a href="mailto:lawbhawan37@gmail.com"><i class="sway-mail-topbar far"
                                    aria-hidden="true"></i><span>lawbhawan37@gmail.com</span></a></span><span
                            class="topbar-opening-hours"><i class="sway-schedule-topbar far"
                                aria-hidden="true"></i><span>Monday to Saturday 10:00 AM – 5:00 PM, Sunday -
                                Closed</span></span></div>
                </div>
                <div class="topbar-right-content ">
                    <div class="topbar-socials">
                        <ul class="redux-social-media-list clearfix"></ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-expand-lg menubar main-nav-right">
            <div class="container" style="max-width: 1240px;">
                {{-- <div id="logo"> --}}
                <a class="logo" href="http://112.196.117.52/bcph_website" title="BCPH">
                    <img src="{{ asset('front/images/logo.png') }}">
                </a>
                {{-- </div> --}}
                {{-- <div class="navbar-header page-scroll"> --}}
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- </div> --}}
                <div id="main-menu" class="collapse navbar-collapse background-dropdown-effect justify-content-end">
                    <ul id="menu-logged-in-main-menu" class="nav navbar-nav">
                        <li id="menu-item-9782"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-9782 active">
                            <a href="http://112.196.117.52/bcph_website/">Home</a>
                        </li>
                        <li id="menu-item-9784"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9784"><a
                                href="http://112.196.117.52/bcph_website/about-us/">About Us</a></li>
                        <li id="menu-item-9791"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9791"><a
                                href="http://112.196.117.52/bcph_website/members/">Members</a></li>
                        <li id="menu-item-9790"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9790">
                            <a href="http://112.196.117.52/bcph_website/events/">Events</a>
                            {{-- <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-9796"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9796"><a
                                        href="http://112.196.117.52/bcph_website/event-dashboard/">Event Dashboard</a>
                                </li>
                                <li id="menu-item-9788"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9788"><a
                                        href="http://112.196.117.52/bcph_website/event-organizers/">Event Organizers</a>
                                </li>
                                <li id="menu-item-9789"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9789"><a
                                        href="http://112.196.117.52/bcph_website/event-venues/">Event Venues</a></li>
                                <li id="menu-item-9792"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9792"><a
                                        href="http://112.196.117.52/bcph_website/organizer-dashboard/">Organizer
                                        Dashboard</a></li>
                                <li id="menu-item-9793"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9793"><a
                                        href="http://112.196.117.52/bcph_website/post-an-event/">Post an Event</a></li>
                            </ul>
                            <span class="mobile-dropdown"></span> --}}
                        </li>
                        <li id="menu-item-9786"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9786"><a
                                href="http://112.196.117.52/bcph_website/downloads/">Downloads</a></li>
                        {{-- <li id="menu-item-9783"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9783"><a
                                href="http://112.196.117.52/bcph_website/blog/">Blog</a></li> --}}
                        <li id="menu-item-9829"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9829"><a
                                href="http://112.196.117.52/bcph_website/useful-links/">Useful Links</a></li>
                        <li id="menu-item-9785"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9785"><a
                                href="{{ env('FORM_URL') }}/contact-us/">Contact Us</a></li>
                    </ul>
                </div>
                <div class="main-nav-extra-content">
                    <div class="search-cart-wrapper">
                    </div>
                    <div class="header-bttn-wrapper">
                        @auth
                            <div class="btn-group float-end">
                                <a type="button" class="text-decoration-none text-dark dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="padding: 10px 0;">
                                    Welcome, <span class="fw-bold">{{ auth::user()->applicant_name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('changePassword') }}">Change Password</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        @endauth
                        @guest
                            <a class="modal-menu-item tt_button tt_primary_button btn_primary_color default_header_btn default_header_btn"
                                href="{{ env('FORM_URL') }}"
                                style="color: #fff; background: #C8102E; font-weight: 500;">Apply Now</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @auth
        {{-- <header class="d-print-none">
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group float-end">
                            <a type="button" class="text-decoration-none text-dark dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, <span class="fw-bold">{{ auth::user()->applicant_name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('changePassword') }}">Change Password</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}
    @endauth

    @yield('content')

    <footer id="footer" class="fixed underline-effect no-print">
        <div class="upper-footer" style="">
            <div class="container">
                <!-- <div class="footer-bar ">
                 <div class="footer-nav-menu">
                    <ul id="menu-footer-menu" class="navbar-footer">
                       <li id="menu-item-8923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8923"><a href="#">About</a></li>
                       <li id="menu-item-8927" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8927"><a href="#">Contact us</a></li>
                    </ul>
                 </div>
                 <div class="footer-socials-bar">
                    <ul class="redux-social-media-list clearfix"></ul>
                 </div>
              </div> -->
                <div class="footer-widget-area row">
                    <div
                        class="first-widget-area footer-widget-column col-xs-12 col-sm-12 col-md-4 col-lg-4 text-left">
                        <div id="custom_html-2" class="widget_text footer_widget widget widget_custom_html">
                            <h5 class="widget-title"><span>ABOUT US</span></h5>
                            <div class="textwidget custom-html-widget">The Bar Council of Punjab &amp; Haryana,
                                Chandigarh is an Autonomous body est-
                                ablished and constituted in the year 1961 under the provisions of Advocates Ac-
                                t 1961 which provide for establishment of State Bar Councils in Section 3 there-
                                of with a maximum of 25 elected members.
                            </div>
                        </div>
                    </div>
                    <div
                        class="second-widget-area footer-widget-column col-xs-12 col-sm-12 col-md-2 col-lg-2 text-left">
                        <div id="nav_menu-1" class="footer_widget widget widget_nav_menu">
                            <h5 class="widget-title"><span>IMPORTANT LINK</span></h5>
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="menu">
                                    <li id="menu-item-9490"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9490">
                                        <a href="http://112.196.117.52/bcph_website/" aria-current="page">Home</a>
                                    </li>
                                    <li id="menu-item-9743"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9743">
                                        <a href="http://112.196.117.52/bcph_website/about-us/">About Us</a>
                                    </li>
                                    <li id="menu-item-9742"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9742">
                                        <a href="http://112.196.117.52/bcph_website/members/">Members</a>
                                    </li>
                                    <li id="menu-item-9776"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9776">
                                        <a href="http://112.196.117.52/bcph_website/events/">Events</a>
                                    </li>
                                    <li id="menu-item-9761"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9761">
                                        <a href="http://112.196.117.52/bcph_website/downloads/">Downloads</a>
                                    </li>
                                    {{-- <li id="menu-item-9740"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9740">
                                        <a href="http://112.196.117.52/bcph_website/blog/">Blog</a>
                                    </li> --}}
                                    <li id="menu-item-9741"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9741">
                                        <a href="http://112.196.117.52/bcph_website/contact-us/">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="third-widget-area footer-widget-column col-xs-12 col-sm-12 col-md-2 col-lg-2 text-left">
                        <div id="custom_html-1" class="widget_text footer_widget widget widget_custom_html">
                            <h5 class="widget-title"><span>Contact</span></h5>
                            <div class="textwidget custom-html-widget">Dakshin Marg,<br>
                                Sector 37A, Sector 37,<br>
                                Chandigarh, 160036
                            </div>
                        </div>
                    </div>
                    <div
                        class="fourth-widget-area footer-widget-column col-xs-12 col-sm-12 col-md-2 col-lg-2 text-left">
                        <div id="text-3" class="footer_widget widget widget_text">
                            <h5 class="widget-title"><span>Reach Us</span></h5>
                            <div class="textwidget">
                                <p><iframe loading="lazy" style="border: 0;"
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13716.587870265705!2d76.755!3d30.742373000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7889dfe360751e03!2sBar%20Council%20of%20Punjab%20and%20Haryana%20Chandigarh!5e0!3m2!1sen!2sin!4v1664616200899!5m2!1sen!2sin"
                                        allowfullscreen=""></iframe></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer copyright-center">
            <div class="container">
                <span>
                    ALL RIGHT RESERVED BY SOLITAIREINFOSYS.COM</span>
            </div>
        </div>
    </footer>

    <script>
        var baseUrl = "{{ url('/') }}";
    </script>
    <script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 0) {
                $(".main-nav-right").addClass("stickyMenu");
            } else {
                $(".main-nav-right").removeClass("stickyMenu");
            }
        });
    </script>
    @yield('script')
</body>

</html>
