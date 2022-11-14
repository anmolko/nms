@extends('backend.layouts.master')
@section('title', "Home Setting")
@section('css')
    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .hidden{
            display:none!important;
        }
        .dropdown-item{
            cursor: pointer;
        }

        .feature-image-button{
            position: absolute;
            top: 25%;
        }

        .profile-foreground-img-file-input {
            display: none;
        }

        label.profile-photo-edit.btn.btn-light.feature-side-image-button {
            position: absolute;
            bottom: 25%;
        }
    </style>
@endsection


@section('content')
    <div class="page-content">
        <div class="container-fluid" style="position:relative;">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-n4 mx-n4">
                        <div class="bg-soft-warning">
                            <div class="card-body pb-0 px-4">
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <div class="row align-items-center g-3">

                                            <div class="col-md">
                                                <div>
                                                    <h4 class="fw-bold">

                                                         Home Page Settings</h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto" style="    margin-top: 1rem;">
                                        <div class="hstack gap-1 flex-wrap">
                                            <div class="d-sm-flex align-items-center justify-content-between">

                                                <div class="page-title-right">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                                        <li class="breadcrumb-item active">{{str_replace('-',' ',ucwords(Request::segment(2)))}}</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#welcome-tab"
                                           role="tab">
                                            Welcome Section                                        </a>
                                    </li>
                                    @if($homesettings !== null)
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-core-action"
                                               role="tab">
                                                Core Values
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-missionvision-action"
                                               role="tab">
                                                Mission Vision Values
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-call-action"
                                               role="tab">
                                                Call Action
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-why-us-action"
                                               role="tab">
                                                Statistics
                                            </a>
                                        </li>

                                    @endif
                                </ul>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content text-muted">
                        <div class="tab-pane fade show active" id="welcome-tab" role="tabpanel">
                            @if($homesettings !== null)
                                {!! Form::open(['url'=>route('homepage.update', @$homesettings->id),'id'=>'homesettings-info-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                            @else
                                {!! Form::open(['route' => 'homepage.store','method'=>'post','class'=>'needs-validation','id'=>'homesettings-info-form','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
                            @endif
                                <div class="row  mb-4">
                                    <div class="col-lg-8">
                                            <figure class="figure">
                                                <img src="{{asset('images/welcome.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                <figcaption class="figure-caption">Output Sample.</figcaption>
                                            </figure>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="welcome-heading-input">Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="36" id="welcome-heading-input" name="welcome_heading" value="{{@$homesettings->welcome_heading}}"
                                                               placeholder="Enter  heading" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="welcome-subheading-input">Sub Heading </label>
                                                        <input type="text" class="form-control" maxlength="20" id="welcome-subheading-input" name="welcome_subheading" value="{{@$homesettings->welcome_subheading}}"
                                                               placeholder="Enter  subheading">
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label> Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="540" name="welcome_description" id="welcome_description" placeholder="Enter welcome description" rows="8" required>{{@$homesettings->welcome_description}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Button Text </label>
                                                        <input type="text" maxlength="20" class="form-control" value="{{@$homesettings->welcome_button}}" name="welcome_button">
                                                        <div class="invalid-feedback">
                                                            Please enter the button text.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Button Link </label>
                                                        <input type="text" class="form-control" value="{{@$homesettings->welcome_link}}" name="welcome_link">
                                                        <div class="invalid-feedback">
                                                            Please enter the button link.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->



                                            <!-- end card -->
                                            <div class="text-end mb-3">
                                                <button type="submit" class="btn btn-success w-sm">{{($homesettings !== null) ? "Update Home Settings":"Save Home Settings"}}</button>
                                            </div>



                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Other Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <img  id="current-img"  src="{{ (@$homesettings->welcome_image !== null) ? asset('images/home/welcome/'.@$homesettings->welcome_image) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail welcome-feature-image" >
                                                        <input  type="file" accept="image/png, image/jpeg" hidden
                                                            id="profile-foreground-img-file-input" onchange="loadFile(event)" name="welcome_image" {{ (@$homesettings->welcome_image !== null) ? '' :  'required' }}
                                                        class="profile-foreground-img-file-input" >

                                                        <figcaption class="figure-caption">*use image minimum of 530 x 530px </figcaption>
                                                        <div class="invalid-feedback" >
                                                                Please select a image.
                                                            </div>
                                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light feature-image-button">
                                                            <i class="ri-image-edit-line align-bottom me-1"></i> Add  Image
                                                        </label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="choices-publish-status-input" class="form-label">Image Alignment</label>

                                                        <select class="form-select" id="choices-publish-status-input" name="welcome_side_image" data-choices data-choices-search-false>
                                                            <option value="left" @if(@$homesettings->welcome_side_image == "left") selected @endif>Left</option>
                                                            <option value="right" @if(@$homesettings->welcome_side_image == "right") selected @endif>Right</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}

                        </div>
                        @if($homesettings !== null)

                            <div class="tab-pane fade" id="simple-core-action" role="tabpanel">

                                {!! Form::open(['url'=>route('homepage.corevalues', @$homesettings->id),'id'=>'homesettings-coreval-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                                <div class="row  mb-2">
                                    <div class="col-lg-12">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Heading Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <figure class="figure">
                                                        <img src="{{asset('images/core_values.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                        <figcaption class="figure-caption">Output Sample.</figcaption>
                                                    </figure>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="core_main_heading-input">Main Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="25" id="core_main_heading-input" name="core_main_heading" value="{{@$homesettings->core_main_heading}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="welcome-core-main-subheading">Sub Heading </label>
                                                        <input type="text" class="form-control" maxlength="20" id="welcome-core-main-subheading" name="core_main_subheading" value="{{@$homesettings->core_main_description}}"
                                                               placeholder="Enter subheading">
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label> Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="170" name="core_main_description" placeholder="Enter description" rows="8" required>{{@$homesettings->core_main_description}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="row  mb-2">
                                    <div class="col-lg-6">
                                        <div class="nosticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 1 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="core_main_heading1-input">Core Heading 1 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" id="core_main_heading1-input" name="core_heading1" value="{{@$homesettings->core_heading1}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 1 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description1" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description1}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nosticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 2 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 2 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading2" value="{{@$homesettings->core_heading2}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 2 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description2" placeholder="Enter core value description" rows="4" required>{{@$homesettings->core_description2}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nosticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 3 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" >Core Heading 2 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30"  name="core_heading3" value="{{@$homesettings->core_heading3}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 3 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description3" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description3}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nostickys-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 4 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 4 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading4" value="{{@$homesettings->core_heading4}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 4 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description4" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description4}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nostickys-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 5 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 5 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading5" value="{{@$homesettings->core_heading5}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 5 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description5" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description5}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nostickys-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 6 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 6 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading6" value="{{@$homesettings->core_heading6}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 6 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description6" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description6}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nostickys-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 7 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 7 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading7" value="{{@$homesettings->core_heading7}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 7 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description7" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description7}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nostickys-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0"> Core 8 Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Heading 8 <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="core_heading8" value="{{@$homesettings->core_heading8}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Core Description 8 <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="120" name="core_description8" placeholder="Enter core description" rows="4" required>{{@$homesettings->core_description8}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="text-center mb-3 mt-2">
                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                    </div>
                                </div>

                                {!! Form::close() !!}


                            </div>

                            <div class="tab-pane fade" id="simple-missionvision-action" role="tabpanel">

                                {!! Form::open(['url'=>route('homepage.mv', @$homesettings->id),'id'=>'homesettings-mv-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                                <div class="row  mb-2">
                                    <div class="col-lg-7">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Main Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <figure class="figure">
                                                        <img src="{{asset('images/mission.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                        <figcaption class="figure-caption">Output Sample.</figcaption>
                                                    </figure>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="30" name="mv_heading" value="{{@$homesettings->mv_heading}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Sub Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="25" name="mv_subheading" value="{{@$homesettings->mv_subheading}}"
                                                               placeholder="Enter Sub heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the subheading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Short Description</label>
                                                        <textarea class="form-control" maxlength="500" name="mv_description" placeholder="Enter description" rows="4" required>{{@$homesettings->mv_description}}</textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter the short description.
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Image Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Mission Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="300" name="mission" placeholder="Enter mission description" rows="4" required>{{@$homesettings->mission}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Vision Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="300" name="vision" placeholder="Enter vision description" rows="4" required>{{@$homesettings->vision}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Value Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" maxlength="300" name="value" placeholder="Enter value description" rows="4" required>{{@$homesettings->value}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                    <div class="text-center mb-3 mt-4">
                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                    </div>
                                </div>


                                {!! Form::close() !!}


                            </div>

                            <div class="tab-pane fade" id="simple-why-us-action" role="tabpanel">

                                {!! Form::open(['url'=>route('homepage.whyus', @$homesettings->id),'id'=>'homesettings-mv-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <figure class="figure">
                                            <img src="{{asset('images/stats.png')}}" class="figure-img img-fluid rounded" alt="...">
                                            <figcaption class="figure-caption">Output Sample.</figcaption>
                                        </figure>
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Site Statistics</h5>
                                                </div>
                                                <div class="card-body">

                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Project completed <span class="text-muted text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="project_completed" value="{{@$homesettings->project_completed}}"
                                                               placeholder="Enter project completed number">
                                                        <div class="invalid-feedback">
                                                            Please enter the project completed number.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Happy Clients <span class="text-muted text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="happy_clients" value="{{@$homesettings->happy_clients}}"
                                                               placeholder="Enter happy clients number">
                                                        <div class="invalid-feedback">
                                                            Please enter the happy clients number.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Visa Approved <span class="text-muted text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="visa_approved" value="{{@$homesettings->visa_approved}}"
                                                               placeholder="Enter visa approved number">
                                                        <div class="invalid-feedback">
                                                            Please enter the visa approved number.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label">Success Stories <span class="text-muted text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="success_stories" value="{{@$homesettings->success_stories}}"
                                                               placeholder="Enter success stories number">
                                                        <div class="invalid-feedback">
                                                            Please enter the success stories number.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mb-3 mt-2">
                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                    </div>
                                </div>

                                {!! Form::close() !!}


                            </div>

                            <div class="tab-pane fade" id="simple-call-action" role="tabpanel">

                                {!! Form::open(['url'=>route('homepage.action', @$homesettings->id),'id'=>'homesettings-simple-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                                <div class="row  mb-4">
                                    <div class="col-lg-12">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Main Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <figure class="figure">
                                                        <img src="{{asset('images/home_action.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                        <figcaption class="figure-caption">Output Sample.</figcaption>
                                                    </figure>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-input">Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="60" id="direction-heading-input" name="action_heading" value="{{@$homesettings->action_heading}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-input">Sub Heading <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" maxlength="40" id="direction-heading-input" name="action_heading2" value="{{@$homesettings->action_heading2}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the sub heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-inputs" >Button Text <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="direction-heading-inputs" maxlength="25" name="action_button" value="{{@$homesettings->action_button}}"
                                                               placeholder="Enter button text" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the button text.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-inputs" >Link<span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="direction-heading-inputs" name="action_link" value="{{@$homesettings->action_link}}"
                                                               placeholder="Enter button link" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the button link.
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-3 mt-3">
                                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}


                            </div>

                        @endif

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>



@endsection

@section('js')
    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>

    <script src="{{asset('assets/backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('assets/backend/custom_js/homepage.js')}}"></script>



@endsection
