@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
    .single-post  .elementor-top-section {
        padding: 0;
    }
    .portfolio-one__img {
        height: 425px;
    }

    .portfolio-one__img img {
  
        height: 100%;
        object-fit: cover;
    }
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleDemand->name)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleDemand->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleDemand->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleDemand->updated_at !=''){?>{{@$singleDemand->updated_at}} <?php }else {?> {{@$singleDemand->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleDemand->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleDemand->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif" />
    <meta property="og:image" content="<?php if(@$singleDemand->image){?>{{asset('/images/job/'.@$singleDemand->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleDemand->image){?>{{asset('/images/job/'.@$singleDemand->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
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
                        <li><a href="{{route('demand.list')}}">Demand</a></li>
                        
                    </ul>
                    <h2>{{ @$singleDemand->name }}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

                <!--Portfolio Details Full Start-->
                <section class="portfolio-fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-fullwidth__img-box">
                            <img src="{{ asset('/images/job/'.@$singleDemand->image) }}" alt="">
                            <div class="portfolio-fullwidth__details-box">
                                <ul class="portfolio-fullwidth__details-info list-unstyled">
                                    <li>
                                        <h5 class="portfolio-fullwidth__client">Demand Code:</h5>
                                        <p class="portfolio-fullwidth__name">{{@$singleDemand->code}}</p>
                                    </li>
                                    <li>
                                        <h5 class="portfolio-fullwidth__client">Min. Qualification:</h5>
                                        <p class="portfolio-fullwidth__name">{{ucwords(@$singleDemand->min_qualification)}}</p>
                                    </li>
                                    <li>
                                        <h5 class="portfolio-fullwidth__client">End Date:</h5>
                                        <p class="portfolio-fullwidth__name">{{date('j M,Y',strtotime(@$singleDemand->end_date))}}</p>
                                    </li>
                                    <li>
                                        <div class="portfolio-fullwidth__social-list">
                                        
                                            <a href="#" class="clr-fb"><i onclick='fbShare("{{route('demand.single',$singleDemand->slug)}}")' class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i  onclick='twitShare("{{route('demand.single',$singleDemand->slug)}}","{{ $singleDemand->name }}")' class="fab fa-twitter"></i></a>
                                            <a href="#" ><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('demand.single',$singleDemand->slug)}}","{{ $singleDemand->name }}")'></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-fullwidth__content">
                            <div class="portfolio-fullwidth__text-1">
                            {!! $singleDemand->description !!}
                            </div>
                          
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Details Full End-->

    @if(count($latestDemands) > 2)
        <!--Similar Work Start-->
        <section class="similar-work">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Checkout more demand</span>
                    <h2 class="section-title__title">Our similar demand</h2>
                </div>
                <div class="swiper-container thm-swiper__slider"
                    data-swiper-options='{"slidesPerView": 3, "spaceBetween": 30, "breakpoints": { "0": { "slidesPerView": 1, "spaceBetween": 30 }, "375": { "slidesPerView": 1, "spaceBetween": 30 }, "575": { "slidesPerView": 1, "spaceBetween": 30 }, "768": { "slidesPerView": 1, "spaceBetween": 30 }, "991": { "slidesPerView": 2, "spaceBetween": 30 }, "1199": { "slidesPerView": 2, "spaceBetween": 30 }, "1200": { "slidesPerView": 3, "spaceBetween": 30 } } }'>
                    <div class="swiper-wrapper">

                        @foreach(@$latestDemands as $demand)

                            <div class="swiper-slide">
                                <!--Portfolio One Single-->
                                <div class="portfolio-one__single">
                                    <div class="portfolio-one__img">
                                        <img src="<?php if(@$demand->image){?>{{asset('/images/job/'.@$demand->image)}}<?php }?>" alt="">
                                        <div class="portfolio-one__experience">
                                            <div class="portfolio-one__fimlor">
                                                <p class="portfolio-one__fimlor-title"><a
                                                        href="{{route('demand.single',$demand->slug)}}">{{ @$demand->name }}</a></p>
                                            </div>
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{route('demand.single',$demand->slug)}}"><span class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    </div><!-- /.swiper-wrapper -->
                </div>
            </div>
        </section>
        <!--Similar Work End-->
    @endif

@endsection


@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}
</script>
@endsection
