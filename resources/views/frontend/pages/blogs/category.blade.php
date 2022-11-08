@extends('frontend.layouts.master')
@section('title') {{ucwords(@$cat_name)}} | Blog @endsection
@section('css')
<link rel="stylesheet" id="jssDefault" href="{{asset('assets/frontend/css/pagination.css')}}">
<style>
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
                        <li><a href="{{url('/blog')}}">Blog</a></li>
                    </ul>
                    <h2>Category : {{ucwords($cat_name)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

    
        <!--Blog Sidebar Start-->
        <section class="blog-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-sidebar__left">
                            <div class="row">
                           
                            @if(count($allPosts) > 0)

                                @foreach($allPosts as $post)
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <!--Blog One Single-->
                                    <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="blog-one__img-box">
                                            <div class="blog-one__img">
                                                <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="{{@$post->slug}}">
                                                <a href="{{route('blog.single',$post->slug)}}">
                                                    <span class="blog-one__plus"></span>
                                                </a>
                                            </div>
                                            <div class="blog-one__date-box">
                                                <p><span>{{date('j',strtotime(@$post->created_at))}}</span> {{date('M',strtotime(@$post->created_at))}}</p>
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <ul class="list-unstyled blog-one__meta">
                                                <li><a href="{{url('/blog/categories/'.@$post->category->slug)}}"><i class="fas fa-th"></i> {{ucwords($post->category->name)}}</a></li>
                                                </li>
                                            </ul>
                                            <h3 class="blog-one__title">
                                                <a href="{{route('blog.single',$post->slug)}}">{!! ucwords(Str::limit(@$post->title, 40,'...')) !!}</a>
                                            </h3>
                                            <p class="blog-one__text">{!! Str::limit(@$post->description, 65,'...') !!}
                                            </p>
                                            <div class="blog-one__bottom">
                                                <div class="blog-one__read-btn">
                                                    <a href="{{route('blog.single',$post->slug)}}">Read more</a>
                                                </div>
                                                <div class="blog-one__arrow">
                                                    <a href="{{route('blog.single',$post->slug)}}"><span class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.pages.blogs.sidebar')
                   
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Sidebar End-->

@endsection