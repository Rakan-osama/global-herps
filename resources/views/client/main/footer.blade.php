<!-- Footer Start -->
   <footer class="footer bg-cover jarallax" data-jarallax data-speed=".2">
      <img src="{{ asset('client/assets/images/footer-bg.jpg') }}" alt="" class="jarallax-img">
      <div class="parallax-overly"></div>
      <div class="container">
         {{-- <div class="d-md-flex justify-content-between align-items-center footer-top">
            <div class="subs-head">
               <h2 class="display-4 text-white sec-title">{{ __('Subscribe Our Newsletter') }}</h2>
            </div>
            <div class="subs-widget fadeInUp">
               <form action="#" class="position-relative">
                  <input type="email" placeholder="{{ __('Your Email') }}">
                  <button class="btn btn-primary rounded-5">{{ __('Subscribe') }} <img src="{{ asset('client/assets/images/icons/paper-plane.png') }}" alt="">
                     <span></span>
                  </button>
               </form>
            </div>
         </div> --}}
         <div class="row footer-widgets">
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
               <div class="footer-widget about-footer">
                  <div class="f-logo">
                     <a href="{{ route('client.homepage') }}">
                        @if(!empty($site['settings']['company_logo']))
                           <img src="{{ asset('storage/' . $site['settings']['company_logo']) }}" alt="Logo" style="height:100px;">
                        @else
                           <img src="{{ asset('client/assets/images/green-logo1.jpeg') }}" alt="Logo" style="height:100px;">
                        @endif
                     </a>
                  </div>
                  <p>{{ __('Global Herbs is an Egyptian company specialized in growing, processing and exporting premium mint, herbs, spices and seeds to international markets with consistent quality and reliable service.') }}</p>
                  <div class="social-share">
                     @foreach($site['social_links'] ?? [] as $social)
                        <a href="{{ $social['url'] }}" target="_blank"><i class="{{ $social['icon'] }}"></i></a>
                     @endforeach
                  </div>

               </div>
            </div>
            <div class="col-lg-2 col-sm-4 offset-sm-1 offset-lg-0">
               <div class="footer-widget">
                  <h3 class="widget-title">{{ __('Quick Links') }}</h3>
                  <ul>
                     @foreach($site['footer_quick_links'] ?? [] as $fLink)
                        <li><a href="{{ $fLink['url'] }}">{{ __($fLink['label']) }}</a></li>
                     @endforeach
                  </ul>
               </div>
            </div>

            <div class="col-lg-3 ps-lg-5 col-sm-6">
               <div class="footer-widget">
                  <h3 class="widget-title">{{ __('Our Products') }}</h3>
                  <ul>
                     @foreach($site['footer_product_links'] ?? [] as $pLink)
                        <li><a href="{{ $pLink['url'] }}">{{ __($pLink['label']) }}</a></li>
                     @endforeach
                  </ul>
               </div>
            </div>

            <div class="col-lg-3 col-sm-4 offset-sm-1 offset-lg-0">
               <div class="footer-widget contact-widget">
                  <h3 class="widget-title">{{ __('Contact Info') }}</h3>
                  <ul class="contact-info-list list-unstyled">
                     @if(!empty($site['settings']['phone']))
                        <li class="mb-2">
                           <i class="fa fa-phone me-2 text-primary"></i>
                           <a href="tel:{{ $site['settings']['phone'] }}">{{ $site['settings']['phone'] }}</a>
                        </li>
                     @endif
                     @if(!empty($site['settings']['phone_2']))
                        <li class="mb-2">
                           <i class="fa fa-phone me-2 text-primary"></i>
                           <a href="tel:{{ $site['settings']['phone_2'] }}">{{ $site['settings']['phone_2'] }}</a>
                        </li>
                     @endif
                     @if(!empty($site['whatsapp_link']))
                        <li class="mb-2">
                           <i class="fab fa-whatsapp me-2 text-success"></i>
                           <a href="{{ $site['whatsapp_link'] }}" target="_blank">{{ $site['settings']['whatsapp'] ?? '' }}</a>
                        </li>
                     @endif
                     @if(!empty($site['settings']['email_primary']))
                        <li class="mb-2">
                           <i class="fa fa-envelope me-2 text-primary"></i>
                           <a href="mailto:{{ $site['settings']['email_primary'] }}">{{ $site['settings']['email_primary'] }}</a>
                        </li>
                     @endif
                     @if(!empty($site['settings']['address']))
                        <li class="mb-2">
                           <i class="fa fa-map-marker-alt me-2 text-primary"></i>
                           @if(!empty($site['settings']['google_maps_link']))
                              <a href="{{ $site['settings']['google_maps_link'] }}" target="_blank">{{ $site['settings']['address'] }}</a>
                           @else
                              <span>{{ $site['settings']['address'] }}</span>
                           @endif
                        </li>
                     @endif
                  </ul>
                  <a href="{{ route('client.contact') }}" class="btn btn-info btn-xs mt-4">{{ __('Contact Us') }} <span></span></a>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
               <p class="text-info copy-right mb-0 order-2 order-md-1">
                  {{ __('Copyright') }} &copy; {{ date('Y') }} {{ $site['settings']['company_name'] ?? _('Green Harvest') }} {{ __('All Rights Reserved.') }}</p>
               <nav class="footer-nav order-1 order-md-2">
                  <ul>
                     {{-- <li><a href="#">{{ __('Privacy Policy') }}</a></li>
                     <li><a href="#">{{ __('Terms & Conditions') }}</a></li> --}}
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer End -->

   <!-- Scroll Top -->
   <div class="scroll-top">
      <svg class="progress-circle svg-content" height="100%" viewBox="-1 -1 102 102" width="100%">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" fill="none" stroke="black" stroke-width="2">
         </path>
      </svg>
   </div>

