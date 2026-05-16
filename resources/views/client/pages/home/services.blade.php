<!-- Products Section Start -->
<section class="services-sec overflow-hidden position-relative bg-shade sec-padding">
  <div class="container position-relative">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div class="sec-intro">
        <span class="sub-title fadeInUp">{{ __('Our Products') }}</span>
        <h2>{{ __('Premium Egyptian Herbs, Spices & Seeds') }}</h2>
      </div>
      <div class="header-slider-nav fadeInUp">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>

  <div class="container ct-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="services-carousel swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ __('Egyptian Mint') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/herbs_images/spearmint.webp') }}" alt="">
                </div>
                <p>{{ __('Deep green leaves, high oil content and a sharp, clean aroma. Field-selected mint from prime Egyptian regions, gently dried to preserve maximum essential oils.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ __('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv2_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ __('Chamomile') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/herbs_images/chamomile.webp') }}" alt="">
                </div>
                <p>{{ __('Premium Egyptian chamomile flowers with high volatile oil content, bright colour and characteristic aroma. Meets strict requirements of herbal tea and pharmaceutical markets.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ __('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv3_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ __('Anise Seeds') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/seeds/anise_seeds.webp') }}" alt="">
                </div>
                <p>{{ __('Egyptian anise seeds with rich aroma and high anethole content. Carefully cleaned, sorted and dried to export-grade specifications for spice blenders and food manufacturers worldwide.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ __('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv4_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ __('Fenugreek') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/seeds/fenugreek.webp') }}" alt="">
                </div>
                <p>{{ __('High-quality Egyptian fenugreek seeds with consistent size, colour and low impurity levels. Trusted by spice brands, health supplement producers and food manufacturers.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ __('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ __('Coriander') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/seeds/coriander.webp') }}" alt="">
                </div>
                <p>{{ __('Egyptian coriander seeds prized for their balanced lemon-spice aroma and high oil yield. Supplied whole or split to spice blenders and food manufacturers year-round.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ __('View Details') }}
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Products Section End -->
<style>
/* Ensure the card mask scales to fit the card at any size */
.service-card {
  display: flex;
  flex-direction: column;
  height: 100%;
  mask-size: 100% 100% !important;
}

/* Remove the irregular shape mask from the thumb — use clean rounded corners */
.service-card .service-thumb {
  width: 100%;
  height: 220px;
  overflow: hidden;
  border-radius: 12px;
  flex-shrink: 0;
  margin: 20px 0 !important;
  mask-image: none !important;
}

.service-card .service-thumb img {
  width: 100%;
  height: 100%;
  display: block;
  object-fit: cover;
  object-position: center;
  transition: transform 0.5s ease;
}

.service-card:hover .service-thumb img {
  transform: scale(1.06);
}

/* Let description grow so footer stays pinned at the bottom */
.service-card p {
  flex-grow: 1;
  font-size: 14px;
  line-height: 1.6;
}

@media (max-width: 1199px) {
  .service-card .service-thumb { height: 200px; }
}
@media (max-width: 991px) {
  .service-card .service-thumb { height: 190px; }
  .service-card { padding: 22px !important; }
}
@media (max-width: 575px) {
  .service-card .service-thumb { height: 200px; }
  .service-card { padding: 18px !important; }
  .service-card .service-head h3 { font-size: 1.2rem !important; }
  .service-card p { font-size: 13px; }
}
</style>

