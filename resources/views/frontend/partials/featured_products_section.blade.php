@php
    $featured_products = Cache::remember('featured_products', 3600, function () {
        return filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->latest()->limit(6)->get();
    });
@endphp

@if (count($featured_products) > 0)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Featured Products') }}</span>
                    </h3>
                </div>
                <div class="container">
                      <div class="row row-cols-lg-6 g-2 g-lg-4">
                          @foreach ($featured_products as $key => $product)
                            <div class="col" data-items="5" data-xl-items="6" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                              <div class="aiz-card-box gutters-10 border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                @if(discount_in_percentage($product) > 0)
                                    <span class="badge-custom">{{ translate('OFF') }}<span class="box ml-1 mr-0">&nbsp;{{discount_in_percentage($product)}}%</span></span>
                                @endif
                                <div class="position-relative">
                                    @php
                                        $product_url = route('product', $product->slug);
                                        if($product->auction_product == 1) {
                                            $product_url = route('auction-product', $product->slug);
                                        }
                                    @endphp
                                    <a href="{{ $product_url }}" class="d-block">
                                        <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                            alt="{{  $product->getTranslation('name')  }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                        >
                                    </a>
                                    @if ($product->wholesale_product)
                                        <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                            {{ translate('Wholesale') }}
                                        </span>
                                    @endif
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to wishlist') }}" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to compare') }}" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to cart') }}" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        @if(home_base_price($product) != home_discounted_base_price($product))
                                            <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                                        @endif
                                        <span class="fw-700 text-primary">{{ home_discounted_base_price($product) }}</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        {{ renderStarRating($product->rating) }}
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="{{ $product_url }}" class="d-block text-reset">{{  $product->getTranslation('name')  }}</a>
                                    </h3>
                                    @if (addon_is_activated('club_point'))
                                        <div class="rounded px-2 mt-2 bg-soft-primary border-soft-primary border">
                                            {{ translate('Club Point') }}:
                                            <span class="fw-700 float-right">{{ $product->earn_point }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            </div>
                        @endforeach
                      </div>
                    </div>
            </div>
        </div>
    </section>   
@endif