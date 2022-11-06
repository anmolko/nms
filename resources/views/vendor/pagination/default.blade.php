

@if ($paginator->hasPages())

    <ul class="pg-pagination list-unstyled">
        @if ($paginator->onFirstPage())

        <li class="prev disabled">
            <a href="{{ $paginator->previousPageUrl() }}" class=""><i class="fa fa-angle-left"></i></a>
        </li>
        @else
        <li class="page-item ">
            <a href="{{ $paginator->previousPageUrl() }}" class=""><i class="fa fa-angle-left"></i></a>
        </li>
        @endif

        @if($paginator->currentPage() > 3)
        <li class="count"><a href="{{ $paginator->url(1) }}"> 1</a></li>
        @endif

        
        @if($paginator->currentPage() > 4)
            <li class="count disabled" aria-disabled="true"><span class="page-link seperate-pagination-link">...</span></li>
    
        @endif
        
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                        <li class="count"><a href="#" class="active">{{ $i }}</a></li>
                    
                @else
                     <li class="count"><a href="{{ $paginator->url($i) }}" >{{ $i }}</a></li>

                @endif
            @endif
        @endforeach

        @if($paginator->currentPage() < $paginator->lastPage() - 3)
        <li class="count disabled" aria-disabled="true"><span class=" seperate-pagination-link">...</span></li>

        @endif

        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="count"><a class="" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>

        @endif


              
    @if ($paginator->hasMorePages())

        <li class="next">
            <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><i class="fa fa-angle-right"></i></a>
        </li>
    @else

    @endif

    </ul>

@endif



