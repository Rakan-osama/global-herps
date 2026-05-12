<!-- Products Section Start -->
<section class="services-sec overflow-hidden position-relative bg-shade sec-padding">
  <div class="container position-relative">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div class="sec-intro">
        <span class="sub-title fadeInUp">{{ _('Our Products') }}</span>
        <h2>{{ _('Premium Egyptian Herbs, Spices & Seeds') }}</h2>
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
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ _('Egyptian Mint') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/2148923173.jpg') }}" alt="">
                </div>
                <p>{{ _('Deep green leaves, high oil content and a sharp, clean aroma. Field-selected mint from prime Egyptian regions, gently dried to preserve maximum essential oils.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv2_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ _('Chamomile') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/2148327823.jpg') }}" alt="">
                </div>
                <p>{{ _('Premium Egyptian chamomile flowers with high volatile oil content, bright colour and characteristic aroma. Meets strict requirements of herbal tea and pharmaceutical markets.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv3_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ _('Anise Seeds') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/2148923181.jpg') }}" alt="">
                </div>
                <p>{{ _('Egyptian anise seeds with rich aroma and high anethole content. Carefully cleaned, sorted and dried to export-grade specifications for spice blenders and food manufacturers worldwide.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv4_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ _('Fenugreek') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/19103.jpg') }}" alt="">
                </div>
                <p>{{ _('High-quality Egyptian fenugreek seeds with consistent size, colour and low impurity levels. Trusted by spice brands, health supplement producers and food manufacturers.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('View Details') }}
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card bg-white round">
                <div class="service-head d-flex gap-3 align-items-center">
                  <img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt="Icon">
                  <h3 class="display-4 m-0"><a href="{{ route('client.products') }}">{{ _('Coriander') }}</a></h3>
                </div>
                <div class="service-thumb">
                  <img class="img-fluid" src="{{ asset('client/assets/images/19315.jpg') }}" alt="">
                </div>
                <p>{{ _('Egyptian coriander seeds prized for their balanced lemon-spice aroma and high oil yield. Supplied whole or split to spice blenders and food manufacturers year-round.') }}</p>
                <div class="service-footer border-top">
                  <a class="custom-btn" href="{{ route('client.products') }}">
                    <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('View Details') }}
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
.service-card .service-thumb { width: 100%; height: 170px; overflow: hidden; }
.service-card .service-thumb img { width: 100%; height: 100%; display: block; object-fit: cover; object-position: center; }
@media (max-width: 575px) { .service-card .service-thumb { height: 160px; } }
</style>
