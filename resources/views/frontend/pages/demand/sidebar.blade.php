<div class="sidebar">
    <div class="sidebar__single sidebar__search">
        <form method="get" id="searchform" action="{{route('searchDemand')}}" class="sidebar__search-form">
            <input type="search"id="s" name="s"   placeholder="Find Keywords" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
            <button type="submit"><i class="icon-magnifying-glass"></i></button>
        </form>
    </div>
    @if(!empty($latestDemands))
        <div class="sidebar__single sidebar__post">
            <h3 class="sidebar__title">Latest Demands</h3>
            <ul class="sidebar__post-list list-unstyled">
            @foreach($latestDemands as $index => $latest)

                <li>
                    <div class="sidebar__post-image">
                        <img src="<?php if(@$latest->image){?>{{asset('/images/job/thumb/thumb_'.@$latest->image)}}<?php }?>" alt="">
                    </div>
                    <div class="sidebar__post-content">
                        <h3>
                            <a href="{{route('demand.single',@$latest->slug)}}">{{ucwords(@$latest->name)}}</a>
                        </h3>
                    </div>
                </li>
            @endforeach
                
            </ul>
        </div>
    @endif
</div>
