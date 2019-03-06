@extends('layouts.master')
@section('title')
    TailorMade
@endsection

@section('content')
    <main class="page">

        

        <div class="body-wrapper">           
            <div class="header-holder center-relative relative">
                <div class="header-logo center-text">
                    <a href="index.html">
                        <img src="images/reopenDefaultLogo.png" alt="Reopen WP">
                    </a>               
                </div>
                <div class="toggle-holder absolute">
                    <div id="toggle">
                        <div class="first-menu-line"></div>
                        <div class="second-menu-line"></div>
                        <div class="third-menu-line"></div>
                    </div>
                </div>
                <div class="clear"></div>	
            </div>
            
            <div class="block content-1170 center-relative"> 
                <h1 class="entry-title">Handmade <b>designs</b> crafted with <span class="fa fa-heart"></span> and attention to every detail</h1>
                <p class="page-desc">---</p>
            </div>

            <div class="grid" id="portfolio">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one_third">
                    <a href="demo-images/reopen_home_image01.jpg" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image01.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">SMARTPHONE</p>
                            <p class="portfolio-type">GALLERY</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="https://vimeo.com/157276599" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image02.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">BOOK</p>
                            <p class="portfolio-type">VIDEO</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="https://www.youtube.com/watch?v=xEW_YXgRSIE" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image03.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">DOODLE</p>
                            <p class="portfolio-type">VIDEO</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_two_third">
                    <a href="demo-images/reopen_home_image05.jpg" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image05.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">FOSTER</p>
                            <p class="portfolio-type">GALLERY</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="single-portfolio.html">
                        <img src="demo-images/reopen_home_image04.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">STARLIGHT</p>
                            <p class="portfolio-type">ARTICLE</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="https://vimeo.com/168939109" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image06.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">OPEN BOOK</p>
                            <p class="portfolio-type">VIDEO</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="https://vimeo.com/166419987" data-rel="prettyPhoto[gallery1]">
                        <img src="demo-images/reopen_home_image07.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">BURGER</p>
                            <p class="portfolio-type">VIDEO</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="single.html">
                        <img src="demo-images/reopen_home_image08.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">PRINTSCREEN</p>
                            <p class="portfolio-type">ARTICLE</p>
                        </div>
                    </a>
                </div>
                
                <div class="grid-item element-item p_one_third">
                    <a href="single.html">
                        <img src="demo-images/reopen_home_image09.jpg" alt="" />
                        <div class="portfolio-text-holder">
                            <p class="portfolio-text">BOTTLE</p>
                            <p class="portfolio-type">ARTICLE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            
            <div class="block content-1170 center-relative center-text top-50 bottom-50">
                <a target="_self" class="more-posts-portfolio">
                    <img src="images/loadMoreArrow.png" alt="Load more" />
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </main>   

@endsection
            <!--Footer-->

           