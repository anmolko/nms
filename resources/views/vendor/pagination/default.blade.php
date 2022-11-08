

@if ($paginator->hasPages())

    <nav class="Pager4" aria-label="pagination example">
        <ul class="pagination pagination-circle justify-content-center">

            <!--Arrow left-->
            @if ($paginator->onFirstPage())
            
            <li class="page-item disabled">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link prev" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            @else
            
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link prev" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @endif


            @if($paginator->currentPage() > 3)
                <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
            @endif

            
            @if($paginator->currentPage() > 4)
                <li class="page-item"><a class="page-link">..</a></li>
        
            @endif


            @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                         <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
                @else
                     <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}" >{{ $i }}</a></li>

                @endif
            @endif
        @endforeach

        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li class="page-item"><a class="page-link">..</a></li>
        @endif

        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>

        @endif

              
        @if ($paginator->hasMorePages())

           
            <li class="page-item">
                <a class="page-link next"  href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        @else

        @endif

        
        </ul>
    </nav> 


@endif



