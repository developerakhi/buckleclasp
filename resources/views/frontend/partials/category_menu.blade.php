@php
$categories=DB::table('categories')->where('level', 0)->where('featured', 1)->orderBy('order_level', 'desc')->get()->take(7);
$sub_categories=DB::table('categories')->where('parent_id','!=', null)->get();
@endphp

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<div class = "main-wrapper">
      <nav class = "navbar">
        <div class = "brand-and-icon">
          <button type = "button" class = "navbar-toggler">
            <i class = "fas fa-bars"></i>
          </button>
        </div>

        <div class = "navbar-collapse">
          <ul class = "navbar-nav">
            <li><a href = "{{ route('home') }}">home</a></li>
            @foreach ($categories as $key => $category)
            <li><a href = "{{ route('products.category', $category->slug) }}" class = "menu-link">{{$category->name}}
              @if ($sub_categories->where('parent_id', $category->id)->first())  <span class = "drop-icon"><i class = "fas fa-chevron-down"></i></span>@endif
            </a>
            @if ($sub_categories->where('parent_id', $category->id)->first()) 
                <div class = "sub-menu">
                    @foreach ($sub_categories->where('level', 1)->where('parent_id', $category->id) as $key => $subcategory)
                        <div class = "">
                          <h4><a href="{{ route('products.category', $subcategory->slug) }}">{{ $subcategory->name }}</a></h4>
                          <ul>
                            @foreach ($sub_categories->where('level', 2)->where('parent_id', $subcategory->id) as $key => $sub_sub_category)  
                                <li style="padding: 5px 0;"><a href = "{{ route('products.category', $sub_sub_category->slug) }}">{{ $sub_sub_category->name }}</a></li>
                           @endforeach
                          </ul>
                        </div>
                    @endforeach
                </div>
            @endif
            </li>
            @endforeach
            <li><a href ="{{route('customize')}}">customize</a></li>

          </ul>
        </div>
      </nav>
    </div>



<script>
$(document).ready(function(){
    $('.navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(300);
    });
    
    smallScreenMenu();
    let temp;
    function resizeEnd(){
        smallScreenMenu();
    }

    $(window).resize(function(){
        clearTimeout(temp);
        temp = setTimeout(resizeEnd, 100);
        resetMenu();
    });
});


const subMenus = $('.sub-menu');
const menuLinks = $('.menu-link');

function smallScreenMenu(){
    if($(window).innerWidth() <= 992){
        menuLinks.each(function(item){
            $(this).click(function(){
                $(this).next().slideToggle();
            });
        });
    } else {
        menuLinks.each(function(item){
            $(this).off('click');
        });
    }
}

function resetMenu(){
    if($(window).innerWidth() > 992){
        subMenus.each(function(item){
            $(this).css('display', 'none');
        });
    }
}
</script>
