@extends('layouts.default')

@section('content')
    <!-- Featured Section -->
    <section class="featured_post_section_1">
        <div class="container">
            <div class="row custom_margin">
                <div class="col-lg-8 col-md-6 custom_padding">
                    <div class="featured_item_1">
                        <img src="{{ Storage::url($last->image) }}" alt=""
                            style="width: 735px; height: 557px; object-fit: cover;" />
                        <div class="fi1_content">
                            <div class="fi1c_categories">
                                <a href="#" class="cats blues">{{ $last->categorie->nom }}</a>
                            </div>
                            <h2><a href="article{{ $last->id }}">{{ $last->titre }}</a></h2>
                            <div class="fi1c_meta clearfix">
                                <span class="fi1cm_author">Par <a href="#">{{ $last->auteur->name }}</a></span>
                                <span class="fi1cm_date font-italic"><a
                                        href="#">{{ $last->date_publication }}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row custom_margin">
                        @foreach ($last_2 as $last_2_1)
                            <div class="col-lg-6 col-md-12 custom_padding">
                                <div class="featured_item_1 fi1_sm">
                                    <img src="{{ Storage::url($last_2_1->image) }}" alt=""
                                        style="width: 361px; height: 272px; object-fit: cover;">
                                    <div class="fi1_content">
                                        <div class="fi1c_categories">
                                            <a href="#" class="cats blues2">{{ $last_2_1->categorie->nom }}</a>
                                        </div>
                                        <h2><a href="article{{ $last_2_1->id }}">{{ $last_2_1->titre }}</a></h2>
                                        <div class="fi1c_meta clearfix">
                                            <span class="fi1cm_author">Par <a
                                                    href="#">{{ $last_2_1->auteur->name }}</a></span>
                                            <span class="fi1cm_date font-italic"><a
                                                    href="#">{{ $last_2_1->date_publication }}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 custom_padding">
                    @foreach ($last_3 as $last_3_1)
                        <div class="featured_item_1 fi1_sm">
                            <img src="{{ Storage::url($last_3_1->image) }}" alt=""
                                style="width: 361px; height: 272px; object-fit: cover;" />
                            <div class="fi1_content">
                                <div class="fi1c_categories">
                                    <a href="#" class="cats greens">{{ $last_3_1->categorie->nom }}</a>
                                </div>
                                <h2><a href="article{{ $last_3_1->id }}">{{ $last_3_1->titre }}</a></h2>
                                <div class="fi1c_meta clearfix">
                                    <span class="fi1cm_author">Par <a
                                            href="#">{{ $last_3_1->auteur->name }}</a></span>
                                    <span class="fi1cm_date font-italic"><a
                                            href="#">{{ $last_3_1->date_publication }}</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section -->
    <!-- Top Post Section -->
    <section class="comon_section bg_white clearfix">
        <div class="container">
            <div class="row cus_top_week_column clearfix">
                <div class="col-lg-8 clearfix">
                    <h2 class="sec_titles"><i></i>Journal</h2>
                    <div class="POP_tab_1">
                        <ul class="mtab_1 right_top nav nav-tabs" id="top_of_the_week_tab">
                            <li><a class="active" href="#t_tab_1" data-toggle="tab">Hot infos</a></li>
                            <li><a href="#t_tab_h2" data-toggle="tab">Debrif</a></li>
                            <li><a href="#t_tab_3h" data-toggle="tab">Journal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show in active" id="t_tab_1" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="top_week_1">
                                            <div class="tw1_thumb">
                                                <iframe src="https://www.youtube.com/embed/{{ $Journal->video_link }}"
                                                    width="735" height="428" frameborder="0" allowfullscreen></iframe>
                                                <div class="tw1_cats">
                                                    <a href="#"
                                                        class="cats blues2">{{ $Journal->categorie->nom }}</a>
                                                </div>
                                            </div>
                                            <div class="tw1_details">
                                                <h2><a href="article{{ $Journal->id }}">{{ $Journal->titre }}</a></h2>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par: <a href="#">
                                                            {{ $Journal->auteur->name }}</a></span>
                                                    <span class="cm_date"><a
                                                            href="#">{{ $Journal->date_publication }}</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_tab_2" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="top_week_1">
                                            <div class="tw1_thumb">
                                                <img src="images/home1/top_week/5.jpg" alt="">
                                                <div class="tw1_cats">
                                                    <a href="#" class="cats blues2">Design</a>
                                                </div>
                                            </div>
                                            <div class="tw1_details">
                                                <h2><a href="#">Apollo Astronauts Hared Deep Radiation</a></h2>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                        <div class="tw1_list clearfix">
                                            <div class="tw1l_thumb">
                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                <div class="tw1l_cats">
                                                    <a href="#" class="cats live reds">Live</a>
                                                </div>
                                            </div>
                                            <div class="tw1_l_content">
                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_tab_3" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="top_week_1">
                                            <div class="tw1_thumb">
                                                <img src="images/home1/top_week/1.jpg" alt="">
                                                <div class="tw1_cats">
                                                    <a href="#" class="cats blues2">Design</a>
                                                </div>
                                            </div>
                                            <div class="tw1_details">
                                                <h2><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h2>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw1_list clearfix">
                                            <div class="tw1l_thumb">
                                                <img src="images/home1/top_week/3.jpg" alt="">
                                                <div class="tw1l_cats">
                                                    <a href="#" class="cats live reds">Live</a>
                                                </div>
                                            </div>
                                            <div class="tw1_l_content">
                                                <h3><a href="#">Discovering Sydney’s See Attractions line</a></h3>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_tab_4" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="top_week_1">
                                            <div class="tw1_thumb">
                                                <img src="images/home1/top_week/5.jpg" alt="">
                                                <div class="tw1_cats">
                                                    <a href="#" class="cats blues2">Design</a>
                                                </div>
                                            </div>
                                            <div class="tw1_details">
                                                <h2><a href="#">Apollo Astronauts Hared Deep Radiation</a></h2>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 noPaddingRight">
                                        <div class="tw1_list clearfix">
                                            <div class="tw1l_thumb">
                                                <img src="images/home1/top_week/4.jpg" alt="">
                                                <div class="tw1l_cats">
                                                    <a href="#" class="cats live reds">Live</a>
                                                </div>
                                            </div>
                                            <div class="tw1_l_content">
                                                <h3><a href="#">Added Two New Vegan Flavors To Its Dairy</a></h3>
                                                <div class="comon_meta clearfix">
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <span class="cm_author"><i class="twi-user"></i>Par<a
                                                            href="#">Jawn Staff</a></span>
                                                    <span class="cm_date"><a href="#">Nov 10, 2019</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="widget mag_cat_widget">
                        <h3 class="widget_title"><span>Categories</span></h3>
                        <div class="mcw_content">
                            @foreach ($categories as $categorie)
                                <div class="mcwc_items travel_cate">
                                    <a href="#">
                                        <img src="images/widget/cat/{{ $categorie->id }}.jpg" alt="">
                                        <span class="mcwc_name">{{ $categorie->nom }}</span>
                                        <span class="mcwc_count">-</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Post Section -->
    <!-- -- Section -->
    <section class="comon_section life_style_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_titles"><i></i>Reportages et interviews </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($RI as $R)
                    <div class="col-lg-6">
                        <div class="tw2_list clearfix">
                            <div class="tw2l_thumb">
                                <img src="{{ Storage::url($R->image) }}"
                                    style="width: 277px; height: 279px; object-fit: cover;" alt="">
                            </div>
                            <div class="tw2_l_content">
                                <a href="#" class="cats reds">{{ $R->categorie->nom }}</a>
                                <h3><a href="article{{ $R->id }}">{{ $R->titre }}</a></h3>
                                <div class="comon_meta clearfix">
                                    <span class="cm_date">{{ $R->date_publication }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="tw2_list_slide owl-carousel">
                        <div class="single_tw2_list">
                            <img src="images/home1/--/5.jpg" alt="" />
                            <div class="tw2_list_content">
                                <a href="#" class="cats reds">Polutique</a>
                                <div class="list_meta_con">
                                    <h3><a href="#">Taylor Swift sent message to people who</a></h3>
                                    <div class="comon_meta clearfix">
                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn
                                                Staff</a></span>
                                        <span class="cm_date"><a href="#">Nov 10, 2020</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_tw2_list">
                            <img src="images/home1/--/6.jpg" alt="" />
                            <div class="tw2_list_content">
                                <a href="#" class="cats greens">--</a>
                                <div class="list_meta_con">
                                    <h3><a href="#">Apollo Astronauts Hared Deep Radiation</a></h3>
                                    <div class="comon_meta clearfix">
                                        <span class="cm_author"><i class="twi-user"></i>Par<a href="#">Jawn
                                                Staff</a></span>
                                        <span class="cm_date"><a href="#">Nov 11, 2020</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- -- Section -->
    <!-- Ads Section -->
    <section class="comon_section ad_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ads text-center">
                        <a href="https://herton.pro"><img src="images/home1/ad.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ads Section -->
    <!-- Featured Carousel Section -->
    {{-- <section class="feature_section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured_slider_2 owl-carousel">
                        <div class="featured_slider_item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured_slider_content">
                                        <a href="#" class="cats pinks">Fashion</a>
                                        <h2><a href="#">Will Smith & Martin Lawr Say ‘Bad Boys For Life’ Smith & Martin</a></h2>
                                        <p>
                                            Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdie sasa eiaculis a sem. Donec vehicula luctus nunc. 
                                            We come up with revolutionary ideas that bring positive changes to your instagram activity!
                                        </p>
                                        <a href="#" class="read_more">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 noPaddingRight">
                                    <div class="feature_img">
                                        <img src="images/home1/f1.jpg" alt="">
                                        <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-button"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="feature_img">
                                        <img src="images/home1/f2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured_slider_item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured_slider_content">
                                        <a href="#" class="cats purples">Health</a>
                                        <h2><a href="#">How to Style a Choker so you Don’t look Like every.</a></h2>
                                        <p>
                                            Donec vehicula luctus nunc. Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdie sasa eiaculis a sem. 
                                            We come up with revolutionary ideas that bring positive changes to your instagram activity!
                                        </p>
                                        <a href="#" class="read_more">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 noPaddingRight">
                                    <div class="feature_img">
                                        <img src="images/home1/f2.jpg" alt="">
                                        <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-button"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="feature_img">
                                        <img src="images/home1/f1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured_slider_item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured_slider_content">
                                        <a href="#" class="cats blues">Sports</a>
                                        <h2><a href="#">Will Smith & Martin Lawr Say ‘Bad Boys For Life’ Smith & Martin</a></h2>
                                        <p>
                                            Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdie sasa eiaculis a sem. Donec vehicula luctus nunc. 
                                            We come up with revolutionary ideas that bring positive changes to your instagram activity!
                                        </p>
                                        <a href="#" class="read_more">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 noPaddingRight">
                                    <div class="feature_img">
                                        <img src="images/home1/f1.jpg" alt="">
                                        <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-button"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="feature_img">
                                        <img src="images/home1/f2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured_slider_item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured_slider_content">
                                        <a href="#" class="cats greens">--</a>
                                        <h2><a href="#">How to Style a Choker so you Don’t look Like every.</a></h2>
                                        <p>
                                            Donec vehicula luctus nunc. Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdie sasa eiaculis a sem. 
                                            We come up with revolutionary ideas that bring positive changes to your instagram activity!
                                        </p>
                                        <a href="#" class="read_more">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 noPaddingRight">
                                    <div class="feature_img">
                                        <img src="images/home1/f2.jpg" alt="">
                                        <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-button"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="feature_img">
                                        <img src="images/home1/f1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured_slider_item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured_slider_content">
                                        <a href="#" class="cats purples">Health</a>
                                        <h2><a href="#">Will Smith & Martin Lawr Say ‘Bad Boys For Life’ Smith & Martin</a></h2>
                                        <p>
                                            Donec vehicula luctus nunc. Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdie sasa eiaculis a sem. 
                                            We come up with revolutionary ideas that bring positive changes to your instagram activity!
                                        </p>
                                        <a href="#" class="read_more">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 noPaddingRight">
                                    <div class="feature_img">
                                        <img src="images/home1/f2.jpg" alt="">
                                        <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-button"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="feature_img">
                                        <img src="images/home1/f1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Featured Carousel Section -->

    <!-- résumé de moi Section -->
    <section class="comon_section top_content_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="sec_titles white"><i></i>résumé de moi</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 bg-white p-2 m-2">
                        <div class="single_tc_post">
                            <img src="{{ Storage::url($article->image) }}"
                                style="width: 355px; height: 586px; object-fit: cover;"
                                alt="photo {{ $article->titre }}" />
                            <a class="popup_video" href="https://www.youtube.com/embed/{{ $article->video_link }}"
                                data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                            <div class="tc_content">
                                <a href="#" class="cats reds">{{ $article->categorie->nom }}</a>
                                <h3><a href="article{{ $article->id }}"><span>{{ $article->titre }}</span></a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- résumé de moi Section -->
    <!-- Ads Section -->
    <section class="comon_section ad_section_2 p-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ads text-center">
                        <a href="#"><img src="images/home1/ad2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ads Section -->
    <!-- Whats New Section -->
    {{-- <section class="comon_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h2 class="sec_titles"><i></i>What’s New</h2>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/1.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats reds">Polutique</a>
                            <h3><a href="#">13 Perfect Responses For When Someone</a></h3>
                        </div>
                    </div>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/2.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats purples">Health</a>
                            <h3><a href="#">15 Unbelievable Facts About Sushi</a></h3>
                        </div>
                    </div>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/3.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats pinks2">Entertainment</a>
                            <h3><a href="#">7 Simple Ways To Blow A Kiss Like</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h2 class="sec_titles"><i></i>Weekend Top</h2>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/4.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats blues">Sports</a>
                            <h3><a href="#">15 Unbelievable Facts About Sushi</a></h3>
                        </div>
                    </div>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/5.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats pinks">Fashion</a>
                            <h3><a href="#">What’s Hot & What’s 2018 TV Shows</a></h3>
                        </div>
                    </div>
                    <div class="tw3_list clearfix">
                        <div class="tw3_thumb">
                            <img src="images/home1/6.jpg" alt="">
                        </div>
                        <div class="tw_3_content">
                            <a href="#" class="cats yellows">Travel</a>
                            <h3><a href="#">Habits Like Everyone Else’s?</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="editor_choice_area">
                        <h2 class="sec_titles white"><i></i>Editor's Choice</h2>
                        <div class="editor_slide">
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e1.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">But Pizza For Every Single Meal</a></h4>
                                    <a class="ed_date" href="#">Nov 10, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e2.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">You Will Want To Forget ASAP</a></h4>
                                    <a class="ed_date" href="#">Nov 11, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e3.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">Ways To Blow A Kiss Like A Pro</a></h4>
                                    <a class="ed_date" href="#">Nov 12, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e4.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">Asia You’ve Probaly Never</a></h4>
                                    <a class="ed_date" href="#">Nov 13, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e1.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">But Pizza For Every Single Meal</a></h4>
                                    <a class="ed_date" href="#">Nov 10, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e2.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">You Will Want To Forget ASAP</a></h4>
                                    <a class="ed_date" href="#">Nov 11, 2020</a>
                                </div>
                            </div>
                            <div class="sinlge_edit_item">
                                <div class="edit_thumb">
                                    <img src="images/home1/e3.jpg" alt="">
                                    <a class="popup_video" href="https://www.youtube.com/embed/LXb3EKWsInQ" data-rel="lightcase"><i class="POP-play-arrow"></i></a>
                                </div>
                                <div class="edit_content">
                                    <h4><a href="#">Ways To Blow A Kiss Like A Pro</a></h4>
                                    <a class="ed_date" href="#">Nov 12, 2020</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Whats New Section -->
    <!-- Instagram Section -->
    {{-- <section class="mag_instagram_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><img src="images/instagram.png" alt=""/>@Magazine Images</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 noPadding">
                    <div class="my_instagram">
                        <div class="instagram_img">
                            <a href="#"><img src="images/instagram/1.jpg" alt=""/></a>
                        </div>
                        <div class="instagram_img">
                            <a href="#"><img src="images/instagram/2.jpg" alt=""/></a>
                        </div>
                        <div class="instagram_img">
                            <a href="#"><img src="images/instagram/3.jpg" alt=""/></a>
                        </div>
                        <div class="instagram_img">
                            <a href="#"><img src="images/instagram/4.jpg" alt=""/></a>
                        </div>
                        <div class="instagram_img">
                            <a href="#"><img src="images/instagram/5.jpg" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Instagram Section -->
@endsection
