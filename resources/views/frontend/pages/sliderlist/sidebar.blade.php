

<div class="sidebar">

    @if(!empty($slider_lists))

        <div class="sidebar__single sidebar__category">
            <h3 class="sidebar__title">All Slider Lists</h3>
            <ul class="sidebar__category-list list-unstyled">
                @foreach(@$slider_lists as $slider)
                    <li class="@if(Request::url() === url('/slider-list/'.$slider->subheading)) active @endif"><a href="{{url('/slider-list/'.$slider->subheading)}}">{{ucwords(@$slider->list_header)}} <span
                                class="fa fa-angle-right"></span></a></li>
                @endforeach
                    
            </ul>
        </div>
    @endif
    
</div>
