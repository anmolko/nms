@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
@section('css')

<style>
  .portfolio-style-modern .portfolio-inner .post-thumb {
        border: 4px solid #155b84;
    }

    .gallery-one__card {
        height: 240px;

      }
    .gallery-one__card img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .gallery-one {
        padding-top: 120px;
        padding-bottom: 120px;
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
                        <li><a href="{{url('/album')}}">Album </a></li>
                    </ul>
                    <h2>{{ucwords(@$singleAlbum->name)}}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
     
                                                                                                            
            <section class="gallery-one">
                <div class="container-fluid">
                    <div class="row masonary-layout">
                        @if(count(@$singleAlbum->gallery) > 0)

                            @foreach($singleAlbum->gallery as $gallery)

                            <div class="col-md-6 col-lg-4">
                                <div class="team-one__single">
                                    <div class="team-one__img-box">
                                        <div class="team-one__img gallery-one__card">
                                            <img src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" alt="">
                                            <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" class="img-popup">
                                                <span></span>
                                            </a>
                                        </div>
                                        <div class="team-one__social">
                                            <div class="team-one__member-info">
                                                <p class="team-one__member-title">{{ ucfirst(str_replace('-',' ',$gallery->original_name))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col-md-6 col-lg-3 -->
                            @endforeach
                        @else

                            <div class="no-results not-found">
                                <header >
                                    <h1 >Nothing Found</h1>
                                </header>
                                <div class="page-content">
                                    <p>Sorry, Image havenot been posted in this album yet.</p>
                                </div>
                            </div>
                        @endif 

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section><!-- /.gallery-one -->
           
     
@endsection
