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
      <img src="{{ asset('client/assets/images/herbs/6.jpg') }}" alt="" class="jarallax-img img-fluid">
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ _('Contact Us') }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.homepage') }}">{{ _('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ _('Contact Us') }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Contact Info Section Start -->
   <section class="sec-padding bg-shade">
      <div class="container">
         <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
               <div class="bg-white rounded-4 p-4 text-center shadow-sm h-100">
                  <span class="icon-lg bg-primary rounded-circle text-white d-inline-flex align-items-center justify-content-center mb-3">
                     <i class="fa fa-phone"></i>
                  </span>
                  <h5 class="fw-bold">{{ _('Phone') }}</h5>
                  <p class="mb-1"><a href="tel:01012608815">01012608815</a></p>
                  <p><a href="tel:0111677765">0111677765</a></p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="bg-white rounded-4 p-4 text-center shadow-sm h-100">
                  <span class="icon-lg bg-primary rounded-circle text-white d-inline-flex align-items-center justify-content-center mb-3">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <h5 class="fw-bold">{{ _('Email') }}</h5>
                  <p class="mb-1"><a href="mailto:sales@worldherbs-eg.com">sales@worldherbs-eg.com</a></p>
                  <p><a href="mailto:info@worldherbs-eg.com">info@worldherbs-eg.com</a></p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="bg-white rounded-4 p-4 text-center shadow-sm h-100">
                  <span class="icon-lg bg-primary rounded-circle text-white d-inline-flex align-items-center justify-content-center mb-3">
                     <i class="fab fa-whatsapp"></i>
                  </span>
                  <h5 class="fw-bold">{{ _('WhatsApp') }}</h5>
                  <p><a href="https://wa.me/201012608815" target="_blank">+20 101 260 8815</a></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact Info Section End -->

   <!-- Contact Form Section Start -->
   <section class="contact-form-sec sec-padding">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="sec-intro text-center mb-5">
                  <span class="sub-title2 fadeInUp">{{ _('Get In Touch') }}</span>
                  <h2 class="">{{ _('Send Us a Message') }}</h2>
                  <p>{{ _('Interested in premium Egyptian herbs, spices and seeds? Fill out the form below and our team will get back to you shortly.') }}</p>
               </div>

               @if(session('success'))
               <div class="alert alert-success rounded-4 mb-4">{{ session('success') }}</div>
               @endif

               <div class="contact-form-wrapper bg-white rounded-4 p-4 p-lg-5 shadow">
                  <form action="{{ route('contact.submit') }}" method="POST">
                     @csrf
                     <div class="row gy-4">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="full_name">{{ _('Full Name') }} *</label>
                              <input type="text" id="full_name" name="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="{{ _('Enter your full name') }}" value="{{ old('full_name') }}" required>
                              @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">{{ _('Email Address') }} *</label>
                              <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ _('Enter your email') }}" value="{{ old('email') }}" required>
                              @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="phone">{{ _('Phone Number') }} *</label>
                              <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ _('Enter your phone number') }}" value="{{ old('phone') }}" required>
                              @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="country">{{ _('Country') }} *</label>
                              <input type="text" id="country" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="{{ _('Enter your country') }}" value="{{ old('country') }}" required>
                              @error('country')<div class="invalid-feedback">{{ $message }}</div>@enderror
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="product_interest">{{ _('Product Interest') }} *</label>
                              <select id="product_interest" name="service" class="form-control tv-select @error('service') is-invalid @enderror" required>
                                 <option value="">{{ _('Select a product category') }}</option>
                                 <option value="mint"        {{ old('service') === 'mint'        ? 'selected' : '' }}>{{ _('Egyptian Mint') }}</option>
                                 <option value="chamomile"   {{ old('service') === 'chamomile'   ? 'selected' : '' }}>{{ _('Chamomile') }}</option>
                                 <option value="anise"       {{ old('service') === 'anise'       ? 'selected' : '' }}>{{ _('Anise Seeds') }}</option>
                                 <option value="fenugreek"   {{ old('service') === 'fenugreek'   ? 'selected' : '' }}>{{ _('Fenugreek') }}</option>
                                 <option value="coriander"   {{ old('service') === 'coriander'   ? 'selected' : '' }}>{{ _('Coriander') }}</option>
                                 <option value="other"       {{ old('service') === 'other'       ? 'selected' : '' }}>{{ _('Other') }}</option>
                              </select>
                              @error('service')<div class="invalid-feedback">{{ $message }}</div>@enderror
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="description">{{ _('Message') }} *</label>
                              <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="{{ _('Describe your requirements...') }}" required>{{ old('description') }}</textarea>
                              @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
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

