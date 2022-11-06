@extends('frontend.layouts.seo_master')
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
    .single-post  .elementor-top-section {
        padding: 0;
    }
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleBlog->updated_at !=''){?>{{@$singleBlog->updated_at}} <?php }else {?> {{@$singleBlog->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Src Job Placement @endif" />
    <meta property="og:image" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
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
                        <li> <a href="{{route('blog.category',$singleBlog->category->slug)}}">{{ucwords($singleBlog->category->name)}}</a></li>
                    </ul>
                    <h2>{{ @$singleBlog->title }}</h2>
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
                            <div class="blog-details__inner">
                                <div class="blog-details__single">
                                    <div class="blog-list__img-box">
                                        <div class="blog-list__img">
                                            <img src="{{ asset('/images/blog/'.@$singleBlog->image) }}" alt="">
                                        </div>
                                        <div class="blog-list__tag">
                                            <p>{{ucwords($singleBlog->category->name)}}</p>
                                        </div>
                                    </div>
                                    <div class="blog-list__content">
                                        <div class="blog-list__meta-box">
                                          
                                          
                                            <div class="blog-list__btn-box">
                                                <a href="#">Share<i class="far fa-share-alt"></i></a>
                                            </div>
                                            <div class="author__social">
                                                <a href="#"><i onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")' class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i  onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")' class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'></i></a>
                                            </div>
                                        </div>
                                        <h4 class="blog-list__title">{{ ucwords(@$singleBlog->title) }}</h4>
                                        {!! $singleBlog->description !!}

                                    </div>
                                </div>
                            
                                
                           
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        @include('frontend.pages.blogs.sidebar')
                      
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->
    



@endsection

@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}
</script>
@endsection
