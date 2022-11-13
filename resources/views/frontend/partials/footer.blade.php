
        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer-top-bg"
                    style="background-image: url({{asset('assets/frontend/images/backgrounds/site-footer-bg.jpg')}})"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    
                                    <a href="/"><img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php } ?>" alt="Logo"></a>

                                </div>
                                <p class="footer-widget__about-text"> @if(!empty(@$setting_data->website_description)) {!! ucfirst(@$setting_data->website_description) !!} @else NMS Recruitment Service @endif</p>
                                <div class="footer-widget__about-social-list">

                                    @if(!empty(@$setting_data->facebook))
                                            <a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
                                            ><i class="fab fa-facebook"></i
                                            ></a>   
                                    @endif
                                    @if(!empty(@$setting_data->youtube))
                                            <a class="clr-fb" href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
                                            ><i class="fab fa-youtube"></i
                                            ></a>
                                    @endif
                                    @if(!empty(@$setting_data->instagram))

                                            <a class="clr-ins" href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
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
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            @if(@$footer_nav_data1 !== null)

                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">@if(@$footer_nav_title1 !== null) {{@$footer_nav_title1}} @else Explore @endif</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
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
                            @if(@$footer_nav_data2 !== null)

                                <div class="footer-widget__column footer-widget__explore clearfix">
                                    <h3 class="footer-widget__title">@if(@$footer_nav_title2 !== null) {{@$footer_nav_title2}} @else Userful Links @endif</h3>
                                    <ul class="footer-widget__explore-list list-unstyled">
                                        @if(!empty($footer_nav_data2))
                                            @foreach($footer_nav_data2 as $nav)
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
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif</p>
                                <div class="footer-widget__contact-info">
                                    <p>
                                        <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif" class="footer-widget__contact-phone">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                                        <a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif"
                                            class="footer-widget__contact-mail">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-bottom__inner">
                                <p class="site-footer-bottom__copy-right">© Copyright {{date("Y")}} <a
							href="/"
							class="theme-color"
							>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif</a>. Developed by
							<a href="https://www.canosoft.com.np/" class="theme-color"
							>Canosoft Techonology</a
							>. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>" width="155"
                        alt="" /></a>
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
                        <a  class="fab fa-facebook-square" href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
                        ></a>
                    @endif
                    @if(!empty(@$setting_data->youtube))

                        <a class="fab fa-youtube" href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
                        ></a>
                    @endif
                    @if(!empty(@$setting_data->instagram))

                        <a class="fab fa-instagram" href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
                        ></a>
                    @endif
                    @if(!empty(@$setting_data->linkedin))

                        <a class="fab fa-linkedin-in" href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="social-linkedin"
                        ></a>
                    @endif
                   
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('assets/frontend/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
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
    <script src="{{asset('assets/frontend/vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/frontend/vendors/timepicker/timePicker.js')}}"></script>



    <!-- template js -->
    <script src="{{asset('assets/frontend/js/moniz.js')}}"></script>
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
      @stack('scripts')
</body>


</html>


