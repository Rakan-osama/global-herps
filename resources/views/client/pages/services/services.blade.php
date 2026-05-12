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
                  <h1 class="display-2 text-info">{{ _('Our Services') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('client.homepage') }}">{{ _('Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ _('Services') }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Services Grid Start -->
   <div class="services-sec bg-shade sec-padding">
      <div class="container">
         <div class="sec-intro mx-auto text-center mb-5">
            <span class="sub-title2 fadeInUp">{{ _('What We Do') }}</span>
            <h2>{{ _('End-to-End Herb Export Services') }}</h2>
            <p class="col-lg-8 mx-auto">{{ _('From sourcing on selected Egyptian farms to delivery at your warehouse, Global Herbs manages every step to ensure consistent, export-grade quality.') }}</p>
         </div>
         <div class="row gy-4">

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148923173.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Sourcing & Procurement') }}</h3>
                  <p>{{ _('We work directly with experienced Egyptian growers. Our agronomists visit farms before harvest to assess crop quality, ensuring only the best raw material enters our processing line.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".4">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148327823.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv2_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Drying & Processing') }}</h3>
                  <p>{{ _('Controlled drying at optimal temperature and airflow preserves essential oils, colour and aroma. We use modern drying technology tailored to each herb to protect its active character.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".6">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/2148923181.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv3_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Cleaning & Sorting') }}</h3>
                  <p>{{ _('Multi-step mechanical and manual cleaning removes stems, dust and foreign matter. Products are sieved, graded and finished to meet the specifications of each buyer.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay=".8">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/19103.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv4_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Packaging') }}</h3>
                  <p>{{ _('Export-grade packaging in cartons, sacks, or vacuum-sealed bags depending on product and destination. We accommodate private-label and custom packaging requirements.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay="1">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/Warehousing.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv1_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Quality Control') }}</h3>
                  <p>{{ _('Every batch is tested for moisture content, essential oil percentage, foreign matter, and microbial compliance before shipment. Full documentation and certificates provided on request.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4">
               <div class="service-card2 round bg-info fadeInUp" data-delay="1.2">
                  <div class="serv-thumb" style="background-image: url('{{ asset('client/assets/images/about-ft.jpg') }}'); background-size: cover; background-position: center;">
                     <span class="icon round-2"><img src="{{ asset('client/assets/images/icons/serv2_green.png') }}" alt=""></span>
                  </div>
                  <h3 class="display-4">{{ _('Export & Logistics') }}</h3>
                  <p>{{ _('We handle export documentation, phytosanitary certificates, and coordinate with freight partners for reliable delivery to European, Arab and Asian markets.') }}</p>
                  <div class="service-footer border-top">
                     <a class="custom-btn" href="{{ route('client.contact') }}"><span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>{{ _('Learn More') }}</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- Services Grid End -->

   <!-- Why Choose Section Start -->
   <section class="why-us3 sec-padding jarallax" data-jarallax data-speed=".4">
      <img src="{{ asset('client/assets/images/whu-us-bg.jpg') }}" class="jarallax-img" alt="">
      <img src="{{ asset('client/assets/images/slide-anim_green.png') }}" class="abs-img bottom-0" alt="">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="why-txt">
                  <div class="sec-intro">
                     <span class="sub-title fadeInUp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                           <path fill="#2ea140" d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                        </svg>
                        {{ _('Why Choose Us') }}</span>
                     <h2 class="text-white">{{ _('Why Choose Global Herbs') }}</h2>
                     <p>{{ _('Quality starts in the field and continues through every processing step until the product reaches the buyer. We offer complete traceability, consistent specifications, and reliable year-round supply.') }}</p>
                  </div>
                  <div class="success-stat">
                     <div class="progress">
                        <div class="meta">{{ _('Essential Oil Retention') }}</div>
                        <div class="progress-bar" data-progress="95%" style="width: 95%;"><span>95%</span></div>
                     </div>
                     <div class="progress">
                        <div class="meta">{{ _('Export Quality Standards') }}</div>
                        <div class="progress-bar" data-progress="100%" style="width: 100%;"><span>100%</span></div>
                     </div>
                     <div class="progress">
                        <div class="meta">{{ _('On-Time Delivery') }}</div>
                        <div class="progress-bar" data-progress="98%" style="width: 98%;"><span>98%</span></div>
                     </div>
                  </div>
                  <div class="quick-call d-flex align-items-center">
                     <span class="bg-info icon-lg rounded-circle text-primary"><i class="fa-solid fa-phone-volume"></i></span>
                     <div class="conn-txt ms-3">
                        <p class="m-0">{{ _('Call Us Any Time:') }}</p>
                        <a class="h6 text-info" href="tel:01012608815">01012608815</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="quote-form rounded-4 fadeInUp">
                  <h3>{{ _('Contact Us') }}</h3>
                  <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <div class="row gy-3">
                        <div class="col-lg-6 form-group">
                           <label>{{ _('Full Name') }} *</label>
                           <input name="full_name" type="text" class="form-control" placeholder="{{ _('Enter your full name') }}" required>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label>{{ _('Email Address') }} *</label>
                           <input name="email" type="email" class="form-control" placeholder="{{ _('Enter your email') }}" required>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label>{{ _('Phone Number') }} *</label>
                           <input name="phone" type="tel" class="form-control" placeholder="{{ _('Enter your phone number') }}" required>
                        </div>
                        <div class="col-lg-6 form-group">
                           <label>{{ _('Country') }} *</label>
                           <input name="country" type="text" class="form-control" placeholder="{{ _('Enter your country') }}" required>
                        </div>
                        <div class="col-lg-12 form-group">
                           <label>{{ _('Product Interest') }} *</label>
                           <select name="service" class="form-control tv-select" required>
                              <option value="">{{ _('Select a product') }}</option>
                              <option value="mint">{{ _('Egyptian Mint') }}</option>
                              <option value="chamomile">{{ _('Chamomile') }}</option>
                              <option value="anise">{{ _('Anise Seeds') }}</option>
                              <option value="fenugreek">{{ _('Fenugreek') }}</option>
                              <option value="coriander">{{ _('Coriander') }}</option>
                              <option value="other">{{ _('Other') }}</option>
                           </select>
                        </div>
                        <div class="col-lg-12 form-group">
                           <label>{{ _('Message') }} *</label>
                           <textarea name="description" class="form-control" rows="4" placeholder="{{ _('Describe your requirements...') }}" required></textarea>
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary">{{ _('Send Message') }} <i class="fa fa-arrow-right"></i><span></span></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Why Choose Section End -->

   <!-- FAQ Section Start -->
   <section class="faq-sec sec-padding position-relative">
      <div class="container">
         <div class="sec-intro mx-auto text-center">
            <span class="sub-title2 fadeInUp">{{ _('Frequently Asked Questions') }}</span>
            <h2>{{ _('Common Questions About Global Herbs') }}</h2>
         </div>
         @php
         $faqItems = [
            ['question' => 'What products does Global Herbs offer?',        'answer' => 'Global Herbs offers Egyptian Mint, Chamomile, Anise Seeds, Fenugreek and Coriander. All products are dried, cleaned and sorted to meet export specifications. We can discuss custom grades and packaging for your market.'],
            ['question' => 'Where does Global Herbs source its products?',  'answer' => 'We source from selected Egyptian farms chosen for their soil quality, water access and experienced growers. Egypt is one of the world\'s leading origins for herbs and spices, particularly mint and chamomile.'],
            ['question' => 'How does Global Herbs ensure product quality?', 'answer' => 'Every batch is tested for moisture, essential oil content, foreign matter and microbial compliance before shipment. We provide certificates of analysis, phytosanitary certificates and other documentation on request.'],
            ['question' => 'Which markets does Global Herbs export to?',    'answer' => 'We export to European, Arab and Asian markets. We work with importers, tea packers, spice brands and health supplement manufacturers who require reliable, traceable supply from Egypt.'],
            ['question' => 'What is the minimum order quantity?',           'answer' => 'Minimum order quantities vary by product. Contact us with your requirements and we will provide a quotation with available grades, packaging options and lead times.'],
         ];
         @endphp
         <div class="row gy-4">
            <div class="col-lg-7">
               <div class="faq-accordion rounded-4" id="tv-accordion">
                  @foreach($faqItems as $fi => $faqItem)
                  <div class="accordion-item {{ $fi === 0 ? 'active' : '' }}">
                     <h2 class="accordion-header" id="heading{{ $fi }}">
                        <button class="accordion-button display-5 {{ $fi > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapse{{ $fi }}" aria-expanded="{{ $fi === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $fi }}">
                           {{ _($faqItem['question']) }}
                        </button>
                     </h2>
                     <div id="collapse{{ $fi }}" class="accordion-collapse collapse {{ $fi === 0 ? 'show' : '' }}" data-bs-parent="#tv-accordion">
                        <div class="accordion-body">
                           <p>{{ _($faqItem['answer']) }}</p>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="col-lg-5">
               <div class="contact-form rounded-4 position-relative">
                  <h3 class="display-4">{{ _('Get in Touch') }}</h3>
                  <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <div class="form-group">
                        <label>{{ _('Full Name') }} *</label>
                        <input type="text" name="full_name" class="form-control" placeholder="{{ _('Enter your full name') }}" required>
                     </div>
                     <div class="form-group">
                        <label>{{ _('Email Address') }} *</label>
                        <input type="email" name="email" class="form-control" placeholder="{{ _('Enter your email') }}" required>
                     </div>
                     <div class="form-group">
                        <label>{{ _('Phone Number') }} *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="{{ _('Enter your phone number') }}" required>
                     </div>
                     <div class="form-group">
                        <label>{{ _('Country') }} *</label>
                        <input type="text" name="country" class="form-control" placeholder="{{ _('Enter your country') }}" required>
                     </div>
                     <div class="form-group">
                        <label>{{ _('Product Interest') }} *</label>
                        <select name="service" class="form-control" required>
                           <option value="">{{ _('Select a product') }}</option>
                           <option value="mint">{{ _('Egyptian Mint') }}</option>
                           <option value="chamomile">{{ _('Chamomile') }}</option>
                           <option value="anise">{{ _('Anise Seeds') }}</option>
                           <option value="fenugreek">{{ _('Fenugreek') }}</option>
                           <option value="coriander">{{ _('Coriander') }}</option>
                           <option value="other">{{ _('Other') }}</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>{{ _('Message') }} *</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="{{ _('Describe your requirements...') }}" required></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg w-100 mt-2">{{ _('Send Message') }} <i class="fa fa-arrow-right"></i><span></span></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FAQ Section End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>
