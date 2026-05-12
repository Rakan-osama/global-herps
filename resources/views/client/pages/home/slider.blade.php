<!-- Slider Section Start -->
<section class="slider-sec2 position-relative">
   <a href="{{ route('client.products') }}" class="slide-cta">{{ _('Discover Our Products') }}</a>
   <div class="hero-slider2 swiper">
      <div class="swiper-wrapper">

         <!-- Slide 1 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/2148923173.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ _('Premium Egyptian Exports') }}</span>
                  <h1 class="display-1 fw-bold">{{ _('Herbs, Spices & Seeds') }}</h1>
                  <p>{{ _('An Egyptian company dedicated to herbs, spices and seeds — grown under our sun, processed with modern technology, and shipped to partners who expect consistent export quality.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.contact') }}" class="btn btn-hover btn-primary">{{ _('Get a Quote') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.products') }}" class="btn btn-outline">{{ _('Our Products') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
               <img src="{{ asset('client/assets/images/slide-anim_green.png') }}" class="abs-img start-0 bottom-0 d-none d-sm-block" alt="">
            </div>
         </div>

         <!-- Slide 2 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/2148923181.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ _('Signature Egyptian Mint') }}</span>
                  <h1 class="display-1">{{ _('Pure Power. Clean Character.') }}</h1>
                  <p>{{ _('Deep green leaves, high oil content and a sharp, clean aroma — field-selected mint prepared for demanding buyers in tea, herbal infusions and premium spice brands.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.contact') }}" class="btn btn-hover btn-primary">{{ _('Request Sample') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.about') }}" class="btn btn-outline">{{ _('About Us') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
               <img src="{{ asset('client/assets/images/slide-anim_green.png') }}" class="abs-img start-0 bottom-0 d-none d-sm-block" alt="">
            </div>
         </div>

         <!-- Slide 3 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/2148327823.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ _('Long-Term Export Partners') }}</span>
                  <h1 class="display-1">{{ _('Consistent Quality. Reliable Supply.') }}</h1>
                  <p>{{ _('Working as a long-term partner for importers, tea packers and spice brands worldwide. Combining traditional agricultural know-how with controlled drying, cleaning and sorting.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.services') }}" class="btn btn-hover btn-primary">{{ _('Our Services') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.contact') }}" class="btn btn-outline">{{ _('Contact Us') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
               <img src="{{ asset('client/assets/images/slide-anim_green.png') }}" class="abs-img start-0 bottom-0 d-none d-sm-block" alt="">
            </div>
         </div>

      </div>
   </div>
   <div class="custom-nav">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- Slider Section End -->
