@extends('frontend.layouts.master')
@section('title') {{ucwords(@$cat_name)}} | Blog @endsection
@section('css')
<style>
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
                        <li> <a href="{{url('/blog')}}">Blog</a></li>
                    </ul>
                    <h2>Category : {{ucwords($cat_name)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

    
        <!--Blog Page Start-->
        <div class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="row">
                        @if(count($allPosts) > 0)

                            @foreach($allPosts as $post)
                                <!--Blog Single Start-->
                                <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="blog-three__single">
                                        <div class="blog-three__img">
                                            <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="{{@$post->slug}}">
                                        </div>
                                        <div class="blog-three__content">

                                            <div class="blog-three__date">
                                                <span>{{date('j',strtotime(@$post->created_at))}}</span>
                                                <p>{{date('M',strtotime(@$post->created_at))}}</p>
                                            </div>
                                            <div class="blog-three__title-box">
                                                <h4 class="blog-three__title"><a href="{{route('blog.single',$post->slug)}}">
                                                {!! ucwords(Str::limit(@$post->title, 45,'...')) !!}
                                                </a></h4>
                                            </div>
                                           
                                            <div class="blog-three__content-box">
                                                <ul class="blog-three__meta list-unstyled">
                                                    <li>
                                                    <a href="{{url('/blog/categories/'.@$post->category->slug)}}"><i class="icon-tag-chevron-thin"></i>{{ucwords($post->category->name)}}</a>

                                                    </li>
                                                    
                                                </ul>
                                                <div class="blog-three__btn-box">
                                                    <a href="{{route('blog.single',$post->slug)}}">Details<i
                                                            class="icon-fast-forward-thin-double-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Blog Single end-->
                            @endforeach

                            <div class="blog-page__pagination">

                                {{ $allPosts->links('vendor.pagination.default') }}

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
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.pages.blogs.sidebar')


                    </div>

                </div>
            </div>
        </div>
        <!--Blog Page End-->


@endsection