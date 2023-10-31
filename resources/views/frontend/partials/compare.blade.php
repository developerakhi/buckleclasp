<a href="{{ route('compare') }}" class="d-flex align-items-center text-reset">
   
    <span class="flex-grow-1 ml-1">
        @if(Session::has('compare'))
            <span class="mrl15 badge badge-primary badge-inline badge-pill">{{ count(Session::get('compare'))}}</span>
        @else
            <span class="mrl15 badge badge-primary badge-inline badge-pill">0</span>
        @endif
        <span class="nav-box-text d-none d-xl-block"> <i class="icolor la la-refresh la-2x"></i></span>
    </span>
</a>