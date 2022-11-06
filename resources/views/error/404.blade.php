@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
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
                        <li>404 Error</li>
                    </ul>
                    <h2>404 Error</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        

        <!--Error Page Start-->
        <section class="error-page">
            <div class="error-page-shape-bg float-bob-x"
                style="background-image: url({{asset('assets/frontend/images/shapes/error-page-shape-bg.png')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                            </div>
                            <h3 class="error-page__tagline">Sorry! Page Not Found</h3>
                            <p class="error-page__text">The page you are looking for was never existed.</p>
                          
                            <a href="/" class="thm-btn error-page__btn">Back To Home </a>
                            <div class="error-page-shape-1 float-bob-y">
                                <img src="{{asset('assets/frontend/images/shapes/error-page-shape-1.png')}}" alt="">
                            </div>
                            <div class="error-page-shape-2 float-bob-x">
                                <img src="{{asset('assets/frontend/images/shapes/error-page-shape-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->




@endsection
