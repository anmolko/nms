<div class="service-details__sidebar" id="service-sidebar">
    <div class="service-details__sidebar-category">
        <h3 class="service-details__sidebar-title">Service List</h3>
        <ul class="service-details__sidebar-category-list list-unstyled">
            @if(!empty($latestServices))
                @foreach($latestServices as $index => $latest)
                <li class="@if(Request::url() === url('/service/'.$latest->slug)) active @endif "><a   href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}<span
                            class="fa fa-angle-right"></span></a></li>
                @endforeach
            @endif
        </ul>
    </div>
    <div class="service-details__need-help">
        <div class="service-details__need-help-bg"
            style="background-image: url({{asset('assets/frontend/images/resources/ser-dtl-need-help-bg.jpg')}})">
        </div>
        <h3 class="service-details__need-help-title">Need help</h3>
        <p class="service-details__need-help-text">Prefer speaking with a human to filling out a
            form? call corporate office and we will connect you with a team member who can help.
        </p>
        <div class="service-details__need-help-phone">
            <div class="service-details__need-help-phone-icon">
                <span class="icon-phone-call"></span>
            </div>
            <div class="service-details__need-help-phone-number">
            <h4><a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a></h4>

            </div>
        </div>
    </div>
</div>


