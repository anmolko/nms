@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>

    .theme-btn.style-three, a.theme-btn.style-three.faq-button {
        color: #293043 !important;
        background: transparent;
        border: 1px solid rgba(0, 102, 255, 0.2);
    }
  .custom-editor .media{
        display: block;
    }
    .gallery-one {
      padding-top: 120px;
      padding-bottom: 100px;
  }
    .feature-item-three > img {
        width:60px;
        height:60px;
        margin-top: 10px;
        margin-right: 25px;
    }
    .custom-editor{
        font-size: 1.1875rem;
        text-align: justify;
    }

    .accordion-item {
      margin-bottom: 30px;
  }

      .gallery-one__card {
        height: 370px;

      }
      .gallery-one__card img{
        width: 100%;
          height: 100%;
          object-fit: cover;
      }


      ul, ol{
        padding-left: 1rem;
      }
    .about-me__summery p + p {
        margin-top: 0;
    }
/*
    .winrecruit ul li::before,.winrecruit ol li::before {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      width: 18px;
      height: 18px;
      font-size: 10px;
      margin-top: 7px;
      font-weight: 600;
      content: "\f00c";
      line-height: 14px;
      border: 2px solid;
      text-align: center;
      margin-right: 15px;
      border-radius: 50%;
      color: #0066ff;
      font-family: 'Font Awesome 5 Pro';
    } */
    /* .winrecruit ol li ol li::before,.winrecruit ol li ul li::before,.winrecruit ul li ol li::before ,.winrecruit ul li ul li::before {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      width: 18px;
      height: 18px;
      font-size: 10px;
      margin-top: 7px;
      font-weight: 600;
      content: "\f00c";
      line-height: 14px;
      border: 2px solid;
      text-align: center;
      margin-right: 15px;
      border-radius: 50%;
      color: #0066ff;
      font-family: 'Font Awesome 5 Pro';
    } */
    .basic-section-container{
      margin-bottom: 35px;
    }

    .basic-section-description{
      margin-bottom: 15px;
      color:var(--conalz-gray);
      text-align: justify;
    }

    a.thm-btn.map-button {
      font-size: 20px;
      margin-right: -30px;
      padding-top: 20px;
      padding-bottom: 20px;
      border-radius: var(--moniz-border-radius, 10px);
      text-align: center;
      font-weight: bold;
      color: #fff;
      margin-top: 30px;
      padding-left: 10px;
      padding-right: 10px;
      display: block;
  }

    .basic-section-container .section-title__title  {
        text-decoration-line: underline;
        text-decoration-style: solid;
        text-decoration-thickness: 2px;
        text-underline-offset: 10px;
    }

    </style>
  <!-- <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}"> -->

@endsection
@section('content')


        <!--Page Header Start-->
        <section class="page-header" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}});">
          <div class="page-header-shape-1"></div>
          <div class="page-header-shape-2"></div>
          <div class="container">
              <div class="page-header__inner">
                  <ul class="thm-breadcrumb list-unstyled">
                      <li><a href="/">Home</a></li>
                      <li><span>.</span></li>
                      <li>{{ucwords(@$page_detail->name)}} </li>
                  </ul>
                  <h2>{{ucwords(@$page_detail->name)}}</h2>
              </div>
          </div>
      </section>
      <!--Page Header End-->


    @foreach($sections as $key=>$value)

        @if($value == "basic_section")
          <!--- Basic Section--->

          <section class="reasons">
            <div class="container">
              <div class="row">

                @if(@$basic_elements->list_image == "right")

                <div class="col-xl-5 col-lg-6">
                  <div class="reasons__right">
                    <div class="section-title text-left">
                      @if(@$basic_elements->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$basic_elements->subheading)}}</span>

                          @endif
                          @if(@$basic_elements->heading)
                          <h2 class="section-title__title">
                               <span><?php
                                   $split = explode(" ", ucwords(@$basic_elements->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$basic_elements->heading))."\n"}}</span>
                              <span class="text-last">{{$split[count($split)-1]}}</span>

                              </h2>
                          @endif
                    </div>
                    <div class="reasons__text justified">
                    {!! @$basic_elements->description !!}
                    </div>
                    @if(@$basic_elements->button)
                        <a href="{{@$basic_elements->button_link}}" class="thm-btn reasons__btn" style="margin-top: 25px;"><span>{{ucwords(@$basic_elements->button)}}</span></a>
                      @endif
                  </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                  <div class="reasons__left">
                    <div class="reasons__img">
                      <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                      <div class="reasons__img-shape-1"></div>
                      <div class="reasons__img-shape-2"></div>
                    </div>
                  </div>
                </div>


                @else

                <div class="col-xl-7 col-lg-6">
                  <div class="reasons__left">
                    <div class="reasons__img">
                      <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                      <div class="reasons__img-shape-1"></div>
                      <div class="reasons__img-shape-2"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                  <div class="reasons__right">
                    <div class="section-title text-left">
                      @if(@$basic_elements->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$basic_elements->subheading)}}</span>

                          @endif
                          @if(@$basic_elements->heading)
                          <h2 class="section-title__title">
                              <span><?php
                                  $split = explode(" ", ucwords(@$basic_elements->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$basic_elements->heading))."\n"}}</span>
                              <span class="text-last">{{$split[count($split)-1]}}</span></h2>
                          @endif
                    </div>
                    <p class="reasons__text">
                    {!! @$basic_elements->description !!}
                    </p>
                    @if(@$basic_elements->button)
                        <a href="{{@$basic_elements->button_link}}" class="thm-btn reasons__btn" style="margin-top: 25px;"><span>{{ucwords(@$basic_elements->button)}}</span></a>
                      @endif
                  </div>
                </div>

                @endif


              </div>
            </div>
          </section>
        @endif

        @if($value == "call_to_action_1")
          <!--- Call to Action--->
          <section class="cta-two">
            <div class="cta-two-shape-1"></div>
            <div class="cta-two-shape-2"></div>
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div class="cta-two__inner">
                    <div class="cta-two__title">
                      <h2>{!! @$call1_elements->heading !!}</h2>
                    </div>
                    @if(@$call1_elements->button)
                      <div class="cta-two__btn-box">
                        <span><a href="{{@$call1_elements->button_link}}" class="thm-btn cta-two__btn thm-btn--dark thm-btn--dark--light-hover"><span>
                        {{ucwords(@$call1_elements->button)}}</span></a></span>

                      </div>
                    @endif

                  </div>
                </div>
              </div>
            </div>
          </section>

        @endif

        <!-- call2_elements -->
        @if($value == "call_to_action_2")

          <section class="two-boxes">
            <div class="container">
              <div class="two-boxes__inner">
                <div class="row">
                  <div class="col-xl-6 col-lg-6">
                    <div class="two-boxes__single two-boxes__single-one">
                      <div class="two-boxes__content">
                        <div class="two-boxes__icon">
                        </div>
                        <div class="two-boxes__text">
                          <p> {!! wordwrap(@$call2_elements->subheading,25,"<br>\n",TRUE) !!}</p>
                        </div>
                      </div>
                      <div class="two-boxes__arrow">
                        @if(@$call2_elements->button)

                          <a href="{{@$call1_elements->button}}"><span class="icon-right-arrow"></span></a>
                        @else
                          <a href="{{route('contact')}}"><span class="icon-right-arrow"></span></a>

                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                    <div class="two-boxes__single two-boxes__single-two">
                      <div class="two-boxes__content">
                        <div class="two-boxes__icon">
                        </div>
                        <div class="two-boxes__text">
                            <p> {!! wordwrap(@$call2_elements->list_header,25,"<br>\n",TRUE) !!}</p>

                        </div>
                      </div>
                      <div class="two-boxes__arrow">
                        @if(@$call2_elements->button_link)

                          <a href="{{@$call1_elements->button_link}}"><span class="icon-right-arrow"></span></a>
                        @else
                          <a href="{{route('contact')}}"><span class="icon-right-arrow"></span></a>

                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

            <!--Video One Start-->
          <section class="video-one">
              <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                  style="background-image: url({{asset('/images/section_elements/basic_section/'.@$call2_elements->image) }})"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="video-one__inner">
                            @if(@$call2_elements->description)

                              <div class="video-one__link">
                                <a href="{{@$call2_elements->description}}" class="video-one__btn video-popup">
                                  <div class="video-one__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                  </div>
                                </a>
                              </div>
                            @endif
                            <h2 class="video-one__text">{!! wordwrap(@$call2_elements->heading,25,"<br>\n",TRUE) !!}</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--Video One End-->
        @endif

        @if($value == "video_section")

        <section class="blog-one blog-grid">
            <div class="container">
                  <div class="section-title text-center">
                      <span class="section-title__tagline">NMS Recent Activites</span>
                      <h2 class="section-title__title">
                          <span>Video</span>
                          <span class="text-last">Gallery</span>
                      </h2>
                  </div>

                <div class="row">
                  @foreach(@$video_section_elements as $video_element)
                        @if(@$video_element->heading == "youtube")
                            @if(str_contains(@$video_element->description,'youtube'))
                                <?php
                                    $thumbnail=get_youtube_thumbnail($video_element->description);
                                ?>
                            @else
                                <?php
                                $thumbnail=get_vimeo_thumbnail($video_element->description);
                                ?>
                            @endif
                        @else
                            @if(str_contains(@$video_element->description,'youtube'))
                                <?php
                                    $thumbnail=get_youtube_thumbnail($video_element->description);
                                ?>
                            @else
                                <?php
                                $thumbnail=get_vimeo_thumbnail($video_element->description);
                                ?>
                            @endif
                        @endif

                      <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{@$thumbnail}}" alt="">
                                    <a href="{{@$video_element->description}}" class="video-popup">
                                      <div class="video-one__video-icon">
                                          <span class="icon-play-button"></span>
                                          <i class="ripple"></i>
                                      </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                  @endforeach
                </div>
             </div>
         </section>

        @endif

        @if($value == "background_image_section")
          <!--- Background Image--->
          <section class="we-make">
            <div class="we-make-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/we-make-bg.jpg')}})"></div>
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <div class="core-features__left">
                    <div class="section-title text-left">
                      @if(@$bgimage_elements->subheading)

                      <span class="section-title__tagline">{!! ucfirst(@$bgimage_elements->subheading) !!}</span>
                      @endif
                      <h2 class="section-title__title">
                          <span><?php
                              $split = explode(" ", ucfirst(@$bgimage_elements->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucfirst(@$bgimage_elements->heading))."\n"}}</span>
                          <span class="text-last">{{$split[count($split)-1]}}</span>

                      </h2>
                    </div>
                    <div class="core-features__left-bottom">
                      <div class="core-features__left-bottom-img">
                        <img src="{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}" alt="">
                      </div>
                      <div class="core-features__left-bottom-text">
                        <p>{{@$bgimage_elements->description}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="core-features__promicess">
                    <ul class="list-unstyled core-features__promicess-list">
                      <li>
                        <div class="text">
                          <p>{{@$bgimage_elements->list_description}}</p>
                        </div>
                        <div class="icon">
                          <span class="icon-tick"></span>
                        </div>
                      </li>
                      <li>
                        <div class="text">
                          <p>{{@$bgimage_elements->list_header}}</p>
                        </div>
                        <div class="icon">
                          <span class="icon-tick"></span>
                        </div>
                      </li>
                      <li>
                        <div class="text">
                          <p>{{@$bgimage_elements->list_image}}</p>
                        </div>
                        <div class="icon">
                          <span class="icon-tick"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "basic_section2")
            <!--- Basic Section 2--->
          <section class="reasons-one">
            <div class="container">
              <div class="row">
                <div class="col-xl-5">
                  <div class="reasons-one__left">
                    <div class="section-title text-left">
                         @if(@$basic_elements2->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$basic_elements2->subheading)}}</span>

                          @endif
                          @if(@$basic_elements2->heading)
                          <h2 class="section-title__title">
                              <span><?php
                                  $split = explode(" ", ucwords(@$basic_elements2->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$basic_elements2->heading))."\n"}}</span>
                              <span class="text-last">{{$split[count($split)-1]}}</span>
                          </h2>
                          @endif
                    </div>
                    <div class="reasons-one__text-1 justified">{!! @$basic_elements2->description !!}</div>
                    @if(@$basic_elements2->button)
                        <a href="{{@$basic_elements2->button_link}}" class="thm-btn"><span>{{ucwords(@$basic_elements2->button)}}</span></a>
                      @endif
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="reasons-one__img-box">
                    <div class="reasons-one-img-box-bg"></div>
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="reasons-one__img-one">
                          <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements2->image) }}" alt="">
                          <div class="reasons-one__shape-1"></div>
                          <div class="reasons-one__shape-2"></div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="reasons-one__img-two">
                          <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements2->list_header) }}" alt="">
                        </div>
                        <div class="reasons-one__img-three reasons-one__img-two">
                          <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements2->list_description) }}" alt="">
                          <div class="reasons-one__shape-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "directors_message")
            <!--- Basic Section--->

            <section class="about-me" style=" padding-top: 100px; padding-bottom: 100px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5" style="margin: auto">

                            <div class="about-me__image get-in-touch__img wow fadeInLeft animated" data-wow-duration="1500ms" style="visibility: visible; margin-right: 0; animation-duration: 1500ms; animation-name: fadeInLeft;">
                                <img src="{{asset('/images/section_elements/basic_section/'.@$directors_message->image) }}" alt="">
                                <div class="get-in-touch__img-shapes">
                                    <div class="get-in-touch__img-shape-1"></div>
                                    <div class="get-in-touch__img-shape-2"></div>
                                </div>
                            </div>
{{--                            <div class="about-me__image">--}}
{{--                                <img src="{{asset('/images/section_elements/basic_section/'.@$directors_message->image) }}" alt="">--}}
{{--                            </div><!-- /.about-me__image -->--}}
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-12 col-lg-7">
                            <div class="about-me__content">
                                <h3 class="about-me__title">
                                <span class="text-red"><?php
                                    $split = explode(" ", ucwords(@$directors_message->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$directors_message->heading))."\n"}}</span>
                                    <span class="text-last">{{$split[count($split)-1]}}</span>



                                </h3>
                                <div class="about-me__summery justified" style="margin-top: 10px;">
                                    {!! @$directors_message->description !!}
                                </div>
                                <p class="get-in-touch__locatins-count-text">{{$directors_message->subheading}}</p>
                            </div><!-- /.about-me__content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>
        @endif

        @if($value == "flash_cards")
          <!--- Mission Vision--->

          <section class="web-solutions">
            <div class="web-solutions-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/web-solutions-bg.jpg')}})">
            </div>
            <div class="container">
              <div class="section-title text-center">
                @if(@$flash_elements[0]->subheading)
                <span class="section-title__tagline">{{ucfirst(@$flash_elements[0]->subheading)}}</span>

                @endif
                @if(@$flash_elements[0]->heading)
                <h2 class="section-title__title">

                    <span><?php
                        $split = explode(" ", ucwords(@$flash_elements[0]->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$flash_elements[0]->heading))."\n"}}</span>
                    <span class="text-last">{{$split[count($split)-1]}}</span>

                </h2>
                @endif
              </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="web-solutions__box tabs-box">
                    <ul class="tab-btns tab-buttons clearfix list-unstyled">
                      <li data-tab="#one" class="tab-btn active-btn"><span>{{ucwords(@$flash_elements[0]->list_header)}}</span></li>
                      <li data-tab="#two" class="tab-btn"><span>{{ucwords(@$flash_elements[1]->list_header)}}</span></li>
                      <li data-tab="#three" class="tab-btn"><span>{{ucwords(@$flash_elements[2]->list_header)}}</span></li>
                    </ul>
                    <div class="tabs-content">
                      @foreach(@$flash_elements as $flash_element)
                        @if($loop->index == 0)
                          <div class="tab active-tab" id="one" style="display: block;">
                            <div class="web-solutions__content">
                              <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-img">
                                    <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">
                                  </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-right">
                                    <p class="web-solutions__content-desc">{{ucfirst(@$flash_element->list_description) }} </p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($loop->index == 1)
                          <div class="tab" id="two" style="display: none;">
                            <div class="web-solutions__content">
                              <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-img">
                                    <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">

                                  </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-right">
                                    <p class="web-solutions__content-desc">{{ucfirst(@$flash_element->list_description) }} </p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($loop->index == 2)

                          <div class="tab" id="three" style="display: none;">
                            <div class="web-solutions__content">
                              <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-img">
                                    <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">

                                  </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                  <div class="web-solutions__content-right">
                                    <p class="web-solutions__content-desc">{{ucfirst(@$flash_element->list_description) }} </p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "simple_header_and_description")
          <!--- Simple Header Description--->
          <section class="portfolio-fullwidth">
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <div class="portfolio-fullwidth__img-box">
                  </div>
                  <div class="portfolio-fullwidth__content">
                  @if(@$header_descp_elements->heading)

                    <h2 class="portfolio-fullwidth__title"
                    style="margin: auto;
                      width: 70%;
                      text-align: center;
                      margin-bottom: 40px;
                      text-transform: uppercase;">

                        <span class="text-red"><?php
                            $split = explode(" ", ucwords(@$header_descp_elements->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$header_descp_elements->heading))."\n"}}</span>
                        <span class="text-last">{{$split[count($split)-1]}}</span>

                    </h2>
                      @endif

                      <div class="portfolio-fullwidth__text-1 winrecruit" style="text-align: justify;">
                        {!! @$header_descp_elements->description !!}
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "map_and_description")
          <!--- Map & Description--->
          <section class="about-two">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-5">
                  <div class="about-two__image">
                    @if(@$map_descp->list_description)
                      {!! @$map_descp->list_description !!}
                      @elseif(@$setting_data->google_map)
                        <iframe frameborder="0" width="100%" height="660px"scrolling="no" marginheight="0" marginwidth="0" src="{{@$setting_data->google_map}}"
                                  title="%3$s" aria-label="%3$s"></iframe>
                    @endif
                    @if(@$map_descp->button)
                        <a href="{{@$map_descp->button_link}}" class="thm-btn map-button"><span>{{ucwords(@$map_descp->button)}}</span></a>
                      @endif
                  </div><!-- /.about-two__image -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-7">
                  <div class="about-two__content" style="padding: 50px;">
                    <div class="section-title text-left">
                        @if(@$map_descp->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$map_descp->subheading)}}</span>

                          @endif
                          @if(@$map_descp->heading)
                          <h2 class="section-title__title">
                              <span><?php
                                  $split = explode(" ", ucwords(@$map_descp->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$map_descp->heading))."\n"}}</span>
                              <span class="text-last">{{$split[count($split)-1]}}</span>

                          </h2>
                          @endif
                    </div>
                    <div class="about-two__box">
                      <!-- /.about-two__box__icon -->
                      <div class="about-two__box__content">
                       {{ ucfirst(@$map_descp->description) }}
                    </div><!-- /.about-two__box__content -->
                    </div><!-- /.about-two__box -->
                    <!-- /.about-two__summery -->
                  </div><!-- /.about-two__content -->
                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </section>



        @endif

        @if($value == "accordion_section")
            <!-- FAQs Page Area start -->
            <section class="faqs-page">
                <div class="faqs-page-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/faqs-page-bg.jpg')}})"></div>
                <div class="container">
                  <div class="section-title text-center">
                    <span class="section-title__tagline">{{ucwords(@$accordian2_elements[0]->subheading)}}</span>
                    <h2 class="section-title__title">
                           <span><?php
                               $split = explode(" ", ucwords(@$accordian2_elements[0]->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$accordian2_elements[0]->heading))."\n"}}</span>
                        <span class="text-last">{{$split[count($split)-1]}}</span>

                    </h2>
                  </div>
                  <div class="row">
                    @foreach($accordian2_elements->chunk(2) as $index => $chunk )

                      <div class="col-xl-6 col-lg-6">
                        <div class="faqs-page__single">
                          <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            @foreach($chunk as  $accordian2_element)

                                <div class="accrodion @if($loop->first) active @endif @if($loop->last) last-chiled @endif">
                                  <div class="accrodion-title">
                                    <h4>{{@$accordian2_element->list_header}}</h4>
                                  </div>
                                  <div class="accrodion-content" style="@if($loop->first)  @else display: none; @endif">
                                    <div class="inner">
                                      <p>{!! @$accordian2_element->list_description !!}</p>
                                    </div><!-- /.inner -->
                                  </div>
                                </div>
                            @endforeach

                          </div>
                        </div>
                      </div>
                    @endforeach


                  </div>
                </div>
              </section>
          <!-- FAQs Page Area end -->
        @endif

        @if($value == "gallery_section")
          <!--- Gallery Section 1-->
        <section class="gallery-one">


          <div class="container-fluid">
              @if(Request::is('about-us'))
                  <div class="section-title text-center">
                      <span class="section-title__tagline">Our Gallery</span>
                      <h2 class="section-title__title">
                        <span>Legal </span><span class="text-last">Documents</span>
                      </h2>
                  </div>

                  @else
                  <div class="section-title text-center">
                      <span class="section-title__tagline">NMS Recruitment</span>
                      <h2 class="section-title__title">
                          <span>Our </span><span class="text-last">Gallery</span>
                      </h2>
                  </div>
              @endif
            <div class="row masonary-layout">

            @foreach(@$gallery_elements as $gallery_element)

              <div class="col-md-6 col-lg-4">
                  <div class="team-one__single">
                      <div class="team-one__img-box">
                          <div class="team-one__img gallery-one__card">
                              <img src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" alt="">
                              <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" class="img-popup">
                                  <span></span>
                              </a>
                          </div>
                          <div class="team-one__social">
                              <div class="team-one__member-info">
                                  <p class="team-one__member-title">{{ ucfirst(str_replace('-',' ',$gallery_element->original_name))}}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><!-- /.col-md-6 col-lg-3 -->
              @endforeach


            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->

        @endif

        @if($value == "slider_list")
          <!-- Slider List Area start -->
          @if(@$slider_list_elements[0]->heading)

            <!--Portfolio Two Start-->
            <section class="portfolio-two" style="margin-top: 80px;margin-bottom: 20px;">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">{{ucfirst(@$slider_list_elements[0]->description)}}</span>
                        <h2 class="section-title__title">
                            <span><?php
                                $split = explode(" ", ucwords(@$slider_list_elements[0]->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$slider_list_elements[0]->heading))."\n"}}</span>
                            <span class="text-last">{{$split[count($split)-1]}}</span>
                        </h2>
                    </div>
                    <div class="portfolio-two__carousel owl-theme owl-carousel">

                      @for ($i = 1; $i <=@$list_3; $i++)

                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img">
                                <img src="{{asset('/images/section_elements/list_1/'.@$slider_list_elements[$i-1]->list_image)}}" alt="">
                                <div class="portfolio-one__experience">

                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">{{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        @endfor

                    </div>
                </div>
            </section>
            <!--Portfolio Two End-->

          @endif
        @endif

        @if($value == "simple_accordion_tab2")

        <section class="we-change">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="we-change__left-faqs">
                            <div class="section-title text-left">
                              <span class="section-title__tagline">{{ucwords(@$process_elements[0]->description)}}</span>
                              <h2 class="section-title__title">
                                  <span><?php
                                      $split = explode(" ", ucwords(@$process_elements[0]->heading));?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', ucwords(@$process_elements[0]->heading))."\n"}}</span>
                                  <span class="text-last">{{$split[count($split)-1]}}</span>
                              </h2>
                            </div>
                            <div class="we-change__faqs">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>{{@$process_elements[0]->list_header}}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{!! @$process_elements[0]->list_description !!}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>{{@$process_elements[1]->list_header}}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{!! @$process_elements[1]->list_description !!}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4>{{@$process_elements[2]->list_header}}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{!! @$process_elements[2]->list_description !!}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="we-change__right">
                            <div class="we-change__right-img">
                                <img src="{{asset('/images/section_elements/list_1/'.@$process_elements[0]->list_image)}}" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif



    @endforeach


@endsection
@section('js')

@endsection
