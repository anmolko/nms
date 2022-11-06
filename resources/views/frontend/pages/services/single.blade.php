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
		.home-one a.active {
		color: #fc653c !important;
	}

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleService->updated_at !=''){?>{{@$singleService->updated_at}} <?php }else {?> {{@$singleService->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif" />
    <meta property="og:image" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
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
                        <li> <a href="{{route('service.frontend')}}">Services</a></li>
                    </ul>
                    <h2>{{ @$singleService->title }}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
						@include('frontend.pages.services.sidebar')

                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <h3 class="service-details__title-two">{{ucwords(@$singleService->title)}}</h3>
                           
                            <div class="service-details__img">
                                <img src="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" alt="{{@$singleService->slug}}">
                            </div>
                            <div class="service-details__text-1">{!! @$singleService->description !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->

 
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
