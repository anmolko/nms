@extends('frontend.layouts.master')
@section('title') Team  @endsection
@section('css')
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
                      <li>Team </li>
                  </ul>
                  <h2>Team Members</h2>
              </div>
          </div>
      </section>
      <!--Page Header End-->


        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="row">
                    @if(count(@$teams) > 0)
                        @foreach($teams as $team)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                            <!--Team One Single-->
                                <div class="team-one__single">
                                    <div class="team-one__img-box">
                                        <div class="team-one__img">
                                            <img src="<?php if(@$team->image){?>{{asset('/images/teams/'.@$team->image)}}<?php }else{ echo asset('/backend/images/default.png'); }?>" alt="">
                                        </div>
                                        <div class="team-one__social">
                                            @if(!empty(@$team->twitter))
                                                <a href="{{@$team->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                            @endif
                                            @if(!empty(@$team->fb))
                                                <a href="{{@$team->fb}}" class="clr-fb" target="_blank"><i class="fab fa-facebook"></i></a>
                                            @endif
                                            @if(!empty(@$team->linkedin))
                                                <a href="{{@$team->linkedin}}" class="clr-dri" target="_blank"><i class="fab fa-linkedin"></i></a>
                                            @endif
                                            @if(!empty(@$team->insta))
                                                <a href="{{@$team->insta}}" class="clr-ins" target="_blank"><i class="fab fa-instagram"></i></a>
                                            @endif
                                            </div>
                                    </div>
                                    <div class="team-one__member-info">
                                        <h4 class="team-one__member-name">{{ucwords(@$team->name)}}</h4>
                                        <p class="team-one__member-title">{{ucwords(@$team->post)}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
        
                </div>
            </div>
        </section>
        <!--Team One End-->



@endsection
