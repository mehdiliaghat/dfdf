<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>nejah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700') }}"
          rel="stylesheet">
    <link href="{{ asset('css/iransans.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files-->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap4/home.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->


</head>


<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">NEJAH</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{route('home.contactUs')}}">ارتباط باما</a></li>
                <li><a href="#portfolio">زمینه های کاربردی اشتغال</a></li>
                <li class="menu-has-children"><a href="#">فناوری ها</a>
                    <ul>
                        <li><a href="{{route('home.scan3d')}}">اسکن و پرینت سه بعدی</a></li>
                        <li><a href="{{route('home.Broadcast')}}">برودکست و برودباند</a></li>
                        <li><a href="{{route('home.VR')}}">واقعیت مجازی</a></li>
                        <li><a href="{{route('home.AR')}}">واقعیت افزوده</a></li>
                        <li><a href="{{route('home.SeriousGames')}}"> بازی های جدی</a></li>
                        <li><a href="{{route('home.Web3d')}}"> وب سه بعدی </a></li>
                        <li><a href="{{route('home.HoloGraphics')}}">هولوگرافیک</a></li>
                    </ul>
                </li>
                <li><a href="#about"> محتوای دوره </a></li>
                <li><a href="{{route('home.CourseContent')}}">  معرفی دوره </a></li>
                @if(auth()->check())
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">خروج </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <li><a href="{{route('login')}}"> ورود</a></li>
                @endif
                <li class="menu-active"><a href="{{route('home')}}">خانه</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">
    @yield('slider')
</section><!-- #intro -->

<main id="main">
    @yield('content')
</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links" style="text-align: right">
                    <h4>لینک های پرکاربرد</h4>
                    <ul>
                        <li><i class="ion-ios-home-outline"></i><a href="#">خانه</a></li>
                        <li><i class="ion-ios-list-outline"></i> <a href="#">معرفی دوره ها</a></li>
                        <li><i class="ion-ios-w"></i> <a href="#">زمینه های کاربردی اشتغال</a></li>
                        <li><i class="ion-ios-telephone-outline"></i> <a href="#">ارتباط با ما</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact" style="text-align: right">
                    <h4>ارتباط با ما</h4>
                    <p>
                        ملایر ، خیابان شهید رجائی <br>
                        ساختمان پردیس<br>
                        طبقه چهارم ، واحد 15<br>
                        +98 8132221002<strong>:تلفن </strong><br>
                        info@example.com<strong>:ایمیل </strong> <br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-telegram"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>NEJAH</h3>
                    <p style="text-align: right"> معرفی سامانه: سامانه نجاه که مخفف نظام جامع آموزش هماهنگ است </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; <strong>mehdiliaghat7@gmail.com</strong>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
