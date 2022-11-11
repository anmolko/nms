@extends('frontend.layouts.master')
@section('title') Testimonial @endsection
@section('css')

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
                      <li>Testimonial</li>
                  </ul>
                  <h2>Our Testimonials</h2>
              </div>
          </div>
      </section>
      <!--Page Header End-->

      <section class="testimonials-two">
			<div class="container">
				<div class="row">
                @if(count($testimonials) > 0)
                    @foreach($testimonials as $testimonial)
					<div class="col-md-6 col-lg-4">
						<div class="testimonials-two__card">
							<div class="testimonials-two__card__inner">
								<div class="testimonials-two__meta">
									<div class="testimonials-two__image">
										<img src="<?php if(@$testimonial->image){?>{{asset('/images/testimonial/'.@$testimonial->image)}}<?php }?>" alt="">
									</div><!-- /.testimonials-two__image -->
									<div class="testimonial-two__meta__content">
										<h3 class="testimonials-two__name">{{ucwords($testimonial->name)}}</h3>
										<!-- /.testimonials-two__name -->
										<p class="testimonials-two__designation">{{ucwords($testimonial->position)}}</p>
										<!-- /.testimonials-two__designation -->
									</div><!-- /.testimonial-two__meta__content -->
								</div><!-- /.testimonials-two__meta -->
								<div class="testimonials-two__summery">{!! @$testimonial->description !!}</div><!-- /.testimonials-two__summery -->
							</div><!-- /.testimonials-two__card__inner -->
						</div><!-- /.testimonials-two__card -->
					</div><!-- /.col-md-6 -->
                    @endforeach

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
		</section><!-- /.testimonials-two -->

@endsection
