
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
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
                        <li>Contact</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @if(@$setting_data->google_map)
        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="{{@$setting_data->google_map}}"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->
        @endif

        <!--Address Start-->
        <section class="address">
            <div class="container">
                <div class="row">
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Address</h4>
                                <div class="address__phone-email">
                                    <p>@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-phone-income"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Phone</h4>
                                <div class="address__phone-email">
                                    <p>
                                        <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Email Address</h4>
                                <div class="address__phone-email">
                                    <p>
                                        <a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                </div>
            </div>
        </section>
        <!--Address End-->

        <!--Contact Form Start-->
        <section class="contact-form-box">
            <div class="container">
                <div class="contact-form__title-box">
                    <span>Meesage now !</span>
                    <h3>Feel free to ask questions or share <br> your message with us.</h3>
                </div>
                <form action="{{route('contact.store')}}" id="contactForm" class="contact-form contact-form-validated"
                    novalidate="novalidate">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Name</p>
                                <input type="text"  name="name" placeholder="Michael C. Coleman" required data-error="Please enter your name">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Email</p>
                                <input type="email" placeholder="support@gmail.com" name="email">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Phone Number</p>
                                <input type="text" placeholder="+000 (123) 456 88" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Select Requirments</p>
                                <select name="subject" id="subject" class="form-select">
                                    <option value="Trade Inquiry" >Trade Inquiry</option>
                                    <option value="Ask a question" selected>Ask a question</option>
                                    <option value="Share Feedback">Share Feedback</option>
                                    <option value="Career Enquiry">Career Enquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="Type your message"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">Send A Message</button>
                            </div>
                            <div id="msgSubmit" class="hidden"></div>

                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Contact Form End-->



        
  
@endsection
@section('js')
  <!-- For Contact Form -->
  
@endsection
