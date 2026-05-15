<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.header')

    <main>

   <!-- Hero Section Start -->
   <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
      <img src="{{ asset('client/assets/images/herbs/6.jpg') }}" alt="" class="jarallax-img">
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ _('About Us') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('client.homepage') }}">{{ _('Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ _('About Us') }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Company Mission/Vision Section Start -->
   <section class="about-sec3 sec-padding">
      <div class="container">
         <div class="row">
            <div class="col-xl-5 col-lg-7 mx-lg-auto">
               <div class="about-media3 position-relative">
                  <div class="feat-img position-relative mb-5">
                     <img src="{{ asset('client/assets/images/herbs/7.jpg') }}" class="img-fluid round" alt="about">
                     <div class="experien-stat">
                        <p class="text-info m-0"><span class="purecounter" data-purecounter-end="10" data-purecounter-duration="0">10</span>+ {{ _('Years Experience') }}</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-7">
               <div class="about-content3">
                  <span class="sub-title fadeInUp">
                     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                        <path fill="#2ea140" d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                     </svg>
                     {{ _('About Our Company') }}</span>
                  <h2>{{ _('Dedicated to Quality Egyptian Herbs') }}</h2>
                  <p>{{ _('Global Herbs is an Egyptian company specialized in growing, processing and exporting premium mint, herbs, spices and seeds to international markets. We combine traditional agricultural know-how with modern processing technology to deliver consistent export-grade quality.') }}</p>

                  <ul class="nav nav-tabs" id="aboutTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true">{{ _('Our Mission') }}</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false">{{ _('Our Vision') }}</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="values-tab" data-bs-toggle="tab" data-bs-target="#values" type="button" role="tab" aria-selected="false">{{ _('Our Values') }}</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="aboutTabContent">
                     <div class="tab-pane fade show active" id="mission" role="tabpanel">
                        <div class="d-sm-flex gap-4 mb-3">
                           <div class="tab-img">
                              <img src="{{ asset('client/assets/images/herbs/1.jpg') }}" class="img-fluid rounded-4" alt="mission">
                           </div>
                           <div class="tab-txt">
                              <p>{{ _('To supply safe, high-quality Egyptian herbs, spices and seeds that consistently meet the specifications of international importers, tea packers and spice brands.') }}</p>
                              <p>{{ _('We focus on natural products grown under the Egyptian sun and processed with modern technology to preserve the character that makes them sought after worldwide.') }}</p>
                           </div>
                        </div>
                        <h6>{{ _('Consistent quality from field to shipment that is the Global Herbs promise.') }}</h6>
                     </div>
                     <div class="tab-pane fade" id="vision" role="tabpanel">
                        <div class="d-sm-flex gap-4 mb-3">
                           <div class="tab-img">
                              <img src="{{ asset('client/assets/images/herbs/2.jpg') }}" class="img-fluid rounded-4" alt="vision">
                           </div>
                           <div class="tab-txt">
                              <p>{{ _('To become the most trusted Egyptian exporter of premium herbs and spices, recognised globally for product integrity, reliable supply and long-term partnership.') }}</p>
                              <p>{{ _('We aim to expand our product range and market reach while staying true to values of quality, transparency and sustainability.') }}</p>
                           </div>
                        </div>
                        <h6>{{ _('A long-term partner for importers who expect consistent, export-grade results.') }}</h6>
                     </div>
                     <div class="tab-pane fade" id="values" role="tabpanel">
                        <div class="d-sm-flex gap-4 mb-3">
                           <div class="tab-img">
                              <img src="{{ asset('client/assets/images/herbs/3.jpg') }}" class="img-fluid rounded-4" alt="values">
                           </div>
                           <div class="tab-txt">
                              <p>{{ _('Quality starts in the field and continues through every processing step. We operate on values of excellence, transparency and commitment to specifications.') }}</p>
                              <p>{{ _('We respect our farmers, our clients, and our products. Every batch we ship carries the reputation of Egyptian herbs we take that seriously.') }}</p>
                           </div>
                        </div>
                        <h6>{{ _('Excellence, transparency, and long-term partnership the Global Herbs way.') }}</h6>
                     </div>
                  </div>

                  <div class="d-sm-flex align-items-center about-cta gap-5 mt-5">
                     <a href="{{ route('client.services') }}" class="btn btn-primary">{{ _('Our Services') }} <i class="fa fa-arrow-right"></i><span></span></a>
                     <div class="quick-call d-flex align-items-center">
                        <span class="bg-dark icon-lg rounded-circle text-info"><i class="fa-solid fa-phone-volume"></i></span>
                        <div class="conn-txt ms-3">
                           <p class="m-0">{{ _('Call Us Any Time:') }}</p>
                           <a class="h6 text-primary" href="tel:01012608815">01012608815</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Company Mission/Vision Section End -->

   <!-- Products Overview Section Start -->
   <section class="operation-sec bg-dark position-relative sec-padding">
      <div class="operate-bg jarallax bg-cover position-absolute" data-speed=".8"
         style="background-image: url('{{ asset('client/assets/images/opt-bg.png') }}');"></div>
      <div class="container ct-container">
         <div class="row">
            <div class="col-lg-7 pe-lg-5">
               <span class="sub-title2 fadeInUp single">{{ _('Our Products') }}</span>
               <h2 class="text-info">{{ _('Premium Egyptian Herbs, Spices & Seeds for Global Markets') }}</h2>
               @php
               $productTabs = [
                  ['id' => 'mint',      'nav_title' => 'Egyptian Mint',  'nav_desc' => 'High oil content, deep colour, low stem and dust the crop Global Herbs is built on.',      'image' => 'herbs/1.jpg', 'card_title' => 'Egyptian Mint',  'card_desc' => 'Field-selected mint from prime Egyptian regions, designed for premium tea and herbal infusion brands.'],
                  ['id' => 'chamomile', 'nav_title' => 'Chamomile',      'nav_desc' => 'High volatile oil, uniform flower size, low moisture for tea and pharmaceutical markets.', 'image' => 'herbs/2.jpg', 'card_title' => 'Chamomile',      'card_desc' => 'Harvested and dried under controlled conditions to meet the strict requirements of international buyers.'],
                  ['id' => 'seeds',     'nav_title' => 'Spices & Seeds', 'nav_desc' => 'Anise, Fenugreek, Coriander carefully sorted and cleaned for spice blenders worldwide.',  'image' => 'herbs/3.jpg', 'card_title' => 'Spices & Seeds', 'card_desc' => 'Export-grade anise seeds, fenugreek and coriander with consistent size, colour and low impurity levels.'],
               ];
               @endphp
               <div class="ct-tab nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach($productTabs as $pi => $ptab)
                  <div class="nav-item" role="presentation">
                     <div class="nav-link d-flex align-items-center justify-content-between {{ $pi === 0 ? 'active' : '' }}"
                        id="{{ $ptab['id'] }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $ptab['id'] }}"
                        type="button" role="tab" aria-controls="{{ $ptab['id'] }}" aria-selected="{{ $pi === 0 ? 'true' : 'false' }}">
                        <div class="th-info">
                           <h4 class="text-info">{{ _($ptab['nav_title']) }}</h4>
                           <p class="text-info">{{ _($ptab['nav_desc']) }}</p>
                        </div>
                        <span class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></span>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="col-lg-5">
               <div class="tab-content">
                  @foreach($productTabs as $pi => $ptab)
                  <div class="tab-pane {{ $pi === 0 ? 'active' : '' }}" id="{{ $ptab['id'] }}" role="tabpanel">
                     <div class="operation-content">
                        <div class="operation-thumb">
                           <img src="{{ asset('client/assets/images/' . $ptab['image']) }}" alt="tab">
                        </div>
                        {{-- <div class="opt-card bg-white rounded-4">
                           <span><img src="{{ asset('client/assets/images/tab-icon_green.png') }}" alt=""></span>
                           <h5>{{ _($ptab['card_title']) }}</h5>
                           <p>{{ _($ptab['card_desc']) }}</p>
                           <a class="link-btn" href="{{ route('client.products') }}">{{ _('View Products') }} <i class="fa fa-arrow-right"></i></a>
                        </div> --}}
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Products Overview Section End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>

