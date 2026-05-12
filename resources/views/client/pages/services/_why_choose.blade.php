@php
   $whyS = $whyS ?? null;
   $whyPhone = $whyS->additional_features['phone'] ?? '+148 359 505 285';
   $progressBars = $whyS->additional_features['progress_bars'] ?? [
      ['label' => 'Quality Standards', 'value' => 90],
      ['label' => 'Customer Satisfaction', 'value' => 95],
      ['label' => 'On-Time Delivery', 'value' => 91],
   ];
@endphp
<!-- Why Choose Us Section Start -->
<section class="why-us3 sec-padding jarallax" data-jarallax data-speed=".4">
   <img src="{{ $whyS?->getFirstMediaUrl('hero_background') ?: asset('client/assets/images/whu-us-bg.jpg') }}" class="jarallax-img" alt="">
   <img src="{{ asset('client/assets/images/slide-anim_green.png') }}" class="abs-img bottom-0" alt="">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="why-txt">
               <div class="sec-intro">
                  <span class="sub-title fadeInUp">
                     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                        <path fill="#2ea140"
                           d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                        <path fill="#2ea140"
                           d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                        <path fill="#2ea140"
                           d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                     </svg>
                     {{ _($whyS->subtitle ?? 'Why Choose Us') }}</span>
                  <h2 class=" text-white" data-cms-field="title">{{ _($whyS->title ?? 'Why Choose Green Harvest') }}</h2>
                  <p data-cms-field="main_description">{{ _($whyS->main_description ?? 'Green Harvest believes that quality starts from the soil and continues through every stage until the product reaches the end consumer.') }}</p>
               </div>
               <div class="success-stat">
                  @foreach($progressBars as $bar)
                  <div class="progress">
                     <div class="meta">{{ _($bar['label'] ?? '') }}</div>
                     <div class="progress-bar" data-progress="{{ $bar['value'] ?? 0 }}%" style="width: {{ $bar['value'] ?? 0 }}%;">
                        <span>{{ $bar['value'] ?? 0 }}%</span>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="quick-call d-flex align-items-center">
                  <span class="bg-info icon-lg rounded-circle text-primary"><i
                        class="fa-solid fa-phone-volume"></i></span>
                  <div class="conn-txt ms-3">
                     <p class="m-0">{{ _($whyS->first_button_text ?? 'Call Us Any Time:') }}</p>
                     <a class="h6 text-info" href="tel:{{ preg_replace('/[^0-9+]/', '', $whyPhone) }}">{{ $whyPhone }}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Why Choose Us Section End -->

