@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<style>
    
    @media only screen and (min-width:768px){
        .counter-item.style-two {
            height: 400px;
        }

        .feature-item-four {
            height: 215px;
        }
    }

    .recruitement-process-circle { width: 500px; height: 500px; border-radius: 100%; margin: 0 auto; position: relative; }
   
    span.step-by i {
        font-family: 'FontAwesome';
    }
    .step-process { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 25; }
    .step-process  .step-by {
        display: block;
        width: 100px;
        height: 100px;
        position: absolute;
        border-radius: 50%;
        text-align: center;
        line-height: 100px;
        font-size: 40px;
        z-index: 3;
        cursor: pointer;
        background: rgb(252 101 60);
        background: linear-gradient(90deg, rgba(255,149,120,1) 0%, rgba(252,101,60,1) 35%, rgba(255,54,0,1) 100%);
        color: #f6fbff;


    }

   .title-box .title small{
        color: #fff;
        font-size: 16px;
        line-height: 16px;
    }
    .round2 {
        position: absolute;
        left: -50px;
        top: -50px;
        width: 630px;
        height: 630px;
        border: 1px dashed #fff;
        border-radius: 100%;
        -webkit-animation: rotation 100s infinite linear;
        opacity: .4;
    }

    .step-process  .step-by .active-only { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
    .step-process  .step-by .active-only::after { content: ''; width: 5px; height: 5px; border: 3px solid #fff; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
    .step-process  .step-by .active-only::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #fff; right: -39px; }
    .step-process  .step-by.active .active-only { display: block; }
    .main-circle { position: absolute; left: 40px; top: 45px; width: 430px; height: 430px; border: 2px solid #ee1c22; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
    .step-process .step-by:hover, .step-process .step-by.active {
        background: #f6fbff ;
        border: 2px dashed #f9cc43;
        color: #bec0c4
    }

    .step-process .step-by:hover, .step-process .step-by.active > i, .step-process .step-by:hover, .step-process .step-by.active > [class*=" flaticon-"]:before, .step-process .step-by:hover, .step-process .step-by.active > [class^="flaticon-"]:after, .step-process .step-by:hover, .step-process .step-by.active > [class*=" flaticon-"]:after {
    color:#bec0c4;
    }

    .step-process .step-by { font-size: 40px; }
    .contentCircle { width: 250px; border-radius: 100%; color: #fff; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
    .contentCircle .process-item { border-radius: 100%; 
        color: #fff; position: absolute; 
        text-align: center; bottom: 0; left: 0; opacity: 0; 
        transform: scale(0); transition: 0.5s; font-size: 15px;
        width: 100%; height: 100%; top: 0; right: 0; 
        margin: auto; line-height: 150px; }


    .process-item.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
    .contentCircle .process-item i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #fff; opacity: 0.1; }
    @media only screen and (min-width:300px) and (max-width:599px) {
        .recruitement-process-circle { width: 300px; height: 300px; margin: 110px auto; }
        .recruitement-process-circle::after { width: 100%; height: 100%; }
        .step-process { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
       .recruitement-process-circle{display:none;}
        
    }
    @media only screen and (min-width:600px) and (max-width:767px) {  }
    @media only screen and (min-width:768px) and (max-width:991px) {  }
    @media only screen and (min-width:992px) and (max-width:1199px) {  }
    @media only screen and (min-width:1200px) and (max-width:1499px) { }
    .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1;margin-top: 20px;font-size: 20px;margin-bottom: 10px; }
            .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #57585c; }
            .title-box p {font-size:18px; line-height: 1.2em; color:#57585c}


    .grivance{
        background-color: #f1f1f5;
    }

    .grivance .about-two__content {
        background-color: #fff !important;
    }
    a.thm-btn.map-button {
      font-size: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
      border-radius: var(--moniz-border-radius, 10px);
      text-align: center;
      font-weight: bold;
      color: #fff;
      padding-left: 10px;
      padding-right: 10px;
      display: block;
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
                        <div class="areas-of-practice__single text-centered">
                            <div class="areas-of-practice__icon-box">
                                <div class="areas-of-practice__icon">
                                        <span class="fa fa-shield"></span>
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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
                        <div class="areas-of-practice__single text-centered">
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


    @if(@$recruitments[0]->description)

    <section class="reasons">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="reasons__left">
                            <div class="recruitement-process-circle">

                                <div class="main-circle"></div>

                                <div class="step-process" >

                                @foreach(@$recruitments as $recruitment)
                                    <span class="step-by step-by{{@$loop->iteration}}" data-tab="{{@$loop->iteration}}" ><i class="fa fa-{{@$recruitment->icon}}"></i><span class="active-only"></span></span>
                                @endforeach

                                </div>

                                <div class="contentCircle">
                                    @foreach(@$recruitments as $recruitment)
                                        <div class="process-item title-box process-item{{@$loop->iteration}}">
                                            <h2 class="title"><span>{{ucwords(@$recruitment->title)}}</span> </h2>
                                            <p><small>{{ucfirst(@$recruitment->icon_description)}} </small></p>
                                        </div>
                                    @endforeach
                                

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="reasons__right">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">
                                    
                                    <span><?php
                                         $split = explode(" ", ucwords(@$recruitments[0]->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$recruitments[0]->heading))."\n"}}</span>
                                    <span class="text-last">{{$split[count($split)-1]}}</span>
                                </h2>
                            </div>
                            <p class="reasons__text justified">{{ucfirst(@$recruitments[0]->description)}}</p>

                                @if(@$recruitments[0]->link)
                                    <a href="{{@$recruitments[0]->link}}" class="thm-btn reasons__btn"><span>Read More</span></a>
                                @endif
                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif


    
    @if(count($clients) > 0)

        <!--Brand Two-->
        <section class="brand-one">
            <div class="section-title text-center">
                <span class="section-title__tagline">NMS Valuable list</span>
                <h2 class="section-title__title"><a href="/clients">
                    <span>Meet Our  </span> <span class="text-last">Clients</span> </a></h2>
            </div>
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


    @if(@$setting_data->grievance_heading)
          <!--- Map & Description--->
          <section class="about-two grivance">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-5">
                  <div class="about-two__image">
                    @if(@$setting_data->google_map)
                        <iframe frameborder="0" width="100%" height="660px"scrolling="no" marginheight="0" marginwidth="0" src="{{@$setting_data->google_map}}"
                                  title="%3$s" aria-label="%3$s"></iframe>
                    @endif
                    @if(@$setting_data->grievance_button)
                        <a href="{{@$setting_data->grievance_link}}" class="thm-btn map-button"><span>{{ucwords(@$setting_data->grievance_button)}}</span></a>
                      @endif
                  </div><!-- /.about-two__image -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-7">
                  <div class="about-two__content" style="padding: 50px;">
                    <div class="section-title text-left">
                        
                          <h2 class="section-title__title">
                          <span><?php
                                         $split = explode(" ", ucwords(@$setting_data->grievance_heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$setting_data->grievance_heading))."\n"}}</span>
                                    <span class="text-last">{{$split[count($split)-1]}}</span>
                          </h2>
                    </div>
                    <div class="about-two__box">
                      <!-- /.about-two__box__icon -->
                      <div class="about-two__box__content justified">
                       <p>{{ ucfirst(@$setting_data->grievance_description) }}</p>

                        @if(@$setting_data->whatsapp)
                            <p class="grieve-social"><i class="fab fa-fa-whatsapp fa-whatsapp"></i> {{@$setting_data->whatsapp}}</p>
                        @endif
                        @if(@$setting_data->viber)
                            <p class="grieve-social">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 35 35" version="1.1">
                                <g id="surface1">
                                <path style=" stroke:none;fill-rule:nonzero;fill:rgb(4,80,124);fill-opacity:1;" d="M 30.351562 3.410156 C 29.484375 2.609375 25.96875 0.0625 18.136719 0.0273438 C 18.136719 0.0273438 8.902344 -0.527344 4.402344 3.601562 C 1.898438 6.105469 1.019531 9.773438 0.921875 14.320312 C 0.828125 18.867188 0.710938 27.382812 8.921875 29.695312 L 8.929688 29.695312 L 8.921875 33.222656 C 8.921875 33.222656 8.867188 34.652344 9.808594 34.9375 C 10.945312 35.292969 11.613281 34.207031 12.703125 33.039062 C 13.296875 32.394531 14.117188 31.453125 14.738281 30.734375 C 20.359375 31.207031 24.671875 30.125 25.164062 29.96875 C 26.296875 29.601562 32.71875 28.78125 33.757812 20.261719 C 34.835938 11.472656 33.234375 5.921875 30.351562 3.410156 Z M 31.300781 19.617188 C 30.421875 26.726562 25.21875 27.179688 24.261719 27.488281 C 23.851562 27.617188 20.054688 28.5625 15.292969 28.253906 C 15.292969 28.253906 11.738281 32.539062 10.628906 33.652344 C 10.265625 34.015625 9.871094 33.980469 9.878906 33.265625 C 9.878906 32.792969 9.90625 27.40625 9.90625 27.40625 C 9.898438 27.40625 9.898438 27.40625 9.90625 27.40625 C 2.945312 25.476562 3.355469 18.226562 3.429688 14.429688 C 3.507812 10.636719 4.226562 7.527344 6.34375 5.433594 C 10.152344 1.984375 17.992188 2.496094 17.992188 2.496094 C 24.617188 2.523438 27.789062 4.519531 28.527344 5.1875 C 30.96875 7.28125 32.210938 12.285156 31.300781 19.617188 Z M 21.800781 14.09375 C 21.828125 14.683594 20.945312 14.722656 20.917969 14.136719 C 20.84375 12.632812 20.140625 11.902344 18.6875 11.820312 C 18.101562 11.785156 18.15625 10.902344 18.738281 10.9375 C 20.644531 11.039062 21.703125 12.132812 21.800781 14.09375 Z M 23.1875 14.867188 C 23.257812 11.96875 21.445312 9.699219 18.007812 9.445312 C 17.425781 9.40625 17.484375 8.523438 18.066406 8.566406 C 22.03125 8.851562 24.144531 11.578125 24.070312 14.886719 C 24.0625 15.476562 23.171875 15.449219 23.1875 14.867188 Z M 26.398438 15.785156 C 26.40625 16.371094 25.519531 16.378906 25.519531 15.789062 C 25.476562 10.21875 21.765625 7.183594 17.261719 7.148438 C 16.679688 7.144531 16.679688 6.269531 17.261719 6.269531 C 22.296875 6.300781 26.351562 9.78125 26.398438 15.785156 Z M 25.628906 22.492188 L 25.628906 22.503906 C 24.890625 23.804688 23.507812 25.238281 22.085938 24.78125 L 22.074219 24.757812 C 20.628906 24.355469 17.234375 22.605469 15.085938 20.898438 C 13.980469 20.023438 12.96875 18.992188 12.1875 18 C 11.484375 17.117188 10.773438 16.070312 10.082031 14.8125 C 8.625 12.183594 8.304688 11.007812 8.304688 11.007812 C 7.847656 9.585938 9.277344 8.203125 10.582031 7.464844 L 10.59375 7.464844 C 11.222656 7.136719 11.824219 7.246094 12.230469 7.730469 C 12.230469 7.730469 13.078125 8.742188 13.4375 9.242188 C 13.78125 9.707031 14.238281 10.453125 14.476562 10.871094 C 14.894531 11.613281 14.636719 12.375 14.226562 12.6875 L 13.40625 13.34375 C 12.988281 13.679688 13.042969 14.300781 13.042969 14.300781 C 13.042969 14.300781 14.257812 18.902344 18.804688 20.0625 C 18.804688 20.0625 19.425781 20.117188 19.761719 19.703125 L 20.417969 18.882812 C 20.734375 18.46875 21.492188 18.210938 22.238281 18.628906 C 23.242188 19.195312 24.519531 20.078125 25.367188 20.875 C 25.847656 21.265625 25.957031 21.859375 25.628906 22.492188 Z M 25.628906 22.492188 "/>
                                </g>
                                </svg> {{@$setting_data->viber}}</p>
                        @endif
                        @if(@$setting_data->email)
                            <p class="grieve-social"><i class="fas fa-envelope"></i> {{@$setting_data->email}}</p>
                        @endif
                    </div><!-- /.about-two__box__content -->
                    </div><!-- /.about-two__box -->
                    <!-- /.about-two__summery -->
                  </div><!-- /.about-two__content -->
                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </section>

        @endif

@endsection

@section('js')

<script type="text/javascript">
	let i=2;
	$(document).ready(function(){
		var radius = 300;
		var fields = $('.step-by');
		var container = $('.step-process');
		var width = container.width();
		radius = width/2.4;

		var height = container.height();
		var angle = 0, step = (2*Math.PI) / fields.length;
		fields.each(function() {
			var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
			var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
			if(window.console) {
				console.log($(this).text(), x, y);
			}
			
			$(this).css({
				left: x + 'px',
				top: y + 'px'
			});
			angle += step;
		});
		
		
		$('.step-by').click(function(){
			
			var dataTab= $(this).data("tab");
			$('.step-by').removeClass('active');
			$(this).addClass('active');
			$('.process-item').removeClass('active');
			$( '.process-item'+ dataTab).addClass('active');
			i=dataTab;
			
			$('.step-process').css({
				"transform":"rotate("+(360-(i-1)*36)+"deg)",
				"transition":"2s"
			});
			$('.step-by').css({
				"transform":"rotate("+((i-1)*36)+"deg)",
				"transition":"1s"
			});
			
			
		});
		
		setInterval(function(){
			var dataTab= $('.step-by.active').data("tab");
            var total = "{{count(@$recruitments)}}"
			if(dataTab>total||i>total){
			dataTab=1;
			i=1;
			}
			$('.step-by').removeClass('active');
			$('[data-tab="'+i+'"]').addClass('active');
			$('.process-item').removeClass('active');
			$( '.process-item'+i).addClass('active');
			i++;
			
			
			$('.step-process').css({
				"transform":"rotate("+(360-(i-2)*36)+"deg)",
				"transition":"2s"
			});
			$('.step-by').css({
				"transform":"rotate("+((i-2)*36)+"deg)",
				"transition":"1s"
			});
			
			}, 5000);
		
	});
</script>
@endsection
