@extends('frontend.layouts.master')
@section('title') Service Category @endsection
@section('css')
<link rel="stylesheet" id="jssDefault" href="{{asset('assets/frontend/css/pagination.css')}}">

<style>
   .blog-page__pagination {
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
                        <li>Category </li>
                    </ul>
                    <h2>Our Service Category</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <section class="blog-one blog-grid">
            <div class="container">
                <div class="row">
                @if(count($service_categories) > 0)
                    @foreach($service_categories as $service_category)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset('/images/service_categories/thumb/thumb_'.$service_category->image) }}" alt="">
                                    <a href="{{route('category.single',$service_category->slug)}}">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                               
                            </div>
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="{{route('category.single',$service_category->slug)}}">{{ucwords(@$service_category->name)}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach


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



@endsection