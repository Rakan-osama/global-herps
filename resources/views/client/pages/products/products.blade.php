<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.toast')
    @include('client.main.header')

    <main>

   <!-- Hero Section Start -->
   <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
      <img src="{{ asset('client/assets/images/2148923173.jpg') }}" alt="" class="jarallax-img img-fluid">
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ _('Our Products') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.homepage') }}">{{ _('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ _('Products') }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Products Intro Start -->
   <section class="sec-padding">
      <div class="container">
         <div class="sec-intro mx-auto text-center mb-5">
            <span class="sub-title2 fadeInUp">{{ _('Premium Egyptian Herbs') }}</span>
            <h2>{{ _('Natural Herbs, Spices & Seeds from Egypt') }}</h2>
            <p class="col-lg-8 mx-auto">{{ _('Global Herbs sources its products from selected Egyptian farms, combining traditional agricultural know-how with controlled drying, cleaning and sorting to deliver consistent export-grade quality.') }}</p>
         </div>

         <div class="row gy-5">

            <!-- Egyptian Mint -->
            <div class="col-lg-4 col-md-6">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148923173.jpg') }}'); background-size: cover; background-position: center; height: 220px;">
                     <span class="icon round-2">
                        <img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt="">
                     </span>
                  </div>
                  <h3 class="display-4">{{ _('Egyptian Mint') }}</h3>
                  <p>{{ _('Deep green leaves, high oil content and a sharp, clean aroma. Field-selected mint from prime Egyptian regions, gently dried to preserve maximum essential oils. Designed for premium tea, herbal infusions and high-end seasoning brands.') }}</p>
                  <ul class="check mt-3">
                     <li>{{ _('High Oil Content') }}</li>
                     <li>{{ _('Deep Leaf Color') }}</li>
                     <li>{{ _('Low Stem & Dust') }}</li>
                  </ul>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('Request a Quote') }}
                     </a>
                  </div>
               </div>
            </div>

            <!-- Chamomile -->
            <div class="col-lg-4 col-md-6">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".4">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148327823.jpg') }}'); background-size: cover; background-position: center; height: 220px;">
                     <span class="icon round-2">
                        <img src="{{ asset('client/assets/images/icons/serv2_green.png') }}" alt="">
                     </span>
                  </div>
                  <h3 class="display-4">{{ _('Chamomile') }}</h3>
                  <p>{{ _('Premium Egyptian chamomile flowers with high volatile oil content, bright color and characteristic aroma. Harvested and dried under controlled conditions to meet the strict requirements of herbal tea and pharmaceutical markets.') }}</p>
                  <ul class="check mt-3">
                     <li>{{ _('High Volatile Oil') }}</li>
                     <li>{{ _('Uniform Flower Size') }}</li>
                     <li>{{ _('Low Moisture Content') }}</li>
                  </ul>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('Request a Quote') }}
                     </a>
                  </div>
               </div>
            </div>

            <!-- Anise Seeds -->
            <div class="col-lg-4 col-md-6">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".6">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148923181.jpg') }}'); background-size: cover; background-position: center; height: 220px;">
                     <span class="icon round-2">
                        <img src="{{ asset('client/assets/images/icons/serv3_green.png') }}" alt="">
                     </span>
                  </div>
                  <h3 class="display-4">{{ _('Anise Seeds') }}</h3>
                  <p>{{ _('Egyptian anise seeds known for their rich aroma and high anethole content. Carefully cleaned, sorted and dried to export-grade specifications for spice blenders, tea packers and food manufacturers worldwide.') }}</p>
                  <ul class="check mt-3">
                     <li>{{ _('High Anethole Content') }}</li>
                     <li>{{ _('Carefully Sorted') }}</li>
                     <li>{{ _('Export-Grade Quality') }}</li>
                  </ul>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('Request a Quote') }}
                     </a>
                  </div>
               </div>
            </div>

            <!-- Fenugreek -->
            <div class="col-lg-4 col-md-6">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".8">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/19103.jpg') }}'); background-size: cover; background-position: center; height: 220px;">
                     <span class="icon round-2">
                        <img src="{{ asset('client/assets/images/icons/serv4_green.png') }}" alt="">
                     </span>
                  </div>
                  <h3 class="display-4">{{ _('Fenugreek') }}</h3>
                  <p>{{ _('High-quality Egyptian fenugreek seeds with consistent size, colour and low impurity levels. Used by spice brands, health supplement producers and food manufacturers who require reliable, traceable supply from verified Egyptian farms.') }}</p>
                  <ul class="check mt-3">
                     <li>{{ _('Consistent Size & Colour') }}</li>
                     <li>{{ _('Low Impurity Level') }}</li>
                     <li>{{ _('Traceable Origin') }}</li>
                  </ul>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('Request a Quote') }}
                     </a>
                  </div>
               </div>
            </div>

            <!-- Coriander -->
            <div class="col-lg-4 col-md-6">
               <div class="service-card2 round bg-info fadeInUp" data-delay="1">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/19315.jpg') }}'); background-size: cover; background-position: center; height: 220px;">
                     <span class="icon round-2">
                        <img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt="">
                     </span>
                  </div>
                  <h3 class="display-4">{{ _('Coriander') }}</h3>
                  <p>{{ _('Egyptian coriander seeds prized for their balanced lemon-spice aroma and high oil yield. Supplied whole or split to spice blenders and food manufacturers who need a dependable, flavour-consistent source year-round.') }}</p>
                  <ul class="check mt-3">
                     <li>{{ _('High Oil Yield') }}</li>
                     <li>{{ _('Balanced Aroma Profile') }}</li>
                     <li>{{ _('Whole or Split Supply') }}</li>
                  </ul>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('Request a Quote') }}
                     </a>
                  </div>
               </div>
            </div>

            <!-- CTA Card -->
            <div class="col-lg-4 col-md-6 d-flex">
               <div class="bg-primary round p-4 d-flex flex-column justify-content-center w-100 fadeInUp" data-delay="1.2">
                  <h3 class="text-white display-4">{{ _('Need a Custom Order?') }}</h3>
                  <p class="text-white">{{ _('We work directly with importers, tea packers and spice brands. Contact us to discuss specifications, certifications, and volume pricing.') }}</p>
                  <a href="{{ route('client.contact') }}" class="btn btn-info mt-3">
                     {{ _('Get in Touch') }} <i class="fa fa-arrow-right"></i><span></span>
                  </a>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- Products Intro End -->

   <!-- Quality Stats Start -->
   <section class="stat-sec" style="background-image: url('{{ asset('client/assets/images/stat-bg.jpg') }}');">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="single-stat fadeInUp" data-delay=".2">
                  <img src="{{ asset('client/assets/images/stat1_green.png') }}" alt="Stat">
                  <div class="stat-info">
                     <h3 class="display-3 text-white">5+</h3>
                     <p>{{ _('Products in Our Range') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-stat fadeInUp" data-delay=".4">
                  <img src="{{ asset('client/assets/images/sta2_green.png') }}" alt="Stat">
                  <div class="stat-info">
                     <h3 class="display-3 text-white">100%</h3>
                     <p>{{ _('Natural & Traceable') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-stat fadeInUp" data-delay=".6">
                  <img src="{{ asset('client/assets/images/stat3_green.png') }}" alt="Stat">
                  <div class="stat-info">
                     <h3 class="display-3 text-white">50+</h3>
                     <p>{{ _('Export Markets') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-stat fadeInUp" data-delay=".8">
                  <img src="{{ asset('client/assets/images/stat4_green.png') }}" alt="Stat">
                  <div class="stat-info">
                     <h3 class="display-3 text-white">100%</h3>
                     <p>{{ _('Export-Grade Standards') }}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Quality Stats End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>
