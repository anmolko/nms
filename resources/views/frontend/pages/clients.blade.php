@extends('frontend.layouts.master')
@section('title') Our Clients @endsection
@section('css')
    <style>
        div#msgSubmit {
            margin-top: 20px;
            text-align: center;
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
                    <li><a href="{{url('/clients')}}">Clients </a></li>
                </ul>
                <h2>Our Clients</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                        @foreach(@$clients as $client)
                            @if(!empty($client->country))
                                @foreach ($countries as $key=>$value)
                                    @if($client->country == $key)
                                        <li data-filter=".{{$key}}"><span class="filter-text">{{$value}}</span></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row filter-layout masonary-layout">
                @foreach(@$clients as $client)
                <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{$client->country}}">
                    <!--Portfolio One Single-->
                    <div class="portfolio-one__single" >
                        <div class="portfolio-one__img" style="height: 208px;">
                            <img src="<?php if(@$client->image){?>{{asset('/images/clients/'.@$client->image)}}<?php }?>" alt="" style="object-fit: contain; height: 100%;">
                            <div class="portfolio-one__experience">
                                <div class="portfolio-one__web-design">
                                    <p class="portfolio-one__web-design-title">{{$client->name}}</p>
                                </div>
                            </div>
                            <div class="portfolio-one__arrow">
                                <a href="{{(!empty($client->link)) ?  $client->link:"#"}}" target="{{(!empty($client->link)) ?  "_empty":""}}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Portfolio Page End-->



@endsection
@section('js')
    <!-- For Contact Form -->

@endsection
