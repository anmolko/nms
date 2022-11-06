@extends('frontend.layouts.master')
@section('title') Our Terms & Condition @endsection
@section('css')
    <style>
           
    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
        text-align: justify;
    }
   
    .elementor-811 .elementor-element.elementor-element-6deeee44 {
        padding: 0px 0px 0px 0px;
    }
   
    </style>
@endsection
@section('content')


<div class="corpkit-content-wrapper">
	<div class="corpkit-content cea-service corpkit-cea">
		<header id="page-title" class="page-title-wrap">
            <div class="page-title-wrap-inner" data-property="no-video">
                <span class="page-title-overlay"></span>
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="page-title-inner">
                        <div class="pull-left">
                        <h1 class="page-title">Our Terms & Condition</h1>
                        <div id="breadcrumb" class="breadcrumb">
                            <a href="/">Home</a>
                            
                            <span class="current">Terms & Condition</span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
		<!-- .page-title-wrap-inner -->
		</header>

        <div class="corpkit-content-inner">
        <div id="primary" class="content-area">
            <div class="wrap cea-content">
            <div class="portfolio-content-area">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="portfolio-single portfolio-model-2">
                        <div class="row">
                        <div class="col-sm-12">
                            <div
                            class="elementor-element elementor-element-37c242e cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                            data-id="37c242e"
                            data-element_type="widget"
                            data-widget_type="ceasectiontitle.default"
                            >
                            <div class="elementor-widget-container">
                                <div class="section-title-wrapper">
                                <div class="title-wrap">
                                @if(@$header_descp_elements->heading)

                                <h6 class="sub-title">{{ucwords(@$header_descp_elements->heading)}}</h6>
                                @endif

                                @if(@$header_descp_elements->subheading)
                                <h2 class="section-title">{{@$header_descp_elements->subheading}}</h2>
                                @else
                                <h2 class="section-title">Terms & Condition</h2>
                                @endif
                                </div>
                                <!-- .title-wrap -->
                                <div class="section-description"></div>
                                <!-- .section-description -->
                                </div>
                                <!-- .section-title-wrapper -->
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- .row -->
                        <div class="row portfolio-details">
                        <div class="col-sm-12">
                            <div class="portfolio-content-wrap">
                            <div class="portfolio-content">
                                <div
                                data-elementor-type="wp-post"
                                data-elementor-id="811"
                                class="elementor elementor-811"
                                >
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-6deeee44 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="6deeee44"
                                    data-element_type="section"
                                >
                                    <div
                                    class="elementor-container elementor-column-gap-no"
                                    >
                                    <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2e0193e8"
                                        data-id="2e0193e8"
                                        data-element_type="column"
                                    >
                                        <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                        >
                                        <div
                                            class="elementor-element elementor-element-265642cf elementor-widget elementor-widget-text-editor"
                                            data-id="265642cf"
                                            data-element_type="widget"
                                            data-widget_type="text-editor.default"
                                        >
                                            <div class="elementor-widget-container custom-editor">
                                            <style>
                                                /*! elementor - v3.7.1 - 14-08-2022 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked
                                                .elementor-drop-cap {
                                                background-color: #818a91;
                                                color: #fff;
                                                }
                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed
                                                .elementor-drop-cap {
                                                color: #818a91;
                                                border: 3px solid;
                                                background-color: transparent;
                                                }
                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                                                .elementor-drop-cap {
                                                margin-top: 8px;
                                                }
                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                                                .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em;
                                                }
                                                .elementor-widget-text-editor
                                                .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px;
                                                }
                                                .elementor-widget-text-editor
                                                .elementor-drop-cap-letter {
                                                display: inline-block;
                                                }
                                            </style>
                                                  {!! @$header_descp_elements->description !!}

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </section>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .portfolio-single -->
                    </div>
                    <!-- .col -->
                </div>
                <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .portfolio-content-area -->
            </div>
            <!-- .wrap -->
        </div>
        <!-- .content-area -->
        </div>

        <!-- .corpkit-content-inner -->
	</div>
<!-- .corpkit-content -->
</div>



@endsection