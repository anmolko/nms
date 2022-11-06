
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/site-footer-bg.jpg')}});">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo-box">
                                    <div class="footer-widget__about-logo">
                                        
                                     <a href="/"><img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php } ?>" alt="Logo"></a>

                                    </div>
                                </div>
                                <div class="footer-widget__about-content">
                                    <p> @if(!empty(@$setting_data->website_description)) {!! ucfirst(@$setting_data->website_description) !!} @else Win Recruit @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__latest-post">
                                <h4 class="footer-widget__tag">Latest Post</h4>
                                <ul class="footer-widget__content list-unstyled">
                                    @if(!empty($latestPostsfooter))
                                        @foreach($latestPostsfooter as $latestPosts)
                                        <li>
                                            <span>{{date('j M Y',strtotime(@$latestPosts->created_at))}}</span>
                                            <p><a href="{{route('blog.single',$latestPosts->slug)}}">{{ucwords($latestPosts->title)}}</a></p>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            @if(@$footer_nav_data1 !== null)

                                <div class="footer-widget__services">
                                    <h4 class="footer-widget__tag">@if(@$footer_nav_title2 !== null) {{@$footer_nav_title2}} @else Useful Links @endif</h4>
                                    <ul class="footer-widget__services-list list-unstyled">
                                        @if(!empty($footer_nav_data1))
                                            @foreach($footer_nav_data1 as $nav)
                                                @if(!empty($nav->children[0]))
                                                @else
                                                @if($nav->type == 'custom')
                                                <li >
                                                    @if(str_contains(@$nav->slug,'http'))
                                                    <a href="{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                    @else
                                                    <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                    @endif

                                                @elseif($nav->type == 'service')
                                                <li >
                                                    <a href="{{url('service')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @elseif($nav->type == 'post')
                                                <li >
                                                    <a href="{{url('blog')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @else
                                                <li >
                                                    <a href="{{url('/')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif> @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            @endif

                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__contact">
                                <h4 class="footer-widget__tag">Contact</h4>
                                <ul class="footer-widget__contact-box list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <i class="icon-email-1"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-location"></i>
                                        </div>
                                        <div class="text">
                                            <p>@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="footer-widget__social-box list-unstyled">
                              
                                @if(!empty(@$setting_data->facebook))
                                    <li>
                                        <a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
                                        ><i class="fab fa-facebook-f"></i
                                        ></a>   
                                    </li>
                                @endif
                                @if(!empty(@$setting_data->youtube))
                                    <li>
                                        <a href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
                                        ><i class="fab fa-youtube"></i
                                        ></a>
                                    </li>
                                @endif
                                @if(!empty(@$setting_data->instagram))
                                    <li>

                                        <a href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
                                        ><i class="fab fa-instagram"></i
                                        ></a>
                                    </li>
                                @endif
                                @if(!empty(@$setting_data->linkedin))
                                    <li>

                                        <a href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="social-linkedin"
                                        ><i class="fab fa-linkedin-in"></i
                                        ></a>
                                    </li>
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-text">
                                    <p>Copyright © {{date("Y")}} <a
							href="/"
							class="theme-color"
							>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif</a>. Developed by
							<a href="https://www.canosoft.com.np/" class="theme-color"
							>Canosoft Techonology </a
							>. All Rights Reserved.</p>
                                </div>
                                <ul class="site-footer__bottom-text-two list-unstyled">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="assets/images/resources/footer-logo-1.png"
                        width="143" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                   
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
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

 

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('assets/frontend/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('assets/frontend/js/conalz.js')}}"></script>
      
    <script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>
      @yield('js')
	</body>


</html>


