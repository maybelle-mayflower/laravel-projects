<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>TailorMade</title>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Dry Themes" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="DryThemes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />    
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900%7CMontserrat:400,700%7CPT+Serif' rel='stylesheet' type='text/css'>	
        <link rel="stylesheet" href="{{asset('csss/clear.css')}}" />
        <link rel="stylesheet" href="{{asset('csss/common.css')}}" />
        <link rel="stylesheet"  href="{{asset('csss/font-awesome.min.css')}}" />
        <link rel="stylesheet"  href="{{asset('csss/carouFredSel.css' )}}"/>
        <link rel="stylesheet"  href="{{asset('csss/prettyPhoto.css')}}" />
        <link rel="stylesheet"  href="{{asset('csss/sm-clean.css')}}"/>        
        <link rel="stylesheet" href="{{asset('csss/style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{asset('css/simple-sidebar.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>                
                <script src="js/respond.min.js"></script>                
        <![endif]-->
        @yield('styles')
        <body>
            @include('partials.header')
               
@yield('content')
        </head>
         <footer class="footer">
                <div class="content-970 center-relative">           
                    <ul>
                        <li class="copyright-footer">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </li>
                        <li class="social-footer">                
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-behance"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-rss"></span>
                            </a>
                        </li>            
                    </ul>
                </div>
            </footer>

            <!-- End .body-border -->
        </div>


        <!--Load JavaScript-->
        <script src="js/jquery.js"></script>                                                   
        <script src='js/jquery.fitvids.js'></script>
        <script src='js/jquery.smartmenus.min.js'></script>
        <script src='js/isotope.pkgd.js'></script>
        <script src='js/imagesloaded.pkgd.js'></script>        
        <script src='js/isotope.pkgd.js'></script>        
        <script src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script src='js/jquery.mousewheel.min.js'></script>
        <script src='js/jquery.touchSwipe.min.js'></script>
        <script src='js/jquery.easing.1.3.js'></script>
        <script src='js/imagesloaded.pkgd.js'></script>
        <script src='js/jquery.prettyPhoto.js'></script>
        <script src='js/jquery.nicescroll.min.js'></script>
        <script src='js/main.js'></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
          <!-- Menu Toggle Script -->


        @yield('scripts')
    </body>
</html>