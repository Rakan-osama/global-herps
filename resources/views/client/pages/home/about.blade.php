<section class="about-section position-relative sec-padding">
   <img src="{{ asset('client/assets/images/about-sh.png') }}" alt="shape" class="anim-img moveY">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-media position-relative">
               <div class="about-m1">
                  <img class="round img-fluid" src="{{ asset('client/assets/images/herbs/1.jpg') }}" alt="" style="width: 460px; height: 370px; object-fit: cover;">
                  <div class="ab-stat bg-primary round">
                     <span class="display-1 purecounter" data-purecounter-end="10" data-purecounter-decimals="0">10</span><span class="unit">+</span>
                     <p>{{ __('Years of Experience') }}</p>
                  </div>
               </div>
               <div class="about-m2">
                  <div class="ab-stat2 bg-dark text-info round">
                     <span class="display-1 purecounter" data-purecounter-end="50" data-purecounter-decimals="0">50</span><span class="unit">+</span>
                     <p>{{ __('Export Markets') }}</p>
                  </div>
                  <img class="img-fluid" src="{{ asset('client/assets/images/herbs/2.jpg') }}" alt="" style="width: 250px; height: 370px; object-fit: cover;">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-content">
               <span class="sub-title fadeInUp">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                     <path fill="#2ea140" d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929" />
                  </svg>
                  {{ __('Who We Are') }}</span>
               <h2>{{ __('Global Herbs Egyptian Herbs, Spices & Seeds') }}</h2>
               <p>{{ __('Global Herbs is an Egyptian company specialized in growing, processing and exporting premium mint, herbs, spices and seeds to international markets with consistent quality and reliable service. We combine traditional agricultural know-how with controlled drying, cleaning and sorting.') }}</p>
               <div class="d-sm-flex gap-4 about-feat border-bottom">
                  <div class="ab-item d-flex align-items-center gap-3">
                     <img src="{{ asset('client/assets/images/ab-icon1_green.png') }}" alt="">
                     <h3 class="display-4">{{ __('Quality Control') }}</h3>
                  </div>
                  <div class="ab-item d-flex align-items-center gap-3">
                     <img src="{{ asset('client/assets/images/ab-icon2_green.png') }}" alt="">
                     <h3 class="display-4">{{ __('Premium Herbs') }}</h3>
                  </div>
               </div>
               <ul class="check">
                  <li>{{ __('Focused on natural herbs, spices and seeds from selected Egyptian farms') }}</li>
                  <li>{{ __('Controlled drying, cleaning and sorting for export-grade quality') }}</li>
                  <li>{{ __('Long-term partner for importers, tea packers and spice brands worldwide') }}</li>
               </ul>
               <div class="d-sm-flex align-items-center about-footer gap-5 mt-5">
                  <a href="{{ route('client.about') }}" class="btn btn-primary">{{ __('Learn More') }} <i class="fa fa-arrow-right"></i><span></span></a>
                  <div class="quick-call d-flex align-items-center">
                     <span class="bg-dark icon-lg rounded-circle text-info"><i class="fa-solid fa-phone-volume"></i></span>
                     <div class="conn-txt ms-3">
                        <p class="m-0">{{ __('Call Us Any Time:') }}</p>
                        <a class="h6 text-primary" href="tel:01012608815">01012608815</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

