<a href="{{ route('wishlists.index') }}" class="d-flex align-items-center text-reset">
    
    <span class="flex-grow-1 ml-1">
        @if(Auth::check())
            <span class="mrl15 badge badge-primary badge-inline badge-pill">{{ count(Auth::user()->wishlists)}}</span>
        @else
            <span class="mrl15 badge badge-primary badge-inline badge-pill">0</span>
        @endif
        <span class="nav-box-text d-none d-xl-block"><i class="icolor la la-heart-o la-2x"></i></span>
    </span>
</a>
