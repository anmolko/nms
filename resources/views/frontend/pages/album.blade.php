@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')

<style>


    .gallery .post-thumb.post-overlay-active {
        height: 320px;
    }

    img.amgroup-gallery {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
                    <h2>Our Album</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="team-one">
            <div class="container">
                <div class="row">

                @if(count(@$albums) > 0)
                    @foreach($albums as $album)
                     
                        <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Team One Single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img alt="{{ucwords(@$album->name)}}" src="{{asset('/images/albums/'.@$album->cover_image)}}">
                                    </div>
                                
                                </div>
                                <div class="team-one__member-info">
                                    <h4 class="team-one__member-name"><a href="{{route('album.gallery',$album->slug)}}" class="post-title" >{{ucwords(@$album->name)}} ({{count(@$album->gallery)}})</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else

                    <section class="no-results not-found">
                        <header >
                            <h1 >Nothing Found</h1>
                        </header>
                        <div class="page-content">
                            <p>Sorry, there are no Album published yet.</p>
                        </div>
                    </section>
                @endif
                                                                                                                
                   
                
                </div>
            </div>
        </section>


@endsection


