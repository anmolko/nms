@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>
        .blog-page__pagination {
            text-align: center;
        }
</style>
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
                        <li>Services</li>
                    </ul>
                    <h2>Our Services</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Services Page V 2 Start-->
        <section class="services-page-v-2">
            <div class="container">
                
                <div class="row">
                @if(count($allservices) > 0)
                    @foreach($allservices as $service)

                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="">
                            </div>
                            <div class="services-one__content">
                               
                                <h3 class="services-one__title"><a href="{{route('service.single',$service->slug)}}">{!! ucwords(Str::limit(@$service->title, 20,'..')) !!}</a></h3>
                                <p class="services-one__text">{{ Str::limit(@$service->sub_description, 70,'..') }}</p>
                                <div class="services-one__arrow">
                                    <a href="{{route('service.single',$service->slug)}}"><i class="icon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="blog-page__pagination">
                            {{ $allservices->links('vendor.pagination.default') }}
                    </div>
               
                    @else

                    <section class="no-results not-found">
                            <h2 class="page-title">Nothing Found</h2>
                        <div class="page-content">
                            <p>It seems we can not find what you are looking for.</p>
                        
                        </div>
                    </section>
                    @endif

                </div>
            </div>
        </section>
        <!--Services Page V 2 End-->

@endsection