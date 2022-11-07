<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="NMS Recruitment Service"/>
		<link rel="canonical" href="https://nmsmanpower.com/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

        @yield('seo')

		<!-- FAVICON AND TOUCH ICONS -->

		<link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/settings/'.@$setting_data->favicon)}}<?php }?>">
 
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate/animate.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/fontawesome/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jarallax/jarallax.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nouislider/nouislider.pips.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/odometer/odometer.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/swiper/swiper.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/moniz-icons/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/reey-font/stylesheet.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/twentytwenty/twentytwenty.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bxslider/jquery.bxslider.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/vegas/vegas.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/vendors/timepicker/timePicker.css')}}" />

        <!-- template styles -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/moniz.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/frontend/css/moniz-responsive.css')}}" />

        <!-- RTL Styles -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/moniz-rtl.css')}}">

        <!-- color css -->
        <link rel="stylesheet" id="jssDefault" href="{{asset('assets/frontend/css/colors/color-default.css')}}">
        <link rel="stylesheet" id="jssMode" href="{{asset('assets/frontend/css/modes/moniz-normal.css')}}">

        <!-- toolbar css -->
        <link rel="stylesheet" href="{{asset('assets/frontend/css/moniz-toolbar.css')}}">

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '{{@$setting_data->google_analytics}}');
		</script>
    <style>
      /* .main-menu .navbar-collapse li.active a {
          color: #fc653c;
      } */
    </style>
        @yield('css')

	</head>

    <body>

<div class="page-wrapper">
    <header class="main-header clearfix">
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="main-menu-wrapper__left clearfix">
                    <div class="main-menu-wrapper__logo">
                        @if(request()->is('/'))
                                    <a href="/"> <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="NMS Recruitment Service" title="NMS Recruitment Service"></a>
                                @endif
                    </div>
                  
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler">
                        <span></span>
                    </a>
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
                <div class="main-menu-wrapper__right">
                    <div class="main-menu-wrapper__right-contact-box">
                        <div class="main-menu-wrapper__right-contact-icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="main-menu-wrapper__right-contact-number">
                            <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

