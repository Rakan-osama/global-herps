<!-- Contact Form Section Start -->
<section class="contact-form-sec sec-padding bg-light">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="sec-intro text-center mb-5">
               <span class="sub-title2 fadeInUp">{{ __('Get In Touch') }}</span>
               <h2>{{ __('Request a Quote or Sample') }}</h2>
               <p>{{ __('Interested in premium Egyptian herbs, spices and seeds? Fill out the form below and our team will get back to you shortly.') }}</p>
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
                           <label for="ht_full_name">{{ __('Full Name') }} *</label>
                           <input type="text" id="ht_full_name" name="full_name" class="form-control" placeholder="{{ __('Enter your full name') }}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="ht_email">{{ __('Email Address') }} *</label>
                           <input type="email" id="ht_email" name="email" class="form-control" placeholder="{{ __('Enter your email') }}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="ht_phone">{{ __('Phone Number') }} *</label>
                           <input type="tel" id="ht_phone" name="phone" class="form-control" placeholder="{{ __('Enter your phone number') }}" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="ht_country">{{ __('Country') }} *</label>
                           <input type="text" id="ht_country" name="country" class="form-control" placeholder="{{ __('Enter your country') }}" required>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="ht_service">{{ __('Product Interest') }} *</label>
                           <select id="ht_service" name="service" class="form-control tv-select" required>
                              <option value="">{{ __('Select a product category') }}</option>
                              <option value="mint">{{ __('Egyptian Mint') }}</option>
                              <option value="chamomile">{{ __('Chamomile') }}</option>
                              <option value="anise">{{ __('Anise Seeds') }}</option>
                              <option value="fenugreek">{{ __('Fenugreek') }}</option>
                              <option value="coriander">{{ __('Coriander') }}</option>
                              <option value="other">{{ __('Other') }}</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="ht_description">{{ __('Message') }} *</label>
                           <textarea id="ht_description" name="description" class="form-control" rows="5" placeholder="{{ __('Describe your requirements...') }}" required></textarea>
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
