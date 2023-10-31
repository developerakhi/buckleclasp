@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif
<!-- Top Bar -->
<div class="top-navbar border-bottom border-soft-secondary z-1035 h-35px h-sm-auto">
    <div class="bg-top" style="background-color: rgb(33, 33, 33);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-bg">
                        <ul class="top-ul">
                            <li class="top-li">
                                <a href="#" class="top-a">SALE - Further Reductions</a>
                            </li>
                            <li class="top-li">
                                <a href="#" class="top-a">Free delivery on UK orders over £100</a>
                            </li>
                            <li class="top-li">
                                <a href="#" class="top-a">Order by 10pm for Next Day Delivery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1">
            <div class="d-flex align-items-center site-header-containerstyles__SiteHeaderWrapper-sc-1l4xnzm-0 kIosJw">
                
                    <div class="col-lg-4 site-headerstyled__CountryAndFinder-sc-1dt955n-4 iYnRyN">
                        <div id="ge_ss769_0" style="cursor:pointer;" class="ge-flag-show ekjAEo ge-switcher-flag">
                            <div class="">
                                <img style="display:none;" id="ge_flag" src="//gepi.global-e.com/content/images/flags/bd.png">
                            </div>
                            <div class="iconstyled__IconWrapper-sc-119344p-0 jVVdDY">
                                <img src="https://media.tedbaker.com/content/design_system/icons/dark_grey/tedbaker_icon_Region.svg" alt="Change Location or Language" title="Change Location or Language" width="48px" height="48px" class="iconstyled__IconImg-sc-119344p-1 bIuKIn">
                            </div>
                            <span class="hpByUr"> BD <span id="ge_flagCurrencySymbol">(£)</span> </span>
                        </div>
                        <div data-testid="site-header-country-selector" class="site-headerstyled__CountrySelector-sc-1dt955n-6 ekjAEo" style="display: none !important;">
                            <div class="iconstyled__IconWrapper-sc-119344p-0 jVVdDY">
                                <img src="https://media.tedbaker.com/content/design_system/icons/dark_grey/tedbaker_icon_Region.svg" alt="Change Location or Language" title="Change Location or Language" width="48px" height="48px" class="iconstyled__IconImg-sc-119344p-1 bIuKIn">
                            </div>
                            <span class="site-headerstyled__CountryAndFinderLabel-sc-1dt955n-5 hpByUr">ROW (£)</span>
                        </div>
                        <div data-testid="site-header-store-finder" class="site-headerstyled__CountrySelector-sc-1dt955n-6 site-headerstyled__StoreFinder-sc-1dt955n-7 ekjAEo hkBGju">
                            <a data-testid="site-header-store-finder-link">
                                <div class="iconstyled__IconWrapper-sc-119344p-0 jVVdDY">
                                    <img src="https://media.tedbaker.com/content/design_system/icons/dark_grey/tedbaker_icon_Location.svg" alt="Store Finder" title="Store Finder" width="48px" height="48px" class="iconstyled__IconImg-sc-119344p-1 bIuKIn">
                                </div>
                            </a>
                            <span class="site-headerstyled__CountryAndFinderLabel-sc-1dt955n-5 hpByUr">Store Finder</span>
                        </div>
                    </div>
                
                
                <div data-testid="col-lg-4 site-header-logo" class="site-headerstyled__LogoWrapper-sc-1dt955n-3 clBAZD">
                    <a class="site-headerstyled__Logo-sc-1dt955n-2 kTfwDh" href="{{ route('home') }}">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @endif
                    </a>
                </div>

                <div data-testid="col-lg-4 site-header-right" class="site-headerstyled__HeaderRightSide-sc-1dt955n-9 gyqSQN">
                    <nav class="site-headerstyled__IconNav-sc-1dt955n-1 dBSifT">
                        <form role="search" method="get" class="search-form" action="{{ route('search') }}">
                        	<label class="jVVdDY">
                        		<input type="text" class="search-field form-control" placeholder="Search …" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="Search Produc..." autocomplete="off" />
                        	</label>
                        	<input type="submit" class="search-submit" value="Search" />
                        </form>
                        <div class="site-headerstyled__IconWrapper-sc-1dt955n-11 jdQGB">
                            <a data-testid="site-header-wishlist" href="/row/wishlist">
                                <div class="iconstyled__IconWrapper-sc-119344p-0 jVVdDY">
                                    <img src="https://media.tedbaker.com/content/design_system/icons/dark_grey/tedbaker_icon_Liked.svg" alt="My Wishlist" title="My Wishlist" width="48px" height="48px" class="iconstyled__IconImg-sc-119344p-1 bIuKIn">
                                </div>
                            </a>
                        </div>
                        <div class="site-headerstyled__IconWrapper-sc-1dt955n-11 jdQGB">
                            <a data-testid="site-header-bag" href="javascript:void(0)">
                                <div class="iconstyled__IconWrapper-sc-119344p-0 jVVdDY">
                                    @include('frontend.partials.cart')
                                </div>
                            </a>
                        </div>
                        <div class="col-8 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    @auth
                        @if(isAdmin())
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('admin.dashboard') }}" class="regbtn text-reset d-inline-block py-2">{{ translate('My Panel')}}</a>
                            </li>
                        @else
                        <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            @if (Auth::user()->user_type == 'seller')
                                <a href="{{ route('seller.dashboard') }}" class="regbtn text-reset d-inline-block py-2">{{ translate('My Panel')}}</a>
                            @else
                                <a href="{{ route('dashboard') }}" class="regbtn text-reset d-inline-block py-2">{{ translate('My Panel')}}</a>
                            @endif
                        </li>
                        @endif
                        <li class="list-inline-item">
                            <a href="{{ route('logout') }}" class="lginb text-reset d-inline-block py-2"><samp class="fs-18 las la-sign-in-alt"></samp></span> {{ translate('Logout')}}</span></a>
                        </li>
                    @else
                        <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            <a href="{{ route('user.login') }}" class="lginb text-reset d-inline-block py-2"><samp class="fs-18 las la-sign-in-alt"></samp> <span>{{ translate('Login')}}</span></a>
                        </li>
                        <!--
                        <li class="list-inline-item">
                            <a href="{{ route('user.registration') }}" class="regbtn text-reset d-inline-block py-2"><i class="las la-hand-point-up"></i>{{ translate('Registration')}}</a>
                        </li>
                        -->
                    @endauth
                   
                   
                </ul>
            </div>
                    </nav>
                </div>
            </div>
            
  
        @if(Route::currentRouteName() != 'home')
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    
        
<div class="container">
<div class=row>
    <div class="col-lg-3"></div>
    @include('frontend.partials.category_menu')
    <!--<div class="col-lg-3" style="float: right; margin: -31px 96px;"><sup color="ff0001" class="site-navstyles__SuperScript-sc-16nflaj-2 site-navstyles__HeaderSuperScript-sc-16nflaj-4 iQOQVe bkrUpS">Up to 70% Off</sup></div>-->
</div>
        
</header>
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>

@section('script')
    <script type="text/javascript">
        
        function show_order_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }
    </script>
@endsection
