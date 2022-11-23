@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
<style>
    @media only screen and (min-width:768px){
        .counter-item.style-two {
            height: 400px;
        }

        .feature-item-four {
            height: 215px;
        }
    }

    .blog-one {

        background-color: #f1f1f5;
    }

    .mission .services-one__single {
        height: 500px;
    }
    .mission .services-one__text {
        margin-top: 20px;
    }
    .author.post-category i {
        font-size: 40px;
        margin-right: 15px;
    }

    .icon-different {
        color: white;
        font-size: 65px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        display: inline-block;
        width: 120px;
        height: 120px;
        background: #fc653c;
        line-height: 120px;
        border-radius: 50%;
        text-align: center;
    }

    section.newsletter-one.about-status {
        margin-bottom: 50px;
        margin-top: 50px;
        z-index: unset;
    }

    .core-value .areas-of-practice__single{
        height: 425px;
    }


    .about-status .newsletter-one__inner{
        padding-bottom: 36px;
        justify-content: center;
    }

    .about-status .newsletter-one__inner .cta-one__right-count{
        margin-bottom: 0px;
        text-align: center;
    }

    .newsletter-one__left > div {
        margin-right: 50px;
        margin-left: 20px;
    }

    .about-status p.cta-one__right-text {
        margin-top: 5px;
    }

    .blog-three {
        margin-top: 50px;
    }

    .join-us__text-one {
        margin-bottom: 40px;
    }

    p.welcome-one__right-text-2 {
        text-align: justify;
    }
    a.thm-btn.testimonial-one__btn.welcome-button {
        margin-top: 15px;
    }
    .brand-one .swiper-slide {
        height:100px
    }
    .brand-one .swiper-slide img {
            height: 100%;
            object-fit: contain;

        }
</style>
@endsection
@section('content')

    @if(count($sliders) > 0)
        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                        "el": "#main-slider-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                        "delay": 5000
                    }}'>
                <div class="swiper-wrapper">
                    @foreach(@$sliders as $slider)

                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});">
                            </div>

                            <div class="image-layer-overlay"></div>
                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>
                            <div class="main-slider-shape-4"></div>
                            <!-- /.image-layer -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>{{@$slider->subheading}}</p>
                                            <h2>{!! @$slider->heading !!}</h2>
                                            @if(@$slider->button)
                                                    <a href="{{@$slider->link}}" class="thm-btn "><span>{{ucwords(@$slider->button)}}</span></a>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- If we need navigation buttons -->
                <div class="slider-bottom-box clearfix">

                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                                class="icon-right-arrow icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                                class="icon-right-arrow"></i>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                </div>
            </div>
        </section>
        <!--Banner One End-->
    @endif


    @if(!empty($homepage_info->welcome_description))
        <!-- Welcome section -->

        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    @if(@$homepage_info->welcome_side_image == "left")

                        <div class="col-xl-6">
                            <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="welcome-one__img-box">
                                    <div class="welcome-one__img">
                                        <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="">
                                        <div class="welcome-one__shape-1"></div>
                                        <div class="welcome-one__shape-2"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="welcome-one__right">
                                <div class="section-title text-left">
                                    @if(@$homepage_info->welcome_subheading)
                                            <span class="section-title__tagline">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2 class="section-title__title">
{{--                                            <span>{{ucwords(@$homepage_info->welcome_heading)}}</span>--}}
                                            <span><?php
                                                $split = explode(" ", ucwords(@$homepage_info->welcome_heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$homepage_info->welcome_heading))."\n"}}</span>
                                            <span class="text-last">{{$split[count($split)-1]}}</span>
                                        </h2>
                                    @endif
                                </div>

                                <div class="welcome-one__right-text-2 justified">{!! ucfirst(@$homepage_info->welcome_description) !!}</div>
                                @if(@$homepage_info->welcome_button)
                                    <a href="{{@$homepage_info->welcome_link}}" class="thm-btn testimonial-one__btn welcome-button"><span>{{ucwords(@$homepage_info->welcome_button)}}</span></a>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="col-xl-6">
                            <div class="welcome-one__right">
                                <div class="section-title text-left">
                                    @if(@$homepage_info->welcome_subheading)
                                            <span class="section-title__tagline">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2 class="section-title__title"><span>{{ucwords(@$homepage_info->welcome_heading)}}</span></h2>
                                    @endif
                                </div>

                                <div class="welcome-one__right-text-2 justified">{!! ucfirst(@$homepage_info->welcome_description) !!}</div>
                                @if(@$homepage_info->welcome_button)
                                    <a href="{{@$homepage_info->welcome_link}}" class="thm-btn testimonial-one__btn"><span>{{ucwords(@$homepage_info->welcome_button)}}</span></a>
                                @endif
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                                <div class="welcome-one__img-box">
                                    <div class="welcome-one__img">
                                        <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="">
                                        <div class="welcome-one__shape-1"></div>
                                        <div class="welcome-one__shape-2"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
        <!-- Welcome end -->
    @endif

        <!--Counter One Start-->
        <section class="counters-one">
            <div class="container">
                <ul class="counters-one__box list-unstyled">
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__icon">
                            <span class="icon-recommend"></span>
                        </div>
                        <h3 class="odometer" data-count="{{ (@$homepage_info->project_completed) ? @$homepage_info->project_completed : '3670';}}">00</h3>
                        <p class="counter-one__text">Customer Served</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__icon">
                            <span class="icon-recruit"></span>
                        </div>
                        <h3 class="odometer" data-count="{{ (@$homepage_info->visa_approved) ? @$homepage_info->visa_approved : '3670';}}">00</h3>
                        <p class="counter-one__text">Visa Approved</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <span class="icon-coffee"></span>
                        </div>
                        <h3 class="odometer" data-count="{{ (@$homepage_info->success_stories) ? @$homepage_info->success_stories : '3670';}}">00</h3>
                        <p class="counter-one__text">Success Stories</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__icon">
                            <span class="icon-customer-review"></span>
                        </div>
                        <h3 class="odometer" data-count="{{ (@$homepage_info->happy_clients) ? @$homepage_info->happy_clients : '3670';}}">00</h3>
                        <p class="counter-one__text">Happy clients</p>
                    </li>
                    <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

    @if(!empty($homepage_info->action_heading))
        <!-- CTA Area start -->
        <section class="cta-one">
            <div class="cta-one-bg" style="background-image: url({{asset('/assets/frontend/images/backgrounds/cta-one-bg.jpg')}})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <p class="cta-one__tagline">{{@$homepage_info->action_heading2}}</p>
                            <h2 class="cta-one__title">{!! wordwrap(@$homepage_info->action_heading,30,"<br>\n",TRUE) !!}</h2>
                            @if(@$homepage_info->action_button)

                                <a href="{{@$homepage_info->action_link}}" class="thm-btn cta-one__btn thm-btn--dark--light-hover"><span>{{@$homepage_info->action_button}}</span></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->
    @endif



    @if(!empty($homepage_info->mv_heading))
        <!-- Mission Vision start -->
        <section class="services-one mission">
            <div class="services-one-bg" style="background-image: url({{asset('/assets/frontend/images/backgrounds/services-one-bg.jpg')}})">
            </div>
            <div class="container">
                <div class="section-title text-center">

                    @if(@$homepage_info->mv_subheading)
                        <span class="section-title__tagline">{{ucfirst(@$homepage_info->mv_subheading)}}</span>
                    @endif
                    @if(@$homepage_info->mv_heading)
                        <h2 class="section-title__title"><span><?php
                                $split = explode(" ", $homepage_info->mv_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', $homepage_info->mv_heading)."\n"}}</span>
                            <span class="text-last">{{$split[count($split)-1]}}</span></h2>
                    @endif

                    <p class="services-one__text">{{ ucfirst(@$homepage_info->mv_description) }}</p>

                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp " data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="fas fa-trophy"></span>
                            </div>
                            <h3 class="services-one__title"><a href="#">Mission</a></h3>
                            <p class="services-one__text justified">{{ ucfirst(@$homepage_info->mission) }}</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="far fa-eye"></span>
                            </div>
                            <h3 class="services-one__title"><a href="#">Vision</a></h3>
                            <p class="services-one__text justified">{{ ucfirst(@$homepage_info->vision) }}</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="far fa-heart"></span>
                            </div>
                            <h3 class="services-one__title"><a href="#">Value</a></h3>
                            <p class="services-one__text justified">{{ ucfirst(@$homepage_info->value) }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission Vision end -->
    @endif


    @if(!empty($homepage_info->core_main_heading))

    <!-- Core value start -->
    <section class="areas-of-practice core-value">
        <div class="container">
            <div class="areas-of-practice__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="areas-of-practice__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">{{ucfirst(@$homepage_info->core_main_subheading)}}</span>
                                <h2 class="section-title__title">
                                     <span><?php
                                         $split = explode(" ", ucwords(@$homepage_info->core_main_heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$homepage_info->core_main_heading))."\n"}}</span>
                                    <span class="text-last">{{$split[count($split)-1]}}</span>

                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="areas-of-practice__top-right">
                            <p class="areas-of-practice__top-right-text">{{ucfirst(@$homepage_info->core_main_description)}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="areas-of-practice__bottom">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fa fa-user-shield"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading1)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description1)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fa fa-handshake"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading2)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description2)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fas fa-head-side-virus"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading3)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description3)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fas fa-hands-helping"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading4)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description4)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fas fa-medal"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading5)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description5)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fas fa-street-view"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading6)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description6)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fas fa-balance-scale"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading7)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description7)}}</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Areas of Practice Single-->
                        <div class="areas-of-practice__single">
                            <div class="areas-of-practice__icon-box">
                                    <div class="areas-of-practice__icon">
                                        <span class="fas fa-tachometer-alt"></span>
                                    </div>
                                <div class="areas-of-practice__title">
                                    <h3><a href="#">{{ucwords(@$homepage_info->core_heading8)}}</a></h3>
                                </div>
                            </div>
                            <p class="areas-of-practice__text">{{ucfirst(@$homepage_info->core_description8)}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core value end -->
    @endif

    @if(count($testimonials) > 2)

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Customer feedback</span>
                                <h2 class="section-title__title"><span>What are clients talking </span> <span class="text-last">about?</span></h2>
                            </div>
                            <div class="testimonial-one__btn-box">
                                <a href="{{route('testimonial')}}" class="thm-btn testimonial-one__btn"><span>All feedbacks</span></a>
                                <div class="testimonial-one__btn-shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__slider">


                            <div class="swiper-container" id="testimonials-one__thumb">
                                <div class="swiper-wrapper">
                                    @foreach(@$testimonials as $testimonial)

                                        <div class="swiper-slide">
                                            <div class="testimonial-one__img-holder">
                                                <img src="<?php if(!empty(@$testimonial->image)){ echo '/images/testimonial/'.@$testimonial->image; } ?>" alt="">
                                                <div class="testimonial-one__quote">

                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    @endforeach

                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /#testimonials-one__thumb.swiper-container -->

                            <div class="testimonials-one__main-content">
                                <div class="swiper-container" id="testimonials-one__carousel">
                                    <div class="swiper-wrapper">
                                        @foreach(@$testimonials as $testimonial)

                                            <div class="swiper-slide">
                                                <div class="testimonial-one__conent-box">
                                                    <p class="testimonial-one__text">{!! @$testimonial->description !!}</p>
                                                    <div class="testimonial-one__client-details">
                                                        <h4 class="testimonial-one__client-name">{{ucwords($testimonial->name)}}</h4>
                                                        <span class="testimonial-one__clinet-title">{{ucwords($testimonial->position)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div><!-- /.swiper-wrapper -->
                                    <div id="testimonials-one__carousel-pagination"></div>
                                    <!-- /#testimonials-one__carousel-pagination -->
                                </div><!-- /#testimonials-one__thumb.swiper-container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

    @endif


    @if(count($latestPosts) > 2)

      <!--Blog One Start-->
      <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Recent work completed</span>
                <h2 class="section-title__title">

                    <span>Latest from the </span> <span class="text-last">blog</span></h2>
            </div>
            <div class="row">
                @foreach(@$latestPosts as $post)

                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="">

                                    <a href="{{route('blog.single',$post->slug)}}">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>{{date('j',strtotime(@$post->created_at))}}</span> {{date('M',strtotime(@$post->created_at))}}</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="{{url('/blog/categories/'.@$post->category->slug)}}"><i class="fas fa-th-large"></i> {{ucwords(@$post->category->name)}}</a></li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="{{route('blog.single',$post->slug)}}">{{ucwords($post->title)}}</a>
                                </h3>

                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="{{route('blog.single',$post->slug)}}">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="{{route('blog.single',$post->slug)}}"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--Blog One End-->

    @endif


    @if(count($clients) > 0)

        <!--Brand Two-->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                    @foreach(@$clients as $client)

                        <div class="swiper-slide">
                            <img src="<?php if(@$client->image){?>{{asset('/images/clients/'.@$client->image)}}<?php }?>" alt="{{ucwords($client->country)}}">
                        </div><!-- /.swiper-slide -->
                      @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End-->
    @endif

@endsection

