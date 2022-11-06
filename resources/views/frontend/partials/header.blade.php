<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Src Job Placement"/>
		<meta name="description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else Src Job Placement @endif "/>
		<meta name="keywords" content="@if(!empty(@$setting_data->meta_tags)) {{@$setting_data->meta_tags}} @else Src Job Placement @endif ">
		<link rel="canonical" href="https://srcjobplacement.com/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

			<!-- SITE TITLE -->
		@if (\Request::is('/'))
		    <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif </title>
		@else
            <title>@yield('title') | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif </title>
		@endif
		<meta property="og:title" content="@if(!empty(@$setting_data->meta_title)) {{ucwords(@$setting_data->meta_title)}} @else Src Job Placement @endif" />
		<meta property="og:type" content="Consultancy" />
		<meta property="og:url" content="https://srcjobplacement.com/" />

		<meta property="og:site_name" content="Src Job Placement" />
		<meta property="og:description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else Src Job Placement @endif " />


		<!-- FAVICON AND TOUCH ICONS -->

		<link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/settings/'.@$setting_data->favicon)}}<?php }?>">


     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/conalz-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/polyglot-language-switcher/polyglot-language-switcher.css')}}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/conalz.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/conalz-responsive.css')}}" />
    <!-- Main Style -->

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '{{@$setting_data->google_analytics}}');
		</script>
    <style>
      .main-menu .navbar-collapse li.active a {
          /* color: #fc653c; */
      }
    </style>
        @yield('css')

	</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <p>@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__btn-box">
                            <a href="{{route('contact')}}" class="thm-btn main-header__btn">Get Consulting</a>
                        </div>
                        <div class="main-header__top-social">
                           
                                @if(!empty(@$setting_data->facebook))
                                  <a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
                                  ><i class="fab fa-facebook-f"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->youtube))

                                  <a href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
                                  ><i class="fab fa-youtube"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->instagram))

                                  <a href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
                                  ><i class="fab fa-instagram"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->linkedin))

                                  <a href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="social-linkedin"
                                  ><i class="fab fa-linkedin-in"></i
                                  ></a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                    @if(request()->is('/'))
                                        <a href="/"> <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="Src Job Placement" title="Src Job Placement"></a>
                                    @endif
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                        <li class="{{request()->is('/') ? 'current' : ''}} ">
                                          <a href="/" >Home</a>
                                        </li>

                                        @if(!empty($top_nav_data))
                                          @foreach($top_nav_data as $nav)
                                              @if(!empty($nav->children[0]))

                                                  <li id="{{@$loop->index}}" class="{{request()->is(@$nav->slug)  ? 'current' : ''}} dropdown">
                                                      <a href="#" class="">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif </a>

                                                        <ul >
                                                          @foreach($nav->children[0] as $childNav)
                                                              @if($childNav->type == 'custom')

                                                                  <li  class="{{request()->is(@$childNav->slug) ? 'current' : ''}} @if(!empty($childNav->children[0])) dropdown @endif ">
                                                                      <a href="/{{@$childNav->slug}}" class="" @if(@$childNav->target !== NULL) target="_blank" @endif >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                          <a href="/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'current' : ''}} ">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @elseif($childNav->type == 'post')
                                                                  <li  class="{{request()->is('blog/'.@$childNav->slug) ? 'current' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif">
                                                                      <a href="{{url('blog')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @elseif($childNav->type == 'service')
                                                                  <li  class="{{request()->is('service/'.@$childNav->slug) ? 'current' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif">
                                                                      <a href="{{url('service')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @else
                                                                  <li  class="{{request()->is(@$childNav->slug) ? 'current' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif ">
                                                                      <a href="{{url('/')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'current' : ''}}  ">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'current' : ''}} ">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif

                                                                  </li>
                                                              @endif
                                                          @endforeach

                                                        </ul>
                                                  </li>

                                              @else
                                                  @if($nav->type == 'custom')
                                                      <li   class="{{request()->is(@$nav->slug.'*') ? 'current' : ''}} ">
                                                          <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @elseif($nav->type == 'service')
                                                      <li   class="{{request()->is('service/'.@$nav->slug.'*') ? 'current' : ''}} ">
                                                          <a href="{{url('service')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @elseif($nav->type == 'post')
                                                      <li   class="{{request()->is('blog/'.@$nav->slug.'*') ? 'current' : ''}} ">
                                                          <a href="{{url('blog')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @else
                                                      <li   class="{{request()->is(@$nav->slug.'*') ? 'current' : ''}} ">
                                                          <a href="{{url('/')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @endif
                                              @endif
                                          @endforeach
                                      @endif
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call-search">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <span>Phone Number</span>
                                        <p><a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a></p>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

