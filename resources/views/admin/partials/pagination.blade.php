@if ($paginator->hasPages())
    <nav class="pagination" aria-label="Pagination">
        <span>Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>
        <div>
            @if (!$paginator->onFirstPage())
                <a class="btn btn-secondary" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
                @endif @if ($paginator->hasMorePages())
                    <a class="btn btn-secondary" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                @endif
        </div>
    </nav>
@endif
