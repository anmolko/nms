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

      .project-two__img {
        height: 370px;

      }
      .project-two__img img{
        width: 100%;
          height: 100%;
          object-fit: cover;
      }


      ul, ol{
        padding-left: 1rem;
      }

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
    }
    .winrecruit ol li ol li::before,.winrecruit ol li ul li::before,.winrecruit ul li ol li::before ,.winrecruit ul li ul li::before {
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
    }
    .basic-section-container{
      margin-bottom: 35px;
    }

    .basic-section-description{
      margin-bottom: 15px;
      color:var(--conalz-gray);
      text-align: justify;
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
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}});">
            </div>
            <div class="page-header__shape-one float-bob-x-2"></div>
            <div class="page-header__shape-2 float-bob-y">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-2.png')}}" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-3.png')}}" alt="">
            </div>
            <div class="page-header__shape-4 float-bob-y">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-4.png')}}" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner text-left">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li> <a href="#">{{ucwords(@$page_detail->name)}}</a></li>
                    </ul>
                    <h2>{{ucwords(@$page_detail->name)}}</h2>
                </div>
            </div>
        </section>
      <!--Page Header End-->



    @foreach($sections as $key=>$value)

        @if($value == "basic_section")
          <!--- Basic Section--->
          <section class="why-choose-one">
            <div class="container">
              <div class="row">
                @if(@$basic_elements->list_image == "right")

                  
                  <div class="col-xl-6">
                    <div class="why-choose-one__right">
                      <div class="section-title basic-section-container" >
                          @if(@$basic_elements->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$basic_elements->subheading)}}</span>

                          @endif
                          @if(@$basic_elements->heading)
                          <h2 class="section-title__title">{{ucwords(@$basic_elements->heading)}}</h2>
                          @endif
                        </h2>
                      </div>
                      <p class="why-choose-one-text basic-section-description" >{!! @$basic_elements->description !!}</p>
                      @if(@$basic_elements->button)
                        <a href="{{@$basic_elements->button_link}}" class="thm-btn cta-one__right-btn">{{ucwords(@$basic_elements->button)}}</a>
                      @endif
                    
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="why-choose-one__left">
                      <div class="why-choose-one__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <div class="why-choose-one__img">
                          <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-xl-6">
                    <div class="why-choose-one__left">
                      <div class="why-choose-one__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <div class="why-choose-one__img">
                          <img src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="why-choose-one__right">
                      <div class="section-title basic-section-container" >
                          @if(@$basic_elements->subheading)
                          <span class="section-title__tagline">{{ucfirst(@$basic_elements->subheading)}}</span>

                          @endif
                          @if(@$basic_elements->heading)
                          <h2 class="section-title__title">{{ucwords(@$basic_elements->heading)}}</h2>
                          @endif
                        </h2>
                      </div>
                      <p class="why-choose-one-text basic-section-description" >{!! @$basic_elements->description !!}</p>
                      @if(@$basic_elements->button)
                        <a href="{{@$basic_elements->button_link}}" class="thm-btn cta-one__right-btn">{{ucwords(@$basic_elements->button)}}</a>
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
          <div class="cta-one">
              <div class="cta-one__bg-img" style="background-image: url({{asset('assets/frontend/images/backgrounds/cta-one-bg-1.jpg')}});">
              </div>
              <div class="container">
                  <div class="cta-one__inner">
                      <div class="cta-one__left">
                          <div class="cta-one__img-box">
                              <img src="{{asset('/images/section_elements/basic_section/'.@$call1_elements->image) }}" alt="">
                          </div>
                          <div class="cta-one__content">
                              <h3 class="cta-one__title">
                                {!! wordwrap(@$call1_elements->heading,22,"<br>\n",TRUE) !!}
                              
                              </h3>
                              <p class="cta-one__text">
                                {!! wordwrap(@$call1_elements->description,50,"<br>\n",TRUE) !!}
                              </p>
                          </div>
                      </div>
                      @if(@$call1_elements->button)

                        <div class="cta-one__right">
                      
                            <div class="cta-one__right-button">
                                <a href="{{@$call1_elements->button_link}}" class="thm-btn cta-one__right-btn">{{ucwords(@$call1_elements->button)}}</a>
                            </div>
                        </div>
                      @endif

                  </div>
              </div>
          </div>
          <!--Cta One end-->
        @endif

        @if($value == "background_image_section")
          <!--- Background Image--->
        <section class="cta-project">
            <div class="cta-project-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}});">
            </div>
            <div class="container">
                <div class="cta-project__top">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="cta-project__top-left">
                                <p class="cta-project__tagline">  {!! wordwrap(@$bgimage_elements->heading,32,"<br>\n",TRUE) !!}</p>
                                <h3 class="cta-project__title">{!! wordwrap(@$bgimage_elements->subheading,22,"<br>\n",TRUE) !!}</h3>
                            </div>
                        </div>
                        <div class="col-xl-3">
                          @if(@$bgimage_elements->list_description)
                            <div class="cta-project__top-right">
                                <div class="cta-project__video-link">
                                    <a href="{{@$bgimage_elements->list_description}}" class="video-popup">
                                        <div class="cta-project__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                          @endif

                        </div>
                    </div>
                </div>
                <div class="cta-project__bottom" style="margin-top: 13px;">
               
                <p class="cta-one__text" >{{ucfirst(@$bgimage_elements->description)}}</p>
                </div>
            </div>
        </section>
        <!--CTA Project End-->
        @endif

        @if($value == "flash_cards")
          <!--- Mission Vision--->
          <section class="mission-one">
            <div class="container">
              <div class="row">
                <div class="col-xl-6">
                  <div class="mission-one__left">
                  @foreach(@$flash_elements as $flash_element)
                    @if($loop->index == 0)
                    <div class="section-title text-left" style="margin-bottom: 35px;">
                      <span class="section-title__tagline">{{ucwords(@$flash_element->list_header)}}</span>
                      <p class="mission-one__text-1" style="padding-top: 10px;">{{ucfirst(@$flash_element->list_description) }} </p>
                    </div>
                    @endif

                    @if($loop->index == 1)
                    <div class="section-title text-left mission-one__section-title">
                      <span class="section-title__tagline">{{ucwords(@$flash_element->list_header)}}</span>
                      <p class="mission-one__text-1" style="padding-top: 10px;">{{ucfirst(@$flash_element->list_description) }}
                       </p>
                    </div>
                    @endif

                    @if($loop->index == 2)
                    <div class="section-title text-left" style="margin-top: 25px;">
                      <span class="section-title__tagline">{{ucwords(@$flash_element->list_header)}}</span>
                      <p class="mission-one__text-1" style="padding-top: 10px;">{{ucfirst(@$flash_element->list_description) }} </p>
                    </div>
                    @endif
                    @endforeach

                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="mission-one__right">
                    <div class="mission-one__img-box wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                      @foreach(@$flash_elements as $flash_element)
                        @if($loop->index == 2) 
                          <div class="mission-one__img-one">
                            <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">
                          </div>
                          @endif

                          @if($loop->index == 1)
                          <div class="mission-one__img-two">
                            <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">
                          </div>
                          @endif

                        @if($loop->index == 0)
                          <div class="mission-one__img-three">
                            <img src="{{asset('/images/section_elements/list_1/'.@$flash_element->image)}}" alt="">
                          </div>
                        @endif
                      @endforeach
                      <div class="mission-one__shape-1">
                        <img src="{{asset('assets/frontend/images/shapes/mission-one-shape-1.png')}}" alt="">
                      </div>
                      <div class="mission-one__shape-2 float-bob-y">
                        <img src="{{asset('assets/frontend/images/shapes/mission-one-shape-2.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "simple_header_and_description")
          <!--- Simple Header Description--->
          <section class="service-details">
            <div class="container">
              <div class="row">
                <div class="col-xl-12 col-lg-12">
                  <div class="service-details__right">
                    @if(@$header_descp_elements->heading)
                      <h3 class="service-details__title-two" style="text-align: center;">{{ucwords(@$header_descp_elements->heading)}}</h3>
                    @endif

                    <p class="service-details__text-1" style="text-align: justify;">
                      <div class="winrecruit">
                        {!! @$header_descp_elements->description !!}
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif

        @if($value == "map_and_description")
          <!--- Map & Description--->

          <section class="mission-one">
            <div class="container">
              <div class="row">
                <div class="col-xl-6">
                  <div class="mission-one__left">
                    <div class="section-title text-left">
                      @if(@$map_descp->subheading)

                      <span class="section-title__tagline">{{@$map_descp->subheading}}</span>
                      @endif

                      @if(@$map_descp->heading)
                        <h2 class="section-title__title"> <span>{{ucwords(@$map_descp->heading)}}</span>
                        </h2>
                      @endif

                      <p class="mission-one__text-1" style="padding-top: 20px;">{{ ucfirst(@$map_descp->description) }}</p>
                      @if(@$map_descp->button)
                        <a href="{{@$map_descp->button_link}}" class="thm-btn cta-one__right-btn" style="margin-top: 20px;">{{ucwords(@$map_descp->button)}}</a>
                      @endif
                    
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                    @if(@$map_descp->list_description)
                    {!! @$map_descp->list_description !!}
                    @elseif(@$setting_data->google_map)
                      <iframe frameborder="0" width="100%" height="660px"scrolling="no" marginheight="0" marginwidth="0" src="{{@$setting_data->google_map}}"
                                  title="%3$s" aria-label="%3$s"></iframe>
                    @endif
                          
                </div>
              </div>
            </div>
          </section>

        @endif

        @if($value == "accordion_section_2")
            <!-- FAQs Page Area start -->
            <section class="faq-page">
              <div class="container">
                <div class="contact-form__title-box">
                  <span>{{ucwords(@$accordian2_elements[0]->subheading)}}</span>
                  <h3>{{ucwords(@$accordian2_elements[0]->heading)}}</h3>
                </div>
                <div class="faq-page__top">
                  <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                  @foreach($accordian2_elements as  $accordian2_element)

                    <div class="accrodion @if($loop->first) active @endif">
                      <div class="accrodion-title">
                        <h4> {{@$accordian2_element->list_header}}</h4>
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
            </section>
          <!-- FAQs Page Area end -->
        @endif


        @if($value == "small_box_description")

          <!-- Small Box description start -->
          <section class="address">
            <div class="container">
              <div class="row">
              @for ($i = 1; $i <=@$process_num; $i++)

                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                  <div class="address__single">
                    <div class="address__content">
                      <h4 class="address__title">{{ucwords(@$process_elements[$i-1]->list_header)}}</h4>
                      <div class="address__phone-email" style="padding: 0 22px;">
                        <p style="font-size: 15px;">{{ucfirst(@$process_elements[$i-1]->list_description)}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                @endfor
                
              </div>
            </div>
          </section>

      
          <!-- Feature Six Area end -->
        @endif

        @if($value == "gallery_section")
          <!--- Gallery Section 1-->

        <section class="project-page-v-1">
            <div class="project-page-v-1-bg"
                style="background-image: url({{asset('assets/frontend/images/backgrounds/project-page-v-1-bg.jpg')}});"></div>
            <div class="container">
                <div class="row">
                @foreach(@$gallery_elements as $gallery_element)

                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-two__single">
                            <div class="project-two__img-box">
                                <div class="project-two__img">
                                    <img src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" alt="">
                                </div>
                                <div class="project-two__content">
                                    <div class="project-two__content-left">
                                        <div class="project-two__title-box">
                                            <p class="project-two__subtitle">{{ucwords(@$gallery_element->original_name)}}</p>
                                           
                                        </div>
                                    </div>
                                    <div class="project-two__details">
                                        <div class="project-two__details-box">
                                        
                                            <a href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}"
                                                class="project-two__icon-2 img-popup"><i class="icon-zoom-in"></i></a>
                                        </div>
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

        @if($value == "slider_list")
          <!-- Slider List Area start -->
          @if(@$slider_list_elements[0]->heading)
          
          <section class="services-one">
              <div class="services-one__bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/services-one-bg.jpg')}});">
              </div>
              <div class="container">
                  <div class="services-one__top text-center">
                      <div class="section-title">
                          <span class="section-title__tagline">{{ucfirst(@$slider_list_elements[0]->description)}}</span>
                          <h2 class="section-title__title"><span>{{ucwords(@$slider_list_elements[0]->heading)}}</span></h2>
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
                        @for ($i = 1; $i <=@$list_3; $i++)

                          <div class="item">
                              <div class="services-one__single">
                                  <div class="services-one__img">
                                      <img src="{{asset('/images/section_elements/list_1/'.@$slider_list_elements[$i-1]->list_image)}}" alt="">
                                  </div>
                                  <div class="services-one__content">
                                     
                                      <h3 class="services-one__title"><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">{{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h3>
                                      <p class="services-one__text">{{ucfirst(Str::limit(@$slider_list_elements[$i-1]->list_description, 100,'...'))}}</p>
                                      <div class="services-one__arrow">
                                          <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"><i class="icon-right-arrow-1"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endfor
                
                      </div>
                  </div>
              </div>
          </section>

          @endif
        @endif

    @endforeach


@endsection
@section('js')

@endsection
