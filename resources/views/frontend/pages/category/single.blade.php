@extends('frontend.layouts.master')
@section('title') {{ucfirst(@$singleService->name)}} @endsection

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

    .nms-listing ul,.nms-listing ol {
        list-style: none;
        padding-left: 0;
        list-style-type: none !important;
    }
    .nms-listing ol li ol,.nms-listing ol li ul,.nms-listing ul li ol, .nms-listing ul li ul {
        padding-left: 30px;
    }
    .nms-listing ul li::before,.nms-listing ol li::before {
        content: "\e906";
        font-family: 'icomoon';
        font-size: 16px;
        line-height: 28px;
        color: var(--moniz-primary, #fc653c);
        font-weight: 900;
        padding-right: 13px;
    }
    .nms-listing ol li ol li::before,.nms-listing ol li ul li::before,.nms-listing ul li ol li::before ,.nms-listing ul li ul li::before {
        content: "\e906";
        font-family: 'icomoon';
        font-size: 16px;
        line-height: 28px;
        color: var(--moniz-primary, #fc653c);
        font-weight: 900;
        padding-right: 13px;
    }

    @media only screen and (min-width: 1000px) {

    .sticky-sidebar{
        width: 400px;
        height:720px;


    }
    .sticky-sidebar.stick {
        position:fixed;
        /* position: -webkit-sticky; */
        top: 80px;
        z-index: 10;
        /* border-radius: 0 0 0.5em 0.5em; */
        right: 75px;
        }
    }
    
    #sticky-anchor{
        display:none;
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
                        <li><a href="{{url('/our-category')}}">Category</a></li>
                    </ul>
                    <h2>{{ @$singleService->name }}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        


        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xl-8 col-lg-7 content">
                        <div class="service-details__left">
                           
                            <div class="service-details__img">
                                <img src="{{ asset('/images/service_categories/'.$singleService->image) }}" alt="{{@$singleService->slug}}">
                            </div>
                            <h3 class="service-details__title">{{ucwords(@$singleService->name)}}</h3>

                            <div class="service-details__text-1 justified">{!! @$singleService->short_description !!} </div>
                            <div class="service-details__text-1 nms-listing">{!! @$singleService->list !!} </div>
                        </div>
                    </div>
                    <div id="sticky-anchor"></div>

                    <div class="col-xl-4 col-lg-5 sticky-sidebar" >
						@include('frontend.pages.category.sidebar')

                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->

 
@endsection
@section('js')
<script>
   
   
   function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var footer_top = $(".sticky-stop").offset().top;
            var div_top = $('#sticky-anchor').offset().top;
            var div_height = $(".sticky-sidebar").height();

            var padding = 80;  // tweak here or get from margins etc

            if (window_top + div_height > footer_top - padding)
                $('.sticky-sidebar').css({top: (window_top + div_height - footer_top + padding) * -1})
            else if (window_top > div_top && window_top > 300) {
                $('.sticky-sidebar').addClass('stick');
                $('.sticky-sidebar').css({top: 120})
            } else {
                $('.sticky-sidebar').removeClass('stick');
                $('.sticky-sidebar').css({top: 0})
            }
        }
        $(function () {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });


</script>
@endsection
