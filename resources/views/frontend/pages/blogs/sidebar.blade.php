<div class="sideber">
    <div class="sidebar__single sidebar__search">
        <form method="get" id="searchform" action="{{route('searchBlog')}}" class="sidebar__search-form">
            <input type="search" id="s" name="s"   placeholder="Find Keywords" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
            <button type="submit"><i class="icon-search"></i></button>
        </form>
    </div>
    @if(!empty($bcategories))

    <div class="sidebar__single sidebar__category">
        <h3 class="sidebar__title">Blog Categories</h3>
        <ul class="sidebar__category-list list-unstyled">
            @foreach(@$bcategories as $bcategory)
            <li>
                <div class="sideber__category-left">
                    <a  class="@if(Request::url() === url('/blog/categories/'.$bcategory->slug)) active @endif" href="{{url('/blog/categories/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a>
                </div>
                <div class="sideber__category-right">
                    <span class="sideber__category-count">{{@$bcategory->blogs->count()}}</span>
                    <a href="{{url('/blog/categories/'.$bcategory->slug)}}" class="sideber__category-arrow"><i
                            class="icon-right-arrow1"></i></a>
                </div>
            </li>
            @endforeach
         
        </ul>
    </div>
    @endif
    @if(!empty($latestPosts))

    <div class="sidebar__single sidebar__post">
        <h3 class="sidebar__title">Latest Posts</h3>
        <ul class="sidebar__post-list list-unstyled">
            @foreach($latestPosts as $index => $latest)

            <li>
                <div class="sidebar__post-image">
                    <img src="<?php if(@$latest->image){?>{{asset('/images/blog/thumb/thumb_'.@$latest->image)}}<?php }?>" alt="">
                </div>
                <div class="sidebar__post-content">
                    <h3>
                        <a href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a>
                        <span class="sidebar__post-content-meta"><i class="icon-clock"></i> {{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                    </h3>
                </div>
            </li>
            @endforeach
            
        </ul>
    </div>
    @endif
    
</div>

