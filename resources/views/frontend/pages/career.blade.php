@extends('frontend.layouts.master')
@section('title') Career @endsection
@section('css')
<style>
   
   .job-card {
  display: flex;
  padding: 30px;
  background-color: white;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  border-radius: 5px;
  margin-bottom: 20px;
}
@media (max-width: 767px) {
  .job-card {
    display: block;
    padding: 20px;
    margin-bottom: 50px;
  }
}
.job-card:hover {
  box-shadow: 0 0 11px rgba(33, 33, 33, 0.2);
}
.job-card p {
  font-size: 15px;
  color: #58a9a7;
  font-weight: 500;
  line-height: 1.4;
}
@media (max-width: 767px) {
  .job-card__info {
    padding-bottom: 20px;
  }
}
.job-card__info a:hover {
  text-decoration: none;
}
.job-card__info .img-c {
  height: 88px;
  width: 88px;
  margin-right: 15px;
}
@media (max-width: 767px) {
  .job-card__info .img-c {
    height: 60px;
    width: 60px;
    margin: -50px 0 10px 0;
  }
}
.job-card__info .img-c img {
  height: 100%;
  width: 100%;
  object-fit: contain;
}
.job-card__info p {
  font-weight: 700;
  margin-bottom: 7px;
}
.job-card__info .tag-new {
  padding: 7px 10px;
  background-color: #58a9a7;
  color: white;
  border-radius: 20px;
  text-transform: uppercase;
  font-size: 11px;
  display: none;
}
.job-card__info .tag-featured {
  padding: 7px 10px;
  background-color: black;
  color: white;
  border-radius: 20px;
  margin-left: 10px;
  text-transform: uppercase;
  font-size: 11px;
  display: none;
}
.job-card__info h6 {
  color: #323838;
  font-size: 18px;
  font-weight: 700;
}
.job-card__info ul {
  display: flex;
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.job-card__info ul li {
  font-size: 15px;
  color: #939c9b;
  padding: 0 10px;
  position: relative;
}
.job-card__info ul li:before {
  content: "";
  height: 4px;
  width: 4px;
  position: absolute;
  top: 50%;
  background-color: #939c9b;
  border-radius: 50%;
  left: -2px;
  transform: translateY(-50%);
}
.job-card__info ul li:first-child {
  padding-left: 0;
}
.job-card__info ul li:first-child:before {
  display: none;
}
.job-card__info ul li:last-child {
  padding-right: 0;
}
.job-card.new .tag-new {
  display: block;
}
.job-card.featured {
  border-left: 5px solid #58a9a7;
}
.job-card.featured .tag-featured {
  display: block;
}
.job-card__tags {
  display: flex;
  flex-wrap: wrap;
  padding-left: 20px;
  list-style-type: none;
}
@media (max-width: 767px) {
  .job-card__tags {
    padding-top: 20px;
    padding-left: 0;
    border-top: 1px solid #939c9b;
  }
}
.job-card__tags li {
  margin-right: 10px;
  margin-bottom: 0;
  padding: 7px;
  border-radius: 4px;
  color: #58a9a7;
  font-weight: 500;
  background-color: #f1f7f5;
  margin: 5px 10px 5px 0;
  cursor: pointer;
  transition: all ease 0.2s;
}
.job-card__tags li:hover {
  background-color: #58a9a7;
  color: white;
}
.job-card__tags li:last-child {
  margin-right: 0;
}

.main {
  background-color: #f0fafb;
}

.btn-apply {
	text-transform: uppercase;
	font-size: 0.875rem;
	font-weight: 800;
	letter-spacing: 1px;
	background-color: transparent;
	color:  #393a5f;
	border: 2px solid #393a5f;
	padding: 0.6rem 2rem;
	-webkit-border-radius: 2rem;
	-moz-border-radius: 2rem;
	border-radius: 2rem;
}

.btn-apply:hover {
	background-color: #393a5f;
	color:  #fff;
	border: 2px solid #393a5f;
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
                    <li><a href="{{url('/career')}}">Careers </a></li>
                </ul>
                <h2>Job offers</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->



    @if(count(@$careers) > 0)
    <section class="blog-sidebar main">
        <div class="container">
            <div class="row">
            <ul class="col-12" id="job-list">
                

                    @foreach(@$careers as $career)

                    <li class="job-card new featured">
                        <div class="job-card__info">
                            <div class="d-md-flex align-items-center">
                            <div>
                                <div class="d-flex align-items-center">
                                @if(@$career->type == "full_time")
                                    <p class="tag-new">Full Time</p>
                                @else
                                    <p class="tag-new">Part Time</p>
                                @endif
                                </div><a href="javascript:void(0)">
                                <h6>{{ucwords(@$career->name)}}</h6></a>
                                <ul>
                                <li><i class="fas fa-suitcase"> </i> {{@$career->open_position}} Open Position</li>
                                <li><i class="fas fa-clock"> </i> Apply until {{date('M j, Y',strtotime(@$career->end_date))}}</li>
                                
                                </ul>
                            </div>
                            </div>
                        </div>
                        
                        <a href="{{@$career->form_link}}" class="btn btn-apply" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Apply Now</span> </span>
                                                        </a>
                    </li>

                @endforeach  
            </ul>

            </div>
        </div>
    </section>

    @else
    <section class="blog-sidebar">
        <div class="container">
            <div class="row">
                <h2 class="section-title">Job Not Posted Yet !!</h2><span class="title-separator separator-border theme-color-bg"></span></div>
                <div class="section-description">It seems we cannot find what you are looking for.</div>
            </div>
        </div>
    </section> 
    @endif

         

@endsection