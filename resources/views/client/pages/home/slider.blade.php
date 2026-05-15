<!-- Slider Section Start -->
<section class="slider-sec2 position-relative">
   <a href="{{ route('client.products') }}" class="slide-cta">{{ __('Discover Our Products') }}</a>
   <div class="hero-slider2 swiper">
      <div class="swiper-wrapper">

         <!-- Slide 1 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/herbs/1.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ __('Premium Egyptian Exports') }}</span>
                  <h1 class="display-1 fw-bold">{{ __('Herbs, Spices & Seeds') }}</h1>
                  <p>{{ __('An Egyptian company dedicated to herbs, spices and seeds grown under our sun, processed with modern technology, and shipped to partners who expect consistent export quality.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.contact') }}" class="btn btn-hover btn-primary">{{ __('Get a Quote') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.products') }}" class="btn btn-outline">{{ __('Our Products') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
            </div>
         </div>

         <!-- Slide 2 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/herbs/2.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ __('Signature Egyptian Mint') }}</span>
                  <h1 class="display-1">{{ __('Pure Power. Clean Character.') }}</h1>
                  <p>{{ __('Deep green leaves, high oil content and a sharp, clean aroma field-selected mint prepared for demanding buyers in tea, herbal infusions and premium spice brands.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.contact') }}" class="btn btn-hover btn-primary">{{ __('Request Sample') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.about') }}" class="btn btn-outline">{{ __('About Us') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
              
            </div>
         </div>

         <!-- Slide 3 -->
         <div class="swiper-slide">
            <div class="slide-item position-relative">
               <div class="item-bg" style="background-image: url('{{ asset('client/assets/images/herbs/3.jpg') }}');"></div>
               <div class="slide-content">
                  <div class="parallax-txt"></div>
                  <span class="sub-title h5">{{ __('Long-Term Export Partners') }}</span>
                  <h1 class="display-1">{{ __('Consistent Quality , Reliable Supply.') }}</h1>
                  <p>{{ __('Working as a long-term partner for importers, tea packers and spice brands worldwide. Combining traditional agricultural know-how with controlled drying, cleaning and sorting.') }}</p>
                  <div class="d-sm-flex slide-cta gap-4">
                     <a href="{{ route('client.services') }}" class="btn btn-hover btn-primary">{{ __('Our Services') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <a href="{{ route('client.contact') }}" class="btn btn-outline">{{ __('Contact Us') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  </div>
               </div>
               
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

