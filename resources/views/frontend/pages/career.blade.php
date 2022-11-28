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
  margin-left: 10px;
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
                <li class="job-card new featured">
                <div class="job-card__info">
                    <div class="d-md-flex align-items-center">
                    <div class="img-c"><img src="http://projects.lollypop.design/job-listing/photosnap.svg"/></div>
                    <div>
                        <div class="d-flex align-items-center">
                        <p>Photosnap</p>
                        <p class="tag-new">New!</p>
                        <p class="tag-featured">Featured</p>
                        </div><a href="javascript:void(0)">
                        <h6>Senior Frontend Developer</h6></a>
                        <ul>
                        <li>1d ago</li>
                        <li>Full Time</li>
                        <li>USA Only</li>
                        </ul>
                    </div>
                    </div>
                </div>
                <ul class="job-card__tags">
                    <li>Frontened</li>
                    <li>Senior</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
                </li>
            </ul>

                    @foreach(@$careers as $career)

                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-b58f1d8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b58f1d8" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fb71f66" data-id="fb71f66" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6111f85 ct-center elementor-widget elementor-widget-beratersectiontitle" data-id="6111f85" data-element_type="widget" data-widget_type="beratersectiontitle.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title-wrapper margin-bottom-0 sep-none text-left">
                                                        <div class="title-wrap">
                                                            <h5 class="section-title">{{ucwords(@$career->name)}}</h5>
                                                        </div>
                                                        <div class="section-description"><i class="fas fa-suitcase"> </i> {{@$career->open_position}} Open Position | <i class="fas fa-clock"> </i> Apply until {{date('M j, Y',strtotime(@$career->end_date))}}  </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b8de6cb" data-id="b8de6cb" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-d89fdf5 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="d89fdf5" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="#" class="elementor-button-link elementor-button @if(@$career->type == 'part_time') part-time @endif elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">
                                                            @if(@$career->type == "full_time")
                                                                Full time
                                                            @else
                                                                Part time
                                                            @endif
                                                        </span> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-405096a" data-id="405096a" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6b77450 elementor-widget elementor-widget-text-editor" data-id="6b77450" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">   
                                                        @if(@$career->salary)
                                                            <i class="fas fa-search-dollar"></i> {{@$career->salary}}
                                                        @else
                                                                <i class="fas fa-search-dollar"></i> Negotiable
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0eb08d6" data-id="0eb08d6" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-67dbcbb elementor-align-center elementor-widget elementor-widget-button" data-id="67dbcbb" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{@$career->from_link}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Apply Now</span> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
                @endforeach     
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