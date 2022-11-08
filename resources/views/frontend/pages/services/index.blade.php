@extends('frontend.layouts.master')
@section('title') Services @endsection
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
                        <li>Services </li>
                    </ul>
                    <h2>Our Services</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="service-two">
			<div class="container">
				<div class="row">
                @if(count($allservices) > 0)
                    @foreach($allservices as $service)
					<div class="col-md-6 col-lg-4">
						<div class="service-two__card">
							<div class="service-two__card__inner">
								<div class="service-two__image">
									<img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="">
								</div><!-- /.service-two__image -->
								<div class="service-two__content">
									<h3 class="service-two__title">{!! ucfirst(@$service->title) !!}</h3><!-- /.service-two__title -->
									<p class="service-two__summery">{{ Str::limit(@$service->sub_description, 70,'..') }}
									</p><!-- /.service-two__summery -->
									<a href="{{route('service.single',$service->slug)}}" class="service-two__link">
										<i class="icon-right-arrow"></i>
									</a><!-- /.service-two__link -->
								</div><!-- /.service-two__content -->
							</div><!-- /.service-two__card__inner -->
						</div><!-- /.service-two__card -->
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
				
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.service-two -->
        <!--Services Page V 2 Start-->


@endsection