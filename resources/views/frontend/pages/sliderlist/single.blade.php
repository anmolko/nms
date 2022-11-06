@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection

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
   
	.widget-category ul li a.active {
			color: #fc653c !important;
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
                        <li> <a href="{{url('/'.@$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></li>
                        <li> <a href="#">{{ucwords(@$singleSlider->list_header)}}</a></li>
                    </ul>
                    <h2>{{ucwords(@$singleSlider->list_header)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!-- Blog Details Area start -->
           <!--Blog Details Start-->
           <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__inner">
                                <div class="blog-details__single">
                                <div class="blog-list__img-box">
                                        <div class="blog-list__img">
                                            <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="{{@$singleSlider->list_header}}">
                                        </div>
                                    </div>
                                    <div class="blog-list__content">
                                        <h4 class="blog-list__title">{{ ucwords(@$singleSlider->list_header) }}</h4>
                                        {{@$singleSlider->list_description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.pages.sliderlist.sidebar')
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->


		
@endsection