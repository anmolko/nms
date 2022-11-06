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
</style>
@endsection
@section('content')

    @if(count($sliders) > 0)
        <!--Main Slider Start-->
        <section class="main-slider clearfix">
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
                                style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});"></div>
                            <!-- /.image-layer -->
                            <div class="main-slider-overly-one"></div>
                            <div class="main-slider-overly-two"></div>
                            <div class="main-slider-shape-1 float-bob-x">
                                <img src="{{asset('assets/frontend/images/shapes/main-slider-shape-1.png')}}" alt="">
                            </div>
                            <div class="main-slider-shape-2 float-bob-y">
                                <img src="{{asset('assets/frontend/images/shapes/main-slider-shape-2.png')}}" alt="">
                            </div>
                            <div class="main-slider-shape-3 float-bob-y">
                                <img src="{{asset('assets/frontend/images/shapes/main-slider-shape-3.png')}}" alt="">
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="main-slider__content">
                                            @if(@$slider->slider_link)
                                                <div class="main-slider__video-link">
                                                    <a href="{{@$slider->slider_link}}" class="video-popup">
                                                        <div class="main-slider__video-icon">
                                                            <span class="fa fa-play"></span>
                                                            <i class="ripple"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                            <p class="main-slider__sub-title">{{@$slider->subheading}}</p>
                                            <h2 class="main-slider__title">{{@$slider->heading}}</h2>
                                            <div class="main-slider__btn-box">
                                            @if(@$slider->button)
                                                <a href="{{@$slider->link}}" class="thm-btn main-slider__btn">{{@$slider->button}}</a>
                                            @endif
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-up-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-up-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

    @endif


    @if(!empty($homepage_info->welcome_description))
        <!-- Welcome section -->
        <section class="join-us">
            <div class="container">
                <div class="row">
                    @if(@$homepage_info->welcome_side_image == "left") 

                        <div class="col-xl-5 col-lg-5">
                            <div class="join-us__left">
                                <div class="join-us__img-box wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <div class="join-us__img">
                                        <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="join-us__right">
                                <div class="section-title text-left">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="section-title__tagline">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2 class="section-title__title"><span>{{ucwords(@$homepage_info->welcome_heading)}}</span></h2>
                                    @endif
                            
                                </div>
                                <p class="join-us__text-one">{{ ucfirst(@$homepage_info->welcome_description) }}</p>
                        
                                    @if(@$homepage_info->welcome_button)
                                            <a href="{{@$homepage_info->welcome_link}}" class="thm-btn join-us__right-btn">{{ucwords(@$homepage_info->welcome_button)}} </a>
                                    @endif
                        
                            </div>
                        </div>
                    @else
                        <div class="col-xl-7 col-lg-7">
                            <div class="join-us__right">
                                <div class="section-title text-left">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="section-title__tagline">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2 class="section-title__title"><span>{{ucwords(@$homepage_info->welcome_heading)}}</span></h2>
                                    @endif
                            
                                </div>
                                <p class="join-us__text-one">{{ ucfirst(@$homepage_info->welcome_description) }}</p>
                        
                                    @if(@$homepage_info->welcome_button)
                                            <a href="{{@$homepage_info->welcome_link}}" class="thm-btn join-us__right-btn">{{ucwords(@$homepage_info->welcome_button)}} </a>
                                    @endif
                        
                            </div>
                        </div>
                        
                        <div class="col-xl-5 col-lg-5">
                            <div class="join-us__left">
                                <div class="join-us__img-box wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <div class="join-us__img">
                                        <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
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

        <!--Status-->
        <section class="newsletter-one about-status">
            <div class="container">
                <div class="newsletter-one__inner">
                    <div class="newsletter-one__left">
                       
                        <div class="cta-one__right-count">
                            <div class="cta-one__right-count-box">
                                <span class="fas fa-plane-departure cta-one__right-icon"></span>
                                <h3 class="odometer odometer-auto-theme" data-count="{{ (@$homepage_info->project_completed) ? @$homepage_info->project_completed : '3670';}}">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit">
                                            <span class="odometer-digit-spacer">8</span>
                                            <span class="odometer-digit-inner">
                                                
                                                <span class="odometer-ribbon">
                                                    <span class="odometer-ribbon-inner">
                                                        <span class="odometer-value">1</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner"><span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span>
                                        </span></span>
                                    </div>
                                </h3>
                                <span class="cta-one__right-expert-plus">+</span>
                            </div>
                            <p class="cta-one__right-text">Projects Completed</p>
                        </div>
                        
                        <div class="cta-one__right-count">
                            <div class="cta-one__right-count-box">
                                <span class="fas fa-user-check cta-one__right-icon"></span>
                                <h3 class="odometer odometer-auto-theme" data-count="{{ (@$homepage_info->visa_approved) ? @$homepage_info->visa_approved : '3670';}}">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit">
                                            <span class="odometer-digit-spacer">8</span>
                                            <span class="odometer-digit-inner">
                                                
                                                <span class="odometer-ribbon">
                                                    <span class="odometer-ribbon-inner">
                                                        <span class="odometer-value">1</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner"><span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span>
                                        </span></span>
                                    </div>
                                </h3>
                                <span class="cta-one__right-expert-plus">+</span>
                            </div>
                            <p class="cta-one__right-text">Visa Approved</p>
                        </div>

                        <div class="cta-one__right-count">
                            <div class="cta-one__right-count-box">
                                <span class="far fa-smile cta-one__right-icon"></span>
                                <h3 class="odometer odometer-auto-theme" data-count="{{ (@$homepage_info->happy_clients) ? @$homepage_info->happy_clients : '3670';}}">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit">
                                            <span class="odometer-digit-spacer">8</span>
                                            <span class="odometer-digit-inner">
                                                
                                                <span class="odometer-ribbon">
                                                    <span class="odometer-ribbon-inner">
                                                        <span class="odometer-value">1</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner"><span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span>
                                        </span></span>
                                    </div>
                                </h3>
                                <span class="cta-one__right-expert-plus">+</span>
                            </div>
                            <p class="cta-one__right-text">Happy Clients</p>
                        </div>

                        <div class="cta-one__right-count">
                            <div class="cta-one__right-count-box">
                                <span class="fas fa-thumbs-up cta-one__right-icon"></span>
                                <h3 class="odometer odometer-auto-theme" data-count="{{ (@$homepage_info->success_stories) ? @$homepage_info->success_stories : '3670';}}">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit">
                                            <span class="odometer-digit-spacer">8</span>
                                            <span class="odometer-digit-inner">
                                                
                                                <span class="odometer-ribbon">
                                                    <span class="odometer-ribbon-inner">
                                                        <span class="odometer-value">1</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner"><span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span>
                                        </span></span>
                                    </div>
                                </h3>
                                <span class="cta-one__right-expert-plus">+</span>
                            </div>
                            <p class="cta-one__right-text">Success Stories</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Status-->
    @if(!empty($homepage_info->mv_heading))
        <!-- Mission Vision start -->
        <section class="testimonials-one">
            <div class="container">
                <div class="section-title text-center">
                  
                    @if(@$homepage_info->mv_subheading)
                        <span class="section-title__tagline">{{ucfirst(@$homepage_info->mv_subheading)}}</span>
                    @endif
                    @if(@$homepage_info->mv_heading)
                        <h2 class="section-title__title"><span>{{ucwords(@$homepage_info->mv_heading)}}</span></h2>
                    @endif
                </div>
                <div class="service-details__core-product-points-box">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="service-details__core-product-points-single">
                                <div class="service-details__core-product-icon-box">
                                    <div class="service-details__core-product-icon">
                                        <span class="icon-marketing-analysis-marketing-research"></span>
                                    </div>
                                    <div class="service-details__core-product-content">
                                        <h4>Mission</h4>
                                    </div>
                                </div>
                                <p class="service-details__core-product-text-2">{{ ucfirst(@$homepage_info->mission) }}</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="service-details__core-product-points-single">
                                <div class="service-details__core-product-icon-box">
                                    <div class="service-details__core-product-icon">
                                        <span class="fas fa-eye"></span>
                                    </div>
                                    <div class="service-details__core-product-content">
                                        <h4>Vision</h4>
                                    </div>
                                </div>
                                <p class="service-details__core-product-text-2">{{ ucfirst(@$homepage_info->vision) }}</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="service-details__core-product-points-single">
                                <div class="service-details__core-product-icon-box">
                                    <div class="service-details__core-product-icon">
                                        <span class="icon-protection-rain-umbrella"></span>
                                    </div>
                                    <div class="service-details__core-product-content">
                                        <h4>Value</h4>
                                    </div>
                                </div>
                                <p class="service-details__core-product-text-2">{{ ucfirst(@$homepage_info->value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- Mission Vision end -->
    @endif

    @if(!empty($homepage_info->action_heading))
        <!-- CTA Area start -->
        <div class="cta-one">
            <div class="cta-one__bg-img" style="background-image: url({{asset('/assets/frontend/images/background/cta-one-bg-1.jpg')}});">
            </div>
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <div class="cta-one__content">
                            <h3 class="cta-one__title">{{@$homepage_info->action_heading}}</h3>
                        </div>
                    </div>
                    <div class="cta-one__right">
                        <div class="cta-one__right-button">
                            <a href="{{@$homepage_info->action_link}}" class="thm-btn cta-one__right-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- CTA Area end -->
    @endif



    @if(!empty($homepage_info->core_main_heading))

        <!-- Core value start -->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">{{ucwords(@$homepage_info->core_main_heading)}}</span>
                                <h2 class="section-title__title"> <span>{{ucfirst(@$homepage_info->core_main_description)}}</span></h2>
                            </div>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-handshake"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading1)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description1)}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-analysis-analytics-business"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading2)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description2)}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="far fa-eye"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading3)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description3)}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-balance-scale"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading4)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description4)}}</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fas fa-network-wired"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading5)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description5)}}</p>
                                    </div>
                                </li>
                                 <li>
                                    <div class="icon">
                                        <span class="fas fa-user-shield"></span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ucwords(@$homepage_info->core_heading6)}}</h4>
                                        <p>{{ucfirst(@$homepage_info->core_description6)}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core value end -->
    @endif

    @if(count($latestServices) > 2)
        <!-- Services start -->

        <section class="services-one">
              <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);">
              </div>
              <div class="container">
                  <div class="services-one__top text-center">
                      <div class="section-title">
                          <span class="section-title__tagline">Recent Services</span>
                          <h2 class="section-title__title"><span>Look at our latest services</span></h2>
                      </div>
                    
                  </div>

                  <div class="services-one__bottom">
                      <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                          "loop": true,
                          "autoplay": false,
                          "margin": 30,
                          "nav": false,
                          "dots": true,
                          "smartSpeed": 500,
                          "autoplayTimeout": 10000,
                          "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                          "responsive": {
                              "0": {
                                  "items": 1
                              },
                              "768": {
                                  "items": 2
                              },
                              "992": {
                                  "items": 2
                              },
                              "1200": {
                                  "items": 3
                              }
                          }
                      }'>
                          @foreach(@$latestServices as $service)


                          <div class="item">
                              <div class="services-one__single">
                                  <div class="services-one__img">
                                      <img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="">
                                  </div>
                                  <div class="services-one__content">
                                     
                                      <h3 class="services-one__title"><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h3>
                                      <p class="services-one__text">{{ucfirst(Str::limit(@$service->sub_description, 70,'...'))}}</p>
                                      <div class="services-one__arrow">
                                          <a href="{{route('service.single',$service->slug)}}"><i class="icon-right-arrow-1"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach

                
                      </div>
                  </div>
              </div>
          </section>


        <!-- Services  end -->
    @endif




    @if(count($latestPosts) > 2)

        <!--Blog One Start-->
        <section class="blog-three">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog List</span>
                    <h2 class="section-title__title"><span>Latest Blog Post</span></h2>
                </div>
                <div class="row">
                    @foreach(@$latestPosts as $post)

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img">
                                <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="">
                            </div>
                            <div class="blog-three__content">
                                <div class="blog-three__date">
                                    <span>{{date('j',strtotime(@$post->created_at))}}</span>
                                    <p>{{date('M',strtotime(@$post->created_at))}}</p>
                                </div>
                                <div class="blog-three__title-box">
                                    
                                    <h4 class="blog-three__title"><a href="{{route('blog.single',$post->slug)}}">{{ucwords($post->title)}}</a></h4>
                                </div>
                                <div class="blog-three__content-box">
                                    <ul class="blog-three__meta list-unstyled">
                                        <li>
                                            <a href="{{url('/blog/categories/'.@$post->category->slug)}}"><i class="icon-tag-chevron-thin"></i>{{ucwords(@$post->category->name)}}</a>
                                        </li>
                                       
                                    </ul>
                                    <div class="blog-three__btn-box">
                                        <a href="{{route('blog.single',$post->slug)}}">Details<i
                                                class="icon-fast-forward-thin-double-arrows"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
  
    @endif


@endsection