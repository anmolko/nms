@extends('formbuilder::front_layout')
@section('title') {{ $form->name }} @endsection
@section('css')
<style>
     input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
        color: #468847;
        background-color: #DFF0D8;
        border: 1px solid #D6E9C6;
    }

    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
        color: #B94A48;
        background-color: #F2DEDE;
        border: 1px solid #EED3D7;
    }

    .parsley-errors-list {
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none;
        font-size: 0.9em;
        line-height: 0.9em;
        opacity: 0;
        color: #B94A48;

        transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        -moz-transition: all .3s ease-in;
        -webkit-transition: all .3s ease-in;
    }

    .parsley-errors-list.filled {
        opacity: 1;
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
                        <li><a href="{{route('demand.list')}}">Demand </a></li>
                        <li><span>.</span></li>
                        <li><a href="#">{{ $form->name }} </a></li>
                    </ul>
                    <!-- <h2> {{ $pageTitle }}</h2> -->
                </div>
            </div>
        </section>
        <!--Page Header End-->

        
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card rounded-0">
                           

                            <div class="card-body">
                                <h3 class="text-center text-success">
                                    Your entry for <strong>{{ $form->name }}</strong> was successfully submitted.
                                </h3>
                            </div>

                            <div class="card-footer text-center">
                                <p> {{ @$form->custom_description }}</p>
                                <div class="text-center">
                                <a href="{{ route('demand.list') }}" class="btn btn-primary confirm-form btn-sm">
                                    <i class="fa fa-briefcase"></i> Return Demand
                                </a>
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-phone-square"></i> Contact Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
