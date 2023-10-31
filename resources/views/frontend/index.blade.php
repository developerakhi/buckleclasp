@extends('frontend.layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
@section('content')
    {{-- Categories , Sliders . Today's deal --}}
   
     
        
        @if (get_setting('home_slider_images') != null)
            <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true" data-infinite="true">
                @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                @foreach ($slider_images as $key => $value)
                    <div class="carousel-box">
                        <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                            <img
                                class="d-block mw-100 img-fit rounded shadow-sm"
                                src="{{ uploaded_asset($slider_images[$key]) }}"
                                alt="{{ env('APP_NAME')}} promo"
                                @if(count($featured_categories) == 0)
                                height=""
                                @else
                                height=""
                                @endif
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                            >
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    
    <br><br><br><br><br>
    <!--
    <div class="home-banner-area mb-4 pt-3">
        <div class="container">
            <div class="row gutters-10 position-relative">
                

                @php
                    $num_todays_deal = count($todays_deal_products);
                @endphp

             
                    @if (count($featured_categories) > 0)
                        <ul class="list-unstyled mb-0 row gutters-5">
                            @foreach ($featured_categories as $key => $category)
                                <li class="minw-0 col-4 col-md mt-3">
                                    <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                                        <img
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($category->banner) }}"
                                            alt="{{ $category->getTranslation('name') }}"
                                            class="lazyload img-fit"
                                            height="78"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                        <div class="text-truncate fs-12 fw-600 mt-2 opacity-70">{{ $category->getTranslation('name') }}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
           
                </div>

                @if($num_todays_deal > 0)
                <div class="col-lg-2 order-3 mt-3 mt-lg-0">
                    <div class="bg-white rounded shadow-sm">
                        <div class="bg-soft-primary rounded-top p-3 d-flex align-items-center justify-content-center">
                            <span class="fw-600 fs-16 mr-2 text-truncate">
                                {{ translate('Todays Deal') }}
                            </span>
                            <span class="badge badge-primary badge-inline">{{ translate('Hot') }}</span>
                        </div>
                        <div class="c-scrollbar-light overflow-auto h-lg-400px p-2 bg-primary rounded-bottom">
                            <div class="gutters-5 lg-no-gutters row row-cols-2 row-cols-lg-1">
                            @foreach ($todays_deal_products as $key => $product)
                                @if ($product != null)
                                <div class="col mb-2">
                                    <a href="{{ route('product', $product->slug) }}" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img
                                                        class="lazyload img-fit h-140px h-lg-80px"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                                        alt="{{ $product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">{{ home_discounted_base_price($product) }}</span>
                                                    @if(home_base_price($product) != home_discounted_base_price($product))
                                                        <del class="d-block opacity-70">{{ home_base_price($product) }}</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    
    -->
    

    
    <div class="mb-4 mt-3">
        <div class="container">
            <div class="row gutters-10">
               
                <div class="gridstyled__Column-sc-9drw6-0 cwfidP">
                    <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 ddBRer">
                        <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 iUFmhN">
                            <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                    <div class="text-block-ellipsingstyles__EllipsingContainer-sc-1056re7-0 eVfDiw text-block">
                                        <h3 class="std-module-heading no-bottom-margin">New kit on the block</h3>
                                        <p>Add some flair to your new-season look with our latest styles, guaranteed to keep you feeling suave.</p>
                                        <div class="inline-cta">
                                            <a class="arrow-link red ss23" href="#">Women's New Arrivals</a>
                                            <a class="arrow-link red ss23" href="#">Men's New Arrivals</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           {{-- Banner section 1 --}}
            @if (get_setting('home_banner1_images') != null)
                <!--<div class="row">-->
                    <div class="aiz-carousel gutters-10" data-items="4" data-xxl-items="4" data-xl-items="4" data-lg-items="4" data-md-items="4" data-sm-items="4" data-xs-items="4" data-arrows="true" data-dots="false" data-autoplay="false" data-infinite="true">
                        @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
                        @foreach ($featured as $key => $value)
                        <div class="carousel-box position-relative">
                            <a href="{{ route('products.category', $value->slug) }}" class="d-block text-reset">
                                <button class="quick-buystyled__BuyCTA-sc-1oodjyv-0 iejfzC h-pos-right v-pos-bottom" data-testid="quick-buy-cta" aria-label="Shop now"><img src="https://buckleclasp.com/public/uploads/all/KV0SkrYPwjeSujR9xM5VVTpOXHeaDcXi2FYKLY2r.svg" alt="Shop now" aria-hidden="true"></button>
                                <img width="2075" height="2593" sizes="(max-width: 810px) and (-webkit-min-device-pixel-ratio: 3) 18.69vw, (max-width: 810px) 28.33vw, 27.833vw" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value->banner) }}" alt="" class="img-fluid lazyload" draggable="false">
                            </a>
                            <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 cjBxPn vh-pos h-pos-left v-pos-bottom white text-shadow" style="margin-top: -90px;">
                                <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 kACBMl">
                                    <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                        <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                            <div class="">
                                                <h2 style="font-size:20px;" class=""><span class="">{{$value->name}}</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    @endif
                <!--</div>-->
            </div>
        </div>
    </div>
    


    {{-- Flash Deal --}}
    @php
        $flash_deal = \App\Models\FlashDeal::where('status', 1)->where('featured', 1)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Flash Sale') }}</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                    <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">{{ translate('View More') }}</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif


    <!--<div id="section_newest">-->
    <!--    @if (count($newest_products) > 0)-->
    <!--        <section class="mb-4">-->
    <!--            <div class="container">-->
    <!--                <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">-->
    <!--                    <div class="d-flex mb-3 align-items-baseline border-bottom">-->
    <!--                        <h3 class="h5 fw-700 mb-0">-->
    <!--                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">-->
    <!--                                {{ translate('New Products') }}-->
    <!--                            </span>-->
    <!--                        </h3>-->
    <!--                    </div>-->
    <!--                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>-->
    <!--                        @foreach ($newest_products as $key => $new_product)-->
    <!--                        <div class="carousel-box">-->
    <!--                            @include('frontend.partials.product_box_1',['product' => $new_product])-->
    <!--                        </div>-->
    <!--                        @endforeach-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>   -->
    <!--    @endif-->
    <!--</div>-->

    <!--{{-- Featured Section --}}-->
    <!--<div id="section_featured">-->

    <!--</div>-->

    <!--<div id="section_best_selling">-->

    <!--</div>-->

    <!-- Auction Product -->
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif


    {{-- Banner Section 2 --}}
    @if (get_setting('home_banner2_images') != null)
    <div class="mb-4">
        <!--<div class="container">-->
            <div class="row gutters-10">
                @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp
                @foreach ($banner_2_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">
                            </a>
                            <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 cjBxPn vh-pos h-pos-left v-pos-bottom white text-shadow" style="margin-top: -90px;">
                                <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 kACBMl">
                                    <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                        <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                            <div class="text-block-ellipsingstyles__EllipsingContainer-sc-1056re7-0 eVfDiw text-block">
                                                <h2 class="std-heading no-bottom-margin"><span class="font-weight-light">Sundrenched</span> dresses</h2>
                                                <a class="arrow-link ss23" href="#">Shop Women's Dresses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        <!--</div>-->
    </div>
    @endif

 {{-- Banner Section 3 --}}
    @if (get_setting('home_banner3_images') != null)
    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                <div class="gridstyled__Column-sc-9drw6-0 cwfidP">
                    <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 ddBRer">
                        <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 iUFmhN">
                            <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                    <div class="text-block-ellipsingstyles__EllipsingContainer-sc-1056re7-0 eVfDiw text-block">
                                        <h3 class="std-module-heading no-bottom-margin">Rise to the occasion</h3>
                                        <p>From statement-making silhouettes to powerful prints and top-shelf tailoring, we have an array of luxury dress styles to accommodate you in any event.</p>
                                        <div class="inline-cta">
                                            <a class="arrow-link red ss23" href="#">WOMEN'S OCCASIONWEAR</a>
                                            <a class="arrow-link red ss23" href="#">MEN'S OCCASIONWEAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp
                @foreach ($banner_3_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">
                            </a>
                            <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 cjBxPn vh-pos h-pos-left v-pos-bottom white text-shadow" style="margin-top: -90px;">
                                <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 kACBMl">
                                    <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                        <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                            <div class="text-block-ellipsingstyles__EllipsingContainer-sc-1056re7-0 eVfDiw text-block">
                                                <h2 class="std-heading no-bottom-margin"><span class="font-weight-light">Sundrenched</span> dresses</h2>
                                                <a class="arrow-link ss23" href="#">Shop Women's Dresses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif



<div class="sale">
    <section class='hero-header'>
        <h2 class="std-feat-heading eoss mb-center dt-center">up to 50% off</h2>
        <h1>
            <img alt="Sale" src="https://media.tedbaker.com/content/2023/promo/eoss/lock-up/Sale.svg" style="height: 300px;">
        </h1>
        <h2 class="std-heading eoss mb-center dt-center no-bottom-margin">new lines added</h2>
        <a width="" href="#" class="button-blockstyles__ButtonBlockLink-sc-7gpgzo-2 hOLUco">
            <button color="" class="buttons__SecondaryButton-sc-1j264oz-1 dmxGfA">Shop Women</button>
        </a>
        <a width="" href="#" class="button-blockstyles__ButtonBlockLink-sc-7gpgzo-2 hOLUco">
            <button color="" class="buttons__SecondaryButton-sc-1j264oz-1 dmxGfA">Shop Men</button>
        </a>
    </section>
</div>


 {{-- Banner section 1 --}}
    @if (get_setting('home_banner1_images') != null)
    <!--<div class="mb-4 mt-3">-->
        <div class="container">
            <div class="row gutters-10">
                
                @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
                @foreach ($banner_1_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="" style="margin-bottom:80px">
                            <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload">
                            </a>
                            <div id="" class="componentstyles__GeneralWrapper-g6x7sl-0 cjBxPn vh-pos h-pos-left v-pos-bottom white text-shadow" style="margin-top: -90px;">
                                <div data-testid="txt-and-btns" class="button-blockstyles__TextAndButtonsWrapper-sc-7gpgzo-3 kACBMl">
                                    <div class="text-blockstyles__TextBlockHtml-sc-15mwee3-0 jJWLGN">
                                        <div data-testid="text-block-ellipsing" class="text-ellipsingstyled__TextEllipsingContainer-pseh8t-0 bfjcrK">
                                            <div class="">
                                                <h2 style="font-size:20px;" class=""><span class="font-weight-light">Up to 50% Off </span><br><span class="">Women's Dresses</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    <!--</div>-->
    @endif



    <!--{{-- Category wise Products --}}-->
    <!--<div id="section_home_categories">-->

    <!--</div>-->

    
    {{-- Classified Product --}}
    @if(get_setting('classified_product') == 1)
        @php
            $classified_products = \App\Models\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
        @endphp
           @if (count($classified_products) > 0)
               <section class="mb-4">
                   <div class="container">
                       <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                            <div class="d-flex mb-3 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Classified Ads') }}</span>
                                </h3>
                                <a href="{{ route('customer.products') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View More') }}</a>
                            </div>
                           <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="5" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                               @foreach ($classified_products as $key => $classified_product)
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($classified_product->thumbnail_img) }}"
                                                        alt="{{ $classified_product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </a>
                                                <div class="absolute-top-left pt-2 pl-2">
                                                    @if($classified_product->conditon == 'new')
                                                       <span class="badge badge-inline badge-success">{{translate('new')}}</span>
                                                    @elseif($classified_product->conditon == 'used')
                                                       <span class="badge badge-inline badge-danger">{{translate('Used')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="p-md-3 p-2 text-left">
                                                <div class="fs-15 mb-1">
                                                    <span class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block text-reset">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                            </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </section>
           @endif
       @endif





    <!--{{-- Banner Section 2 --}}-->
    <!--@if (get_setting('home_banner3_images') != null)-->
    <!--<div class="mb-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-10">-->
    <!--            @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp-->
    <!--            @foreach ($banner_3_imags as $key => $value)-->
    <!--                <div class="col-xl col-md-6">-->
    <!--                    <div class="mb-3 mb-lg-0">-->
    <!--                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset">-->
    <!--                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--@endif-->

    {{-- Best Seller --}}
    <!--
    <div id="section_best_sellers">

    </div>
    -->

    {{-- Top 10 categories and Brands --}}
    @if (get_setting('top10_categories') != null || get_setting('top10_brands') != null)
    @php
        $col_section = (get_setting('top10_categories') != null && get_setting('top10_brands') != null) ? 'col-lg-6' : 'col-lg-12';
        $col_block = (get_setting('top10_categories') != null && get_setting('top10_brands') != null) ? 'col-sm-6' : 'col-xl-3 col-lg-4 col-sm-6';
    @endphp
    <section class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                @if (get_setting('top10_categories') != null)
                    <div class="{{ $col_section }}">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Categories') }}</span>
                            </h3>
                            <a href="{{ route('categories.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Categories') }}</a>
                        </div>
                        <div class="row gutters-5">
                            @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp
                            @foreach ($top10_categories as $key => $value)
                                @php $category = \App\Models\Category::find($value); @endphp
                                @if ($category != null)
                                    <div class="{{ $col_block }}">
                                        <a href="{{ route('products.category', $category->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-3 text-center">
                                                    <img
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($category->banner) }}"
                                                        alt="{{ $category->getTranslation('name') }}"
                                                        class="img-fluid img lazyload h-60px"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                                <div class="col-7">
                                                    <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">{{ $category->getTranslation('name') }}</div>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <i class="la la-angle-right text-primary"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (get_setting('top10_brands') != null)
                    <div class="{{ $col_section }}">
                        <div class="d-flex mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Brands') }}</span>
                            </h3>
                            <a href="{{ route('brands.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Brands') }}</a>
                        </div>
                        <div class="row gutters-5">
                            @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp
                            @foreach ($top10_brands as $key => $value)
                                @php $brand = \App\Models\Brand::find($value); @endphp
                                @if ($brand != null)
                                    <div class="{{ $col_block }}">
                                        <a href="{{ route('products.brand', $brand->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-4 text-center">
                                                    <img
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($brand->logo) }}"
                                                        alt="{{ $brand->getTranslation('name') }}"
                                                        class="img-fluid img lazyload h-60px"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">{{ $brand->getTranslation('name') }}</div>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <i class="la la-angle-right text-primary"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @endif

@endsection


  


@section('script')

  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"-->
  <!--  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">-->
  <!--  </script>-->
    <!-- Swiper JS -->
  
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>

 
@endsection