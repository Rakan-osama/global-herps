<!-- Choose Section Start -->
<section class="choose-sec bg-shade sec-padding position-relative">
   <img src="{{ asset('client/assets/images/choose-sh.png') }}" alt="shape" class="anim-img left-bottom moveY">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="choose-media position-relative">
               <div class="choose-main-wrap">
                  <img src="{{ asset('client/assets/images/herbs/6.jpg') }}" alt="Egyptian Herbs">
               </div>
               {{-- <div class="abs-img choose-abs-wrap">
                  <img src="{{ asset('client/assets/images/herbs/9.jpg') }}" alt="Herbs Close Up">
               </div> --}}
            </div>
         </div>
         <div class="col-lg-6">
            <div class="choose-content">
               <span class="sub-title fadeInUp">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                     <path fill="#2ea140" d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                  </svg>{{ __('Why Choose Us') }}</span>
               <h2>{{ __('Why Choose Global Herbs') }}</h2>
               <p>{{ __('Global Herbs believes that quality starts in the field and continues through every processing step until the product reaches the buyer. We operate on values of excellence, transparency, and long-term partnership.') }}</p>
               <div class="success-stat">
                  <div class="progress">
                     <div class="meta">{{ __('Essential Oil Retention') }}</div>
                     <div class="progress-bar" data-progress="95%" style="width: 65%;"><span>95%</span></div>
                  </div>
                  <div class="progress">
                     <div class="meta">{{ __('Export Quality Standards') }}</div>
                     <div class="progress-bar" data-progress="100%" style="width: 65%;"><span>100%</span></div>
                  </div>
               </div>
               <div class="d-sm-flex justify-content-between mb-5">
                  <div class="choose-circle d-flex gap-2 align-items-center">
                     <div class="progress-circle-item">
                        <div class="outer"><div class="inner">
                           <div class="number" data-target="95">0%</div>
                        </div></div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px" height="80px">
                           <circle cx="40" cy="40" r="30" class="progress-stroke" />
                        </svg>
                     </div>
                     <h3 class="display-4 m-0">{{ __('Low Stem & Dust') }}</h3>
                  </div>
                  <div class="choose-circle d-flex gap-2 align-items-center">
                     <div class="progress-circle-item">
                        <div class="outer"><div class="inner">
                           <div class="number" data-target="98">0%</div>
                        </div></div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px" height="80px">
                           <circle cx="40" cy="40" r="30" class="progress-stroke" />
                        </svg>
                     </div>
                     <h3 class="display-4 m-0">{{ __('On-Time Delivery') }}</h3>
                  </div>
               </div>
               <h3 class="h5">{{ __('Ready to partner with us? Call Us:') }} <a class="text-primary" href="tel:01012608815">01012608815</a></h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Choose Section End -->
<style>
/* Main image — same width behaviour as img-fluid, fixed height for cover fit */
.choose-main-wrap {
  width: 100%;
  height: 460px;
  border-radius: 16px;
  overflow: hidden;
}
.choose-main-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

/* Overlay image — mirrors the original abs-img position (top:100px right:40px from CSS) */
.choose-abs-wrap {
  width: 200px;
  height: 170px;
  border-radius: 12px;
  overflow: hidden;
  border: 4px solid #fff;
  box-shadow: 0 8px 28px rgba(0,0,0,0.18);
}
.choose-abs-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

@media (max-width: 1199px) {
  .choose-main-wrap { height: 400px; }
  .choose-abs-wrap { width: 170px; height: 145px; }
}
@media (max-width: 991px) {
  .choose-main-wrap { height: 340px; }
  .choose-abs-wrap { width: 150px; height: 125px; }
}
@media (max-width: 767px) {
  .choose-main-wrap { height: 290px; }
  .choose-abs-wrap { width: 130px; height: 108px; top: 60px !important; right: 15px !important; }
}
@media (max-width: 575px) {
  .choose-main-wrap { height: 240px; border-radius: 10px; }
  .choose-abs-wrap { display: none; }
}
</style>
