    <div class="service-details__sidebar">
        <div class="service-details__sidebar-single service-details__service-list-box">
            <h3 class="service-details__service-title">Services List</h3>
            <ul class="service-details__service-list list-unstyled">

            @if(!empty($latestServices))
                @foreach($latestServices as $index => $latest)
                <li class="@if(Request::url() === url('/service/'.$latest->slug)) active @endif "><a   href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}<span
                            class="icon-right-arrow1"></span></a></li>
                @endforeach
            @endif
               
            </ul>
        </div>
        
        <div class="service-details__sidebar-single sidebar__call-box">
            <div class="sidebar__call-bg"
                style="background-image: url({{asset('assets/frontend/images/backgrounds/sidebar-call-bg.jpg')}});"></div>
            <div class="sideber__call-content">
                <h3 class="sideber__call-title">Want to  <br> Get in touch <br> with us                </h3>
                <div class="sideber__call-number">
                    <p>feel free to call</p>
                    <h3><a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a></h3>
                </div>
                <div class="sideber__call-button">
                    <div class="sideber__call-button-shape"></div>
                    <a href="#"><i class="icon-right-arrow1"></i>Sent us a message</a>
                </div>
            </div>
        </div>
    </div>