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
      <img src="{{ $heroC?->getFirstMediaUrl('hero_background') ?: asset('client/assets/images/10475.jpg') }}" alt="" class="jarallax-img img-fluid">
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ _($heroC->title ?? 'Contact Us') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.homepage') }}">{{ _('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ _($heroC->title ?? 'Contact Us') }}</li>
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
                  <span class="sub-title2 fadeInUp">{{ _($formC->subtitle ?? 'Get In Touch') }}</span>
                  <h2 class="">{{ _($formC->title ?? 'Contact Us') }}</h2>
                  <p>{{ _($formC->main_description ?? 'Interested in premium Egyptian agricultural products? Fill out the form below and our team will get back to you shortly.') }}</p>
               </div>
               <div class="contact-form-wrapper bg-white rounded-4 p-4 p-lg-5 shadow">
                  <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <div class="row gy-4">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="full_name">{{ _('Full Name') }} *</label>
                              <input type="text" id="full_name" name="full_name" class="form-control" placeholder="{{ _('Enter your full name') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">{{ _('Email Address') }} *</label>
                              <input type="email" id="email" name="email" class="form-control" placeholder="{{ _('Enter your email') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="phone">{{ _('Phone Number') }} *</label>
                              <input type="tel" id="phone" name="phone" class="form-control" placeholder="{{ _('Enter your phone number') }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">{{ _('Country') }} *</label>
                              <input type="text" id="country" name="country" class="form-control" placeholder="{{ _('Enter your country') }}" required>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="product_interest">{{ _('Product Interest') }} *</label>
                              <select id="product_interest" name="service" class="form-control tv-select" required>
                                 <option value="">{{ _('Select a product category') }}</option>
                                 <option value="fresh_fruits">{{ _('Fresh Fruits') }}</option>
                                 <option value="fresh_vegetables">{{ _('Fresh Vegetables') }}</option>
                                 <option value="frozen_fruits">{{ _('Frozen Fruits') }}</option>
                                 <option value="frozen_vegetables">{{ _('Frozen Vegetables') }}</option>
                                 <option value="citrus">{{ _('Citrus Fruits') }}</option>
                                 <option value="other">{{ _('Other') }}</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="description">{{ _('Message') }} *</label>
                              <textarea id="description" name="description" class="form-control" rows="5" placeholder="{{ _('Describe your requirements...') }}" required></textarea>
                           </div>
                        </div>
                        <div class="col-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">{{ _('Send Message') }} <i class="fa fa-arrow-right"></i><span></span></button>
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

