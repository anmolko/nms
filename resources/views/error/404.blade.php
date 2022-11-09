@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
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
                        <li>404 Error</li>
                    </ul>
                    <h2>404 Error</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <h2 class="error-page__title">404</h2>
                            <h3 class="error-page__tagline">Sorry We Can't Find That Page!</h3>
                            <p class="error-page__text">The page you are looking for was moved, removed, renamed or
                                never existed.</p>
                            <a href="/" class="thm-btn error-page__btn"><span>Back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->


@endsection
