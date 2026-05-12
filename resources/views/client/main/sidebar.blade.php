<section class="slider-section position-relative">
      <img src="{{ asset('client/assets/images/slide-sh1.png') }}" alt="" class="abs-img top-0" aria-hidden="true">
      <img src="{{ asset('client/assets/images/tranck-v.png') }}" alt="Truck delivery illustration" class="anim-img moveXS bottom-0">

      <div class="container-fluid p-0">
         <div class="row g-0 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
               <div class="hero-content position-relative">
                  <div class="trust-badge">
                     <img class="abs-img" src="{{ asset('client/assets/images/text-rotate.png') }}" alt="" aria-hidden="true">
                     <div class="icon rounded-circle">
                        <img src="{{ asset('client/assets/images/icons/boomark.png') }}" alt="Bookmark icon">
                     </div>
                  </div>
                  <p class="sub-title h4">{{ _('Global Import & Export') }}</p>
                  <h1 class="text-info fw-bold">{{ _('Your Gateway to International Trade') }}</h1>

                  <div class="slide-meta">
                     <p class="h6 text-info">{{ _('Connecting businesses worldwide with seamless import and export solutions for sustainable growth.') }}</p>
                     <a href="{{ route('client.contact') }}" class="btn btn-primary">{{ _("Let's Get Started") }} <i class="fa fa-arrow-right"
                           aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
               <div class="hero-slider-wrap overflow-hidden position-relative">
                  <div class="hero-slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="slide-img">
                              <img src="{{ asset('client/assets/images/slide-m1.jpg') }}" alt=" warehouse management">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="slide-img">
                              <img src="{{ asset('client/assets/images/slide-m2.jpg') }}" alt="Global shipping transport">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="stat-card bg-white d-none d-sm-flex align-items-center">
                     <div class="customer-imgs d-flex">
                        <img src="{{ asset('client/assets/images/cl1.png') }}" alt="Client logo">
                        <img src="{{ asset('client/assets/images/cl2.png') }}" alt="Client logo">
                        <img src="{{ asset('client/assets/images/cl3.png') }}" alt="Client logo">
                        <img src="{{ asset('client/assets/images/cl4.png') }}" alt="Client logo">
                     </div>
                     <div class="stat-info">
                        <span class="display-5 purecounter text-primary" data-purecounter-end="2800000"
                           data-purecounter-currency=" "></span>
                        <h2 class="h5">{{ _('Shipments Delivered') }}</h2>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12">
               <div class="custom-nav">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
   </section>   
