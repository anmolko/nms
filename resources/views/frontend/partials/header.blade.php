<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="NMS Recruitment Service"/>
		<meta name="description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else NMS Recruitment Service @endif "/>
		<meta name="keywords" content="@if(!empty(@$setting_data->meta_tags)) {{@$setting_data->meta_tags}} @else NMS Recruitment Service @endif ">
		<link rel="canonical" href="https://nmsmanpower.com/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

			<!-- SITE TITLE -->
		@if (\Request::is('/'))
		    <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif </title>
		@else
            <title>@yield('title') | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif </title>
		@endif
		<meta property="og:title" content="@if(!empty(@$setting_data->meta_title)) {{ucwords(@$setting_data->meta_title)}} @else NMS Recruitment Service @endif" />
		<meta property="og:type" content="Consultancy" />
		<meta property="og:url" content="https://nmsmanpower.com/" />

		<meta property="og:site_name" content="NMS Recruitment Service" />
		<meta property="og:description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else NMS Recruitment Service @endif " />


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

 
    </style>
    @stack('styles')

    @yield('css')

</head>

<body>

    <div class="page-wrapper">
        <header class="main-header clearfix">

            <div class="topbar clearfix">
                <div class="custom-container topbar-inner">
                    <ul class="topbar-items nav pull-left">
                        <li class="nav-item">
                            <div class="nav-item-inner">
                                <div class="header-address"><i class="far fa-registered"></i>@if(!empty(@$setting_data->registration_number)) {{@$setting_data->registration_number}} @else 1238798 @endif  </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-inner">
                                <div class="header-email"><i class="far fa-envelope"></i>
                                    <a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="topbar-items nav pull-right">
                        <li class="nav-item">
                            <div class="nav-item-inner">
                                <ul class="nav social-icons  social-squared social-white social-h-own social-bg-transparent social-hbg-transparent">
                            
                                    @if(!empty(@$setting_data->facebook))
                                        <li class="nav-item"> <a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank"  class="nav-link social-fb"> <i class=" fab fa-facebook"></i> </a></li>
                                    @endif
                                    @if(!empty(@$setting_data->youtube))
                                    <li class="nav-item"> <a href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="nav-link social-linkedin"> <i class="fab fa-youtube"></i> </a></li>

                                    @endif
                                    @if(!empty(@$setting_data->instagram))

                                    <li class="nav-item"> <a href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank"  class="nav-link social-instagram"> <i class="fab fa-instagram"></i> </a></li>

                                    @endif
                                    @if(!empty(@$setting_data->linkedin))

                                    <li class="nav-item"> <a href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="nav-link social-instagram"> <i class="fab fa-linkedin-in"></i> </a></li>

                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-item-inner">
                                <div class="header-phone"><span class="icon-phone-call"></span>
                                        <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <nav class="main-menu clearfix">

                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo">
                            <a href="/"> <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="NMS Recruitment Service" title="NMS Recruitment Service"></a>
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

        
                 
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->