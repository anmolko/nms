
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
<style>
    div#msgSubmit {
        margin-top: 20px;
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
                        <li><a href="{{url('/contact-us')}}">Contact </a></li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact with us</span>
                    <h2 class="section-title__title">

                        <span>Write us a </span>
                        <span class="text-last">message</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="{{route('contact.store')}}" id="contactForm" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                            @csrf

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="subject" id="subject" class="form-select">
                                                <option value="Trade Inquiry" >Trade Inquiry</option>
                                                <option value="Ask a question" selected>Ask a question</option>
                                                <option value="Share Feedback">Share Feedback</option>
                                                <option value="Career Enquiry">Career Enquiry</option>
                                                <option value="Demand Enquiry">Demand Enquiry</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write Message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn faqs-contact__btn"><span>Send a
                                                message</span></button>
                                        <div id="msgSubmit" class="hidden"></div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        @if(@$setting_data->google_map)

        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <iframe
                            src="{{@$setting_data->google_map}}"
                            class="contact-page-google-map__box" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page Google Map End-->
        @endif



@endsection
@section('js')
  <!-- For Contact Form -->

@endsection
