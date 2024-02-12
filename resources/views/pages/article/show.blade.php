@extends('layouts.default')

@section('content')
<!-- Post Img -->
<div class="blog_f_img pt_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{ Storage::url($article->image) }}" alt="photo {{ $article->titre}}"
                style="width: 1170px; height: 692px; object-fit: cover;"/>
            </div>
        </div>
    </div>
</div>
<!-- Post Img -->
    <!-- Post Details -->
    <section class="sp_5_section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="blog_content_3">
                        <div class="cate_rate clearfix"><a href="#" class="cats blues2">{{ $article->categorie->nom }}</a></div>
                        <h2 class="sb_title">{{ $article->titre}}</h2>
                        <div class="post_banner_meta clearfix">
                            <img src="{{ Storage::url($article->auteur->photo) }}" alt=""/>
                            <span class="fi1cm_author">Par <a href="article{{ $article->id }}">{{ $article->auteur->name}}</a></span>
                            <span class="fi1cm_date">-<a href="#"><i class="twi-clock2"></i>{{ $article->date_publication}}</a></span>
                            <a class="view" href="#"><i class="magro-fire"></i>120</a>
                            <a class="like" href="#"><i class="magro-view"></i>1.3k Views</a>
                        </div>
                        <div>
                            @php
                            echo($article->contenu) 
                            @endphp
                        </div>
                        
                        
                        <figure class="post-media">
                            @if ($article->video_link != NULL)
                            <div class="embed-responsive embed-responsive-16by9" id="player">
                                <iframe src="https://www.youtube.com/embed/{{ $article->video_link }}"
                                    width="735" height="428" frameborder="0" allowfullscreen></iframe></div>
                            @endif
                        </figure>
                        <div class="sb_tags clearfix">
                            <h5>Tags</h5>
                            @foreach ( explode(",", $article->tags) as $tag)
                            <a href="#">{{$tag}}</a>
                            @endforeach                                       
                        </div>
                        <div class="sb_share clearfix">
                            <h5>Share</h5>
                            <a href="#"><img src="images/share.png" alt=""/></a>                                       
                        </div>
                        <div class="top_viral_post">
                            <h2 class="sec_titles"><i></i>D'autres articles</h2>
                            <div class="row">
                                @foreach ( $lastArticles as $art)
                                <div class="col-lg-6">
                                    <div class="top_week_1">
                                        <div class="tw1_thumb">
                                            <img src="{{ Storage::url($art->image) }}" alt="photo {{ $art->titre}}"
                                            style="width: 350px; height: 316px; object-fit: cover;">
                                            <div class="tw1_cats">
                                                <a href="#" class="cats reds">{{ $art->categorie->nom }}</a>
                                            </div>
                                        </div>
                                        <div class="tw1_details">
                                            <h2><a href="article{{ $art->id }}">{{ $art->titre }}</a></h2>
                                            <div class="comon_meta clearfix">
                                                <span class="cm_author"><i class="twi-user"></i>Par <a href="#"> {{ $art->auteur->name }}</a></span>
                                                <span class="cm_date"><a href="#">{{ $art->date_publication }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-lg-12 text-center">
                                    <a href="#" class="magro_btn">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="sidebar_1">
                        <aside class="widget mag_social_widget">
                            <h3 class="widget_title"><span>Rester connecté</span></h3>
                            <div class="social_area">
                                <div class="single_social twi">
                                    <a href="#"><i class="twi-twitter"></i></a>
                                    <div class="social_meta">
                                        <span>36.798</span> Fans
                                        <a href="#">Like</a>
                                    </div>
                                </div>
                                <div class="single_social fac">
                                    <a href="#"><i class="twi-facebook-f"></i></a>
                                    <div class="social_meta">
                                        <span>145.519</span> Followers
                                        <a href="#">Follow</a>
                                    </div>
                                </div>
                                <div class="single_social you">
                                    <a href="#"><i class="magro-play-button"></i></a>
                                    <div class="social_meta">
                                        <span>980</span> Subscribers
                                        <a href="#">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget">
                            <div class="ads_widget">
                                <h6>advertisement</h6>
                                <a href="#"><img src="images/home1/ad3.jpg" alt=""></a>
                            </div>
                        </aside>
                        <aside class="widget popular_post_2">
                            <h3 class="widget_title"><span>Journal</span></h3>
                            <div class="magrotab_popular">
                                <div class="clearfix"></div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show in active" id="pp_post_1" role="tabpanel">
                                        <div class="mp_post_feature clearfix">
                                            <div class="mp_post_thumb">
                                                <iframe src="https://www.youtube.com/embed/{{ $Journal->video_link }}"
                                                    width="324" height="218" frameborder="0" allowfullscreen></iframe>
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pp_post_2" role="tabpanel">
                                        <div class="mp_post_feature clearfix">
                                            <div class="mp_post_thumb">
                                                <img src="images/m1.jpg" alt="">
                                                <span>1</span>
                                            </div>
                                            <div class="mp_post_content">
                                                <a href="#" class="cats blues2">Design</a>
                                                <h4><a href="#">This is how to style flip flops like super model Erin</a></h4>
                                            </div>
                                        </div>
                                        <div class="mp_post clearfix">
                                            <div class="mp_post_thumb">
                                                <img src="images/m2.jpg" alt="">
                                                <span>2</span>
                                                <a href="#" class="cats reds">Tech</a>
                                            </div>
                                            <div class="mp_post_content">
                                                <h4><a href="#">Ceases New York City Fresh Grocery Business</a></h4>
                                                <span class="cm_author"><i class="twi-user"></i>Par  <a href="#">Admin Staff</a></span>
                                            </div>
                                        </div>
                                        <div class="mp_post clearfix">
                                            <div class="mp_post_thumb">
                                                <img src="images/m3.jpg" alt="">
                                                <span>2</span>
                                                <a href="#" class="cats reds">Tech</a>
                                            </div>
                                            <div class="mp_post_content">
                                                <h4><a href="#">How to style flip like super model Erin</a></h4>
                                                <span class="cm_author"><i class="twi-user"></i>Par  <a href="#">Admin Staff</a></span>
                                            </div>
                                        </div>
                                        <div class="mp_post clearfix">
                                            <div class="mp_post_thumb">
                                                <img src="images/m4.jpg" alt="">
                                                <span>2</span>
                                                <a href="#" class="cats reds">Tech</a>
                                            </div>
                                            <div class="mp_post_content">
                                                <h4><a href="#">Ceases New York City Fresh Grocery Business</a></h4>
                                                <span class="cm_author"><i class="twi-user"></i>Par  <a href="#">Admin Staff</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
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
        </div>
    </section>
    <!-- Post Details -->
@endsection
