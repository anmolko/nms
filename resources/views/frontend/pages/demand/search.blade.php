@extends('frontend.layouts.master')
@section('title') Search Demand @endsection
@section('css')
<link rel="stylesheet" id="jssDefault" href="{{asset('assets/frontend/css/pagination.css')}}">

<style>
  
  .service-two__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .service-two__image {
        height: 300px;
    }
    .service-two__card {
        margin-bottom: 30px;
    }
</style>
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
                        <li><span>.</span></li>
                        <li>Search Demand </li>

                    </ul>
                    <h2>Search Result For : <strong>{{$query}}</strong></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Sidebar Start-->
        <section class="blog-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-sidebar__left">
                            <div class="row">
                           
        
                            @if(count($alldemands) > 0)

                                @foreach($alldemands as $demand)
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="service-two__card">
                                        <div class="service-two__card__inner">
                                            <div class="service-two__image">
                                                <img src="<?php if(@$demand->image){?>{{asset('/images/job/'.@$demand->image)}}<?php }?>" alt="">
                                            </div><!-- /.service-two__image -->
                                            <div class="service-two__content">
                                                <h3 class="service-two__title">{!! ucfirst(@$demand->name) !!}</h3><!-- /.service-two__title -->
                                                </p><!-- /.service-two__summery -->
                                                <a href="{{route('demand.single',@$demand->slug)}}" class="service-two__link">
                                                    <i class="icon-right-arrow"></i>
                                                </a><!-- /.service-two__link -->
                                            </div><!-- /.service-two__content -->
                                        </div><!-- /.service-two__card__inner -->
                                    </div><!-- /.service-two__card -->
                                </div>
                                @endforeach

                                <div class="blog-page__pagination">

                                    {{ $alldemands->links('vendor.pagination.default') }}


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
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.pages.demand.sidebar')
                   
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Sidebar End-->

    

@endsection