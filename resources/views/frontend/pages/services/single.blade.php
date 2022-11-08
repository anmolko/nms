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
    <title>{{ucfirst(@$singleService->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif </title>
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
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif" />
    <meta property="og:image" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
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
                        <li><a href="{route('service.frontend')}}">Services</a></li>
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
                   
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__left">
                           
                            <div class="service-details__img">
                                <img src="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" alt="{{@$singleService->slug}}">
                            </div>
                            <h3 class="service-details__title">{{ucwords(@$singleService->title)}}</h3>

                            <div class="service-details__text-1">{!! @$singleService->description !!} </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
						@include('frontend.pages.services.sidebar')

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
