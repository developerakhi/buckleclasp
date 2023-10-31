
<footer>
    <div data-testid="site-footer" class="site-footerstyled__FooterWrapper-sc-1aafh61-0 hgeXbm">
        <form  method="POST" action="{{ route('subscribers.store') }}" id="search-form">
        @csrf
        <!--<h2 class="newsletterstyled__NewsletterTitle-sc-16skaf8-1 kGXRXD" style="margin-bottom:35px;">Sign Up To Our Newsletter</h2>-->
            <div id="newsletter" class="newsletterstyled__NewsletterWrapper-sc-16skaf8-0 bXcFvk">
                <h2 class="newsletterstyled__NewsletterTitle-sc-16skaf8-1 kGXRXD" style="margin-bottom:35px;">Sign Up To Our Newsletter</h2>
                <div class="row">
                    
                    <div class="col-2"></div>
                    
                    <div class="col-4">
                        <div label="Enter email address here" class="inputsstyled__MainInputContainer-sc-1p6lpqu-9 cOiHBz">
                            <div class="inputsstyled__InputWrapper-sc-1p6lpqu-7 jwHvKr">
                                <input type="email" name="email" required placeholder="{{ translate('Enter Email Address') }}" aria-label="Enter email address here" class="form-control inputsstyled__Input-sc-1p6lpqu-1 dSgrkm" value="">
                                <span class="inputsstyled__IconWrapper-sc-1p6lpqu-2 fzxKFX"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="radio" class="btn-check submit" name="gender" id="btn-check-1" value="women">
                        <label class="btn btn-primary col-2" for="btn-check-1" style="padding: 10px 22px; background-color: #1d3c34;color: #fff;">Women</label>
                        <input type="radio" class="btn-check submit" name="gender" id="btn-check-2" value="men">
                        <label class="btn btn-primary col-2" for="btn-check-2" style="padding: 10px 22px; background-color: #1d3c34;color: #fff;">Men</label>
                        <!--<input data-id="1" type="radio" id="btn-check" value="Women" name="gender" class="btn-check col-2 edit" style="" autocomplete="off" checked>-->
                        <!--<input data-id="2" type="radio" value="Men" class="col-2 btn-woman btn-info-woman edit" style="padding: 8px 22px; background-color: #1d3c34;color: #fff;">-->
                    </div>
                    <button hidden type="submit" class="btn btn-sm btn-warning mail-subscribe-btn">
                        {{ translate('Subscribe') }}
                    </button>
                    <!--<div class="text-block newsletterstyled__PrivacyAndInfoLabel-sc-16skaf8-3 ggjmzN" style="padding-top: 55px; color:#4a4a4a;">For more information (including how to unsubscribe) please see our <a href="">Help &amp; FAQs</a> and our <a href="{{ route('privacypolicy') }}">Privacy Policy</a>.</div>-->
                    <div class="col-2"></div>
                </div>
            </div>
        </form>
        <!--<div id="newsletter" class="newsletterstyled__NewsletterWrapper-sc-16skaf8-0 bXcFvk">-->
        <!--    <h2 class="newsletterstyled__NewsletterTitle-sc-16skaf8-1 kGXRXD">Sign Up To Our Newsletter</h2>-->
        <!--    <form class="newsletterstyled__NewsletterFormWrapper-sc-16skaf8-2 fmGZFk">-->
        <!--        <div label="Enter email address here" class="inputsstyled__MainInputContainer-sc-1p6lpqu-9 cOiHBz">-->
        <!--            <div class="inputsstyled__InputWrapper-sc-1p6lpqu-7 jwHvKr">-->
        <!--                <input id="newsletterInput" name="Enter email address here" placeholder="Enter email address here" type="text" aria-label="Enter email address here" class="inputsstyled__Input-sc-1p6lpqu-1 dSgrkm" value="">-->
        <!--                <span class="inputsstyled__IconWrapper-sc-1p6lpqu-2 fzxKFX"></span>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <button value="women" class="buttons__PrimaryButton-sc-1j264oz-0 hYyuOk">Women</button>-->
        <!--        <button value="men" class="buttons__PrimaryButton-sc-1j264oz-0 hYyuOk">Men</button>-->
        <!--    </form>-->
        <!--    <div class="text-block newsletterstyled__PrivacyAndInfoLabel-sc-16skaf8-3 ggjmzN">For more information (including how to unsubscribe) please see our <a href="/row/uk/info/help-and-faqs">Help &amp; FAQs</a> and our <a href="/row/uk/info/cookies-and-other-policies?openTab=privacy-policy">Privacy Policy</a>.</div>-->
        <!--</div>-->
            
            <div class="wrap text-center" style="margin: 60px 0;">
                <ul class="list-inline">
                    <li class="list-inline-item"><a title="Customer Services" data-testid="footer-primary-link-0" href="https://buckleclasp.com/customer-services" class="common hover-underline-animation">Customer Services</a></li>
                    <li class="list-inline-item"><a title="About Ted" data-testid="footer-primary-link-1" href="https://buckleclasp.com/about-ted" class="common hover-underline-animation">About Ted</a></li>
                    <li class="list-inline-item"><a title="Delivery &amp; Returns" data-testid="footer-primary-link-2" href="{{ route('returnpolicy') }}" class="common hover-underline-animation">Delivery &amp; Returns</a></li>
                    <li class="list-inline-item"><a title="Help &amp; FAQs" data-testid="footer-primary-link-3" href="https://buckleclasp.com/help-fAQs" class="common hover-underline-animation">Help &amp; FAQs</a></li>
                    <li class="list-inline-item"><a title="Contact Us" data-testid="footer-primary-link-4" href="https://buckleclasp.com/contact-us" class="common hover-underline-animation">{{translate('Contact Us')}}</a></li>
                    <li class="list-inline-item"><a title="Find a Store" data-testid="footer-primary-link-5" href="https://buckleclasp.com/find-store" class="common hover-underline-animation">Find a Store</a></li>
                </ul>
            </div>
        <!--<div class="row">-->
        <!--    <div data-testid="primary-links-container" class="primary-linksstyled__PrimaryLinksContainer-sc-1wq1ipw-0 hWjFxG">-->
        <!--        <div data-testid="primary-links-list" class="primary-linksstyled__PrimaryLinksList-sc-1wq1ipw-1 fNaEYm">-->
        <!--            <a title="Customer Services" data-testid="footer-primary-link-0" href="/row/info" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">Customer Services</a>-->
        <!--            <a title="About Ted" data-testid="footer-primary-link-1" href="/row/info/about-ted" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">About Ted</a>-->
        <!--            <a title="Delivery &amp; Returns" data-testid="footer-primary-link-2" href="/row/info/delivery-and-returns" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">Delivery &amp; Returns</a>-->
        <!--            <a title="Help &amp; FAQs" data-testid="footer-primary-link-3" href="/row/info/help-and-faqs" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">Help &amp; FAQs</a>-->
        <!--            <a title="Contact Us" data-testid="footer-primary-link-4" href="/row/info/contact-us" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">Contact Us</a>-->
        <!--            <a title="Find a Store" data-testid="footer-primary-link-5" href="/row/stores" class="primary-linksstyled__PrimaryLink-sc-1wq1ipw-2 kyNEjG">Find a Store</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="" style="margin-bottom: 60px;">
            <ul data-testid="social-links-container" class="social-links-panelstyled__SocialLinksContainer-otmlh4-0 lhaHil">
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a target="_blank" title="Instagram" rel="noreferrer" data-testid="social-link" href="https://www.instagram.com/buckleclasp" class="social-links-panelstyled__SocialLink-otmlh4-2 jtXZuX">
                        <img src="https://media.tedbaker.com/content/design_system/icons/social/tedbaker_icon_Instagram.svg" alt="Instagram" data-testid="social-icon" class="social-links-panelstyled__SocialIcon-otmlh4-3 rBHhF">
                    </a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a target="_blank" title="Facebook" rel="noreferrer" data-testid="social-link" href="https://www.facebook.com/buckleclasp" class="social-links-panelstyled__SocialLink-otmlh4-2 jtXZuX">
                        <img src="https://media.tedbaker.com/content/design_system/icons/social/tedbaker_icon_Facebook.svg" alt="Facebook" data-testid="social-icon" class="social-links-panelstyled__SocialIcon-otmlh4-3 rBHhF">
                    </a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a target="_blank" title="Twitter" rel="noreferrer" data-testid="social-link" href="http://twitter.com/BuckleClasp" class="social-links-panelstyled__SocialLink-otmlh4-2 jtXZuX">
                        <img src="https://media.tedbaker.com/content/design_system/icons/social/tedbaker_icon_Twitter.svg" alt="Twitter" data-testid="social-icon" class="social-links-panelstyled__SocialIcon-otmlh4-3 rBHhF">
                    </a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a target="_blank" title="Pinterest" rel="noreferrer" data-testid="social-link" href="https://www.pinterest.com/buckleclasp" class="social-links-panelstyled__SocialLink-otmlh4-2 jtXZuX">
                        <img src="https://media.tedbaker.com/content/design_system/icons/social/tedbaker_icon_Pinterest.svg" alt="Pinterest" data-testid="social-icon" class="social-links-panelstyled__SocialIcon-otmlh4-3 rBHhF">
                    </a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a target="_blank" title="Youtube" rel="noreferrer" data-testid="social-link" href="https://www.youtube.com/@buckleclasp" class="social-links-panelstyled__SocialLink-otmlh4-2 jtXZuX">
                        <img src="https://media.tedbaker.com/content/design_system/icons/social/tedbaker_icon_Youtube.svg" alt="Youtube" data-testid="social-icon" class="social-links-panelstyled__SocialIcon-otmlh4-3 rBHhF">
                    </a>
                </li>
            </ul>
        </div>
        <div data-testid="footer-divider-1" class="divider__Divider-sc-1a0oct0-0 gipmdS"></div>
        
        <div class="" style="margin: 45px 0;">
            <ul data-testid="social-links-container" class="social-links-panelstyled__SocialLinksContainer-otmlh4-0 lhaHil">
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a title="Terms of Use &amp; Policies" data-testid="footer-link-0" href="https://buckleclasp.com/terms-o-use-policies" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Terms of Use &amp; Policies</a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a title="Offer Terms &amp; Conditions" data-testid="footer-link-1" href="https://buckleclasp.com/terms" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Offer Terms &amp; Conditions</a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a title="Working with Ted" data-testid="footer-link-2" href="https://buckleclasp.com/working-with-ted" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Working with Ted</a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a title="Responsibility" data-testid="footer-link-3" href="https://buckleclasp.com/responsibility" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Responsibility</a>
                </li>
                <li class="social-links-panelstyled__SocialLinkWrapper-otmlh4-1 gGEYQG">
                    <a title="Careers" data-testid="footer-link-4" href="https://buckleclasp.com/careers" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Careers</a>
                </li>
            </ul>
        </div>
        
        
        <!--<div class="">-->
        <!--    <div data-testid="secondary-links-container" class="secondary-linksstyled__SecondaryLinksContainer-sc-16uy2s5-0 cdEvOI">-->
        <!--        <div data-testid="secondary-links-list" class="secondary-linksstyled__SecondaryLinksList-sc-16uy2s5-1 gVbfKJ">-->
        <!--            <a title="Terms of Use &amp; Policies" data-testid="footer-link-0" href="/row/info/cookies-and-other-policies" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Terms of Use &amp; Policies</a>-->
        <!--            <a title="Offer Terms &amp; Conditions" data-testid="footer-link-1" href="/row/info/terms-and-conditions" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Offer Terms &amp; Conditions</a>-->
        <!--            <a title="Working with Ted" data-testid="footer-link-2" href="/row/info/working-with-ted" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Working with Ted</a>-->
        <!--            <a title="Responsibility" data-testid="footer-link-3" href="https://www.tedbaker.com/row/info/corporate-social-responsibility" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Responsibility</a>-->
        <!--            <a title="Careers" data-testid="footer-link-4" href="/row/info/careers" class="secondary-linksstyled__SecondaryLink-sc-16uy2s5-2 jmHuGf">Careers</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        <div data-testid="copyright-container" class="copyright-labelstyled__CopyrightContainer-sc-171ea4g-0 exSxPo">
            <p data-testid="copyright-txt" class="copyright-labelstyled__CopyrightText-sc-171ea4g-1 bdddwA">No Ordinary Designer Sarkar It © 2023</p>
        </div>
        <div data-testid="footer-divider-2" class="divider__Divider-sc-1a0oct0-0 gipmdS"></div>
        <div class="">
            <div data-testid="payment-panel-container" class="payment-methodsstyled__PaymentPanelContainer-sc-1egzpp9-0 bLkJCJ">
                <!--<div class="">-->
                    <label data-testid="payment-panel-label" class="typography__BoldLabel-sc-1qd984r-14 bCDozb">Payment Methods</label>
                <!--</div>-->
                <!--<div class="">-->
                    <ul class="payment-methodsstyled__PaymentIcons-sc-1egzpp9-1 khzTjb">
                        <li class="payment-methodsstyled__PaymentIcon-sc-1egzpp9-2 jKpSGn">
                            <img src="https://buckleclasp.com/public/uploads/all/LMzztoVjQshMPR15A4VY0zCm9H9RvSwNn2O2uyB4.svg" alt="Visa" data-testid="payment-panel-icon" class="payment-methodsstyled__Icon-sc-1egzpp9-3 eZbcww">
                        </li>
                        <li class="payment-methodsstyled__PaymentIcon-sc-1egzpp9-2 jKpSGn">
                            <img src="https://buckleclasp.com/public/uploads/all/MPlBuqTiHvP1bWSOdL1Q9p0pT2lELMIJCkelpfLX.svg" alt="Mastercard" data-testid="payment-panel-icon" class="payment-methodsstyled__Icon-sc-1egzpp9-3 eZbcww">
                        </li>
                        <li class="payment-methodsstyled__PaymentIcon-sc-1egzpp9-2 jKpSGn">
                            <img src="https://buckleclasp.com/public/uploads/all/raqEGOLz0iPnLjuKQZsre7vxWReLt6AWhmhFhC6w.svg" alt="American Express" data-testid="payment-panel-icon" class="payment-methodsstyled__Icon-sc-1egzpp9-3 eZbcww">
                        </li>
                        <li class="payment-methodsstyled__PaymentIcon-sc-1egzpp9-2 jKpSGn">
                            <img src="https://buckleclasp.com/public/uploads/all/LP9AMXa08g3fQ2xEEPfBrCVcmUM0F0NKCfCrAcAH.svg" alt="JCB" data-testid="payment-panel-icon" class="payment-methodsstyled__Icon-sc-1egzpp9-3 eZbcww">
                        </li>
                        <li class="payment-methodsstyled__PaymentIcon-sc-1egzpp9-2 jKpSGn">
                            <img src="https://buckleclasp.com/public/uploads/all/qkwL2pKmxWW24ldMKFIyZZNxUIUrKCZpPnnY8PkG.svg" alt="PayPal" data-testid="payment-panel-icon" class="payment-methodsstyled__Icon-sc-1egzpp9-3 eZbcww">
                        </li>
                    </ul>
                <!--</div>-->
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; " style="background-color: #f5f5f5;">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 fw-600')}}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 fw-600')}}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if(auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'],'opacity-100 fw-600')}}">
                    {{ translate('Cart') }}
                    @php
                        $count = (isset($cart) && count($cart)) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{$count}}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 text-primary')}}"></i>
                    @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right" style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 fw-600')}}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
        @if (Auth::check())
            @if(isAdmin())
                <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @else
                <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                    <span class="d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        @else
            <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
            </a>
        @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $('body').on('click','.submit', function(){
    $('#search-form').submit();

  });
</script>