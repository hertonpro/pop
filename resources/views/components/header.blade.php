<div>
    <!-- Header Top Bar -->
<section class="top_bar_01">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header_bar">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <nav class="top_nav">
                                <ul class="clearfix">
                                    <li><a href="/login">Se connecter / Rejoindre</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-5 col-md-6 clearfix">
                            <div class="top_info clearfix">
                                <div class="dates_times">{{ \Carbon\Carbon::now()->locale('fr_FR')->isoFormat('dddd, MMMM D') }} </div>
                                <div class="weathers">Bukavu   31°C / 25 - 32°C<i data-icon="&#xe00a;" class="icon-weather"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Top Bar -->
<!-- Main Header -->
<header class="header_01">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header_01_inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo_01">
                                <a href="/"><img src="images/logo.png" alt="POP"/></a>
                            </div>
                        </div>
                        <div class="col-lg-6 noPaddingLeft">
                            <nav class="main_menu mobile_menu">
                                <div class="mobileMenuBar">
                                    <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>
                                </div>
                                <ul class="clearfix">
                                    <li class="current-menu-item menu-item-has-children mg_menu">
                                        <a href="#">La une</a>
                                        <div class="megamenu_1 megamenu">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <ul>
                                                        <li><a href="index.html">Politique</a></li>
                                                        <li><a href="index2.html">Sécurité</a></li>
                                                        <li><a href="index3.html">Suport</a></li>
                                                        <li><a href="index4.html">Economie</a></li>
                                                        <li><a href="index5.html">Culture</a></li>
                                                        <li><a href="index5.html">Santé</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="slider_post owl-carousel">
                                                        <div class="featured_item_1 fi1_sm">
                                                            <img src="images/ms1.jpg" alt="">
                                                            <div class="fi1_content">
                                                                <div class="fi1c_categories">
                                                                    <a href="#" class="cats blues2">Design</a>
                                                                </div>
                                                                <h2><a href="#">This is how to style flip flops like a super model Erin Fitzpatrick</a></h2>
                                                                <div class="fi1c_meta clearfix">
                                                                    <span class="fi1cm_author">Par<a href="#">Jawn Staff</a></span>
                                                                    <span class="fi1cm_date font-italic"><a href="#">Nov 10, 2018</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="featured_item_1 fi1_sm">
                                                            <img src="images/ms2.jpg" alt="">
                                                            <div class="fi1_content">
                                                                <div class="fi1c_categories">
                                                                    <a href="#" class="cats yellows">Travel</a>
                                                                </div>
                                                                <h2><a href="#">How to Style a Choker so you Don’t look Like every Erin Fitzpatrick.</a></h2>
                                                                <div class="fi1c_meta clearfix">
                                                                    <span class="fi1cm_author">Par<a href="#">Jawn Staff</a></span>
                                                                    <span class="fi1cm_date font-italic"><a href="#">Nov 11, 2018</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children mg_menu">
                                        <a href="#">Reportages</a>
                                        <div class="megamenu_2">
                                            <div class="POP_tab_1">
                                                <ul class="mtab_1 menu_tab nav nav-tabs" id="menu_post_tab">
                                                    <li><a class="active" href="#twt_1" data-toggle="tab">Sécurité</a></li>
                                                    <li><a href="#twt_2" data-toggle="tab">Politique</a></li>
                                                    <li><a href="#twt_2" data-toggle="tab">Suport</a></li>
                                                    <li><a href="#twt_3" data-toggle="tab">Economie</a></li>
                                                    <li><a href="#twt_4" data-toggle="tab">Culture</a></li>
                                                    <li><a href="#twt_4" data-toggle="tab">Santé</a></li>
                                                </ul>
                                                {{-- <div class="tab-content">
                                                    <div class="tab-pane fade show in active" id="twt_1" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/2.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats reds">Polutique</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/6.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/3.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats live reds">Live</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/4.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="twt_2" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/3.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats live reds">Live</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/4.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Interview</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/2.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats reds">Polutique</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/6.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="twt_3" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/2.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats reds">Polutique</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/6.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/3.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats live reds">Live</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/4.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="twt_4" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/3.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats live reds">Live</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/4.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 noPaddingRight">
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/2.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats reds">Polutique</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tw1_list clearfix">
                                                                    <div class="tw1l_thumb">
                                                                        <img src="images/home1/top_week/6.jpg" alt="">
                                                                        <div class="tw1l_cats">
                                                                            <a href="#" class="cats blues">Sports</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tw1_l_content">
                                                                        <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                                        <div class="comon_meta clearfix">
                                                                            <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn Staff</a></span>
                                                                            <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Interviews</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">POP</a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery_1.html">Gallery 01</a></li>
                                            <li><a href="gallery_2.html">Gallery 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header_01_settings">
                                <div class="social_01 clearfix">
                                    <a href="https://{{ env('FACEBOOK_LINK') }}"><i class="twi-facebook-f"></i></a>
                                    <a href="https://{{ env('X_LINK') }}"><i class="twi-twitter"></i></a>
                                    <a href="https://{{ env('YOUTUBE_LINK') }}"><i class="twi-youtube"></i></a>
                                </div>
                                <div class="search_btn">
                                    <a href="javascript:void(0);"><i class="twi-search"></i></a>
                                    <form role="search" method="get" class="searchForms" action="#">
                                        <input type="search" class="search-field" placeholder="Type and Hit Enter..." name="s">
                                        <button type="submit" class="search-submit"><i class="twi-search2"></i></button>
                                    </form>
                                </div>
                                <a href="#" class="cart_btn"><span>2</span><i class="twi-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Header -->
<!-- Header Bottom -->
<section class="bottom_bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9">
                <div class="tranding_part clearfix">
                    <h4 class="float-left">actualités</h4>
                    <div class="tr_slider float-left owl-carousel">
                        @foreach ( $articles as $article )
                        <div class="tr_items">
                            <a href="article{{$article->id}}">{{$article->titre}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <nav class="bottom_nav">
                    <ul>
                        <li><a href="#">Hot</a></li><li><a href="#">bezz</a>
                        </li><li><a href="#">Populaire</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Header Bottom -->
</div>