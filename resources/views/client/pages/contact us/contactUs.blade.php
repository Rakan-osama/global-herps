@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/nice-select.css') }}?v=1.0.1">
@endpush
@push('scripts')
<script src="{{ asset('client/assets/js/jquery.nice-select.min.js') }}?v=1.0.1"></script>
@endpush
<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.toast')
    @include('client.main.header')

    <main>

       @php
      $heroC = $sections['contact_page_hero'] ?? null;
      $formC = $sections['contact_page_form'] ?? null;
   @endphp
   <!-- Promo Section Start -->
   <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
      <img src="{{ $heroC?->getFirstMediaUrl('hero_background') ?: asset('client/assets/images/10475.jpg') }}" alt="" class="jarallax-img img-fluid" fetchpriority="high" decoding="async" width="1920" height="800">
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ __($heroC->title ?? 'Contact Us') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.homepage') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __($heroC->title ?? 'Contact Us') }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Promo Section End -->

   <!-- Contact Form Section Start -->
   <section class="contact-form-sec sec-padding">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="sec-intro text-center mb-5">
                  <span class="sub-title2 fadeInUp">{{ __($formC->subtitle ?? 'Get In Touch') }}</span>
                  <h2 class="">{{ __($formC->title ?? 'Contact Us') }}</h2>
                  <p>{{ __($formC->main_description ?? 'Interested in premium Egyptian agricultural products? Fill out the form below and our team will get back to you shortly.') }}</p>
               </div>
               <div class="contact-form-wrapper bg-white rounded-4 p-4 p-lg-5 shadow">
                  <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <div class="row gy-4">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="full_name">{{ __('Full Name') }} *</label>
                              <input type="text" id="full_name" name="full_name" class="form-control" placeholder="{{ __('Enter your full name') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">{{ __('Email Address') }} *</label>
                              <input type="email" id="email" name="email" class="form-control" placeholder="{{ __('Enter your email') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="phone">{{ __('Phone Number') }} *</label>
                              <input type="tel" id="phone" name="phone" class="form-control" placeholder="{{ __('Enter your phone number') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">{{ __('Country') }} *</label>
                              <input type="text" id="country" name="country" class="form-control" placeholder="{{ __('Enter your country') }}" required>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="product_interest">{{ __('Product Interest') }} *</label>
                              <select id="product_interest" name="service" class="form-control tv-select" required>
                                 <option value="">{{ __('Select a product category') }}</option>
                                 <option value="fresh_fruits">{{ __('Fresh Fruits') }}</option>
                                 <option value="fresh_vegetables">{{ __('Fresh Vegetables') }}</option>
                                 <option value="frozen_fruits">{{ __('Frozen Fruits') }}</option>
                                 <option value="frozen_vegetables">{{ __('Frozen Vegetables') }}</option>
                                 <option value="citrus">{{ __('Citrus Fruits') }}</option>
                                 <option value="other">{{ __('Other') }}</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="description">{{ __('Message') }} *</label>
                              <textarea id="description" name="description" class="form-control" rows="5" placeholder="{{ __('Describe your requirements...') }}" required></textarea>
                           </div>
                        </div>
                        <div class="col-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">{{ __('Send Message') }} <i class="fa fa-arrow-right"></i><span></span></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact Form Section End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>

