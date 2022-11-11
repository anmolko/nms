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
        <section class="page-header" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}});">
            <div class="page-header-shape-1"></div>
            <div class="page-header-shape-2"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>.</span></li>
                        <li><a href="{{url('/'.@$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></li>

                    </ul>
                    <h2>{{ ucwords(@$singleSlider->list_header) }}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

                <!--Blog Details Start-->
                <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                    <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="{{@$singleSlider->list_header}}">

                                <div class="blog-details__date-box">
                                    <p><span>{{date('j',strtotime(@$singleSlider->created_at))}}</span> {{date('M',strtotime(@$singleSlider->created_at))}}</p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                
                                <h3 class="blog-details__title">{{ ucwords(@$singleSlider->list_header) }}</h3>
                                <div class="blog-details__text-1">{{@$singleSlider->list_description}}</div>
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