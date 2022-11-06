

<div class="sideber">

    @if(!empty($slider_lists))

    <div class="sidebar__single sidebar__category">
        <h3 class="sidebar__title">All Slider Lists</h3>
        <ul class="sidebar__category-list list-unstyled">
            @foreach(@$slider_lists as $slider)
            <li>
                <div class="sideber__category-left">
                    <a  class="@if(Request::url() === url('/slider-list/'.$slider->subheading)) active @endif" href="{{url('/slider-list/'.$slider->subheading)}}">{{ucwords(@$slider->list_header)}}</a>
                </div>
                <div class="sideber__category-right">
                    <a href="{{url('/slider-list/'.$slider->subheading)}}" class="sideber__category-arrow"><i
                            class="icon-right-arrow1"></i></a>
                </div>
            </li>
            @endforeach
         
        </ul>
    </div>
    @endif

    
</div>

