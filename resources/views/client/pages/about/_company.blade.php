@php
   $company = $company ?? null;
   $tabs = $company->additional_features ?? [
      ['tab_title' => 'Our Mission', 'id' => 'mission', 'image' => '2148173915.jpg', 'text_1' => 'Green Harvest is an Egyptian export company specialized in fresh and frozen agricultural products.', 'text_2' => 'We focus on connecting high-quality Egyptian produce with global markets.', 'summary' => "Green Harvest's mission is to supply safe, high-quality agricultural products that meet global market demands and strengthen trust in Egyptian produce."],
      ['tab_title' => 'Our Vision', 'id' => 'vission', 'image' => '2148923173.jpg', 'text_1' => 'Green Harvest aims to become a leading regional exporter of agricultural products.', 'text_2' => 'We strive for quality, sustainability, and global market expansion.', 'summary' => 'Becoming a leading regional exporter through quality, sustainability, and global market expansion.'],
      ['tab_title' => 'Our History', 'id' => 'history', 'image' => '98607.jpg', 'text_1' => 'Green Harvest sources its raw materials from fertile agricultural lands in Egypt, particularly the Nile Delta.', 'text_2' => 'Known for its rich soil and ideal climate, farms are carefully selected to ensure consistent quality.', 'summary' => 'Quality starts from the soil and continues through every stage until the product reaches the end consumer.'],
   ];
@endphp
<!-- About Section Start -->
<section class="about-sec3 sec-padding">
   <div class="container">
      <div class="row">
         <div class="col-xl-5 col-lg-7 mx-lg-auto">
            <div class="about-media3 position-relative">
               <div class="feat-img position-relative mb-5">
                  <img src="{{ $company?->getFirstMediaUrl('image_1') ?: asset('client/assets/images/19103.jpg') }}" class="img-fluid round"  alt="about">
                  <div class="experien-stat">
                     <p class="text-info m-0"> <span class="purecounter" data-purecounter-end="{{ $company->first_card_title ?? '25' }}"
                           data-purecounter-duration="0">{{ $company->first_card_title ?? '25' }}</span>+ {{ __($company->first_card_description ?? 'Years Experience') }}</p>
                  </div>
               </div>
               <div class="d-flex ab-sm-ft align-items-center gap-4">
               </div>
               <div class="ab-stat2">
               </div>
            </div>
         </div>
         <div class="col-xl-7">
            <div class="about-content3">
               <span class="sub-title fadeInUp">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                     <path fill="#2ea140"
                        d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                     <path fill="#2ea140"
                        d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                     <path fill="#2ea140"
                        d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                  </svg>
                  {{ __($company->subtitle ?? 'About Our Company') }}</span>
               <h2 class="" data-cms-field="title">{{ __($company->title ?? 'Premium Egyptian Agricultural Products') }}</h2>
               <p data-cms-field="main_description">{{ __($company->main_description ?? 'Green Harvest operates through an integrated system that includes cultivation, processing, packaging, and export operations adhering to the highest international standards of quality and food safety.') }}</p>

               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  @foreach($tabs as $ti => $tab)
                  <li class="nav-item" role="presentation">
                     <button class="nav-link {{ $ti === 0 ? 'active' : '' }}" id="{{ $tab['id'] ?? 'tab'.$ti }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $tab['id'] ?? 'tab'.$ti }}"
                        type="button" role="tab" aria-controls="{{ $tab['id'] ?? 'tab'.$ti }}" aria-selected="{{ $ti === 0 ? 'true' : 'false' }}">{{ __($tab['tab_title'] ?? '') }}</button>
                  </li>
                  @endforeach
               </ul>
               <div class="tab-content" id="myTabContent">
                  @foreach($tabs as $ti => $tab)
                  <div class="tab-pane fade {{ $ti === 0 ? 'show active' : '' }}" id="{{ $tab['id'] ?? 'tab'.$ti }}" role="tabpanel" aria-labelledby="{{ $tab['id'] ?? 'tab'.$ti }}-tab">
                     <div class="d-sm-flex gap-4 mb-3">
                        <div class="tab-img">
                           <img src="{{ asset('client/assets/images/' . ($tab['image'] ?? '2148173915.jpg')) }}" class="img-fluid rounded-4" alt="tab">
                        </div>
                        <div class="tab-txt">
                           <p>{{ __($tab['text_1'] ?? '') }}</p>
                           <p>{{ __($tab['text_2'] ?? '') }}</p>
                        </div>
                     </div>
                     <h6>{{ __($tab['summary'] ?? '') }}</h6>
                  </div>
                  @endforeach
               </div>
               <div class="d-sm-flex align-items-center about-cta gap-5 mt-5">
                  <a href="{{ $company->first_button_link ?? route('client.services') }}" class="btn btn-primary">{{ __($company->first_button_text ?? 'Our Services') }} <i
                        class="fa fa-arrow-right"></i><span></span> </a>

                  <div class="quick-call d-flex align-items-center">
                     <span class="bg-dark icon-lg rounded-circle text-info"><i
                           class="fa-solid fa-phone-volume"></i></span>
                     <div class="conn-txt ms-3">
                        <p class="m-0">{{ __($company->second_button_text ?? 'Call Us Any Time:') }}</p>
                        <a class="h6 text-primary" href="tel:{{ $company->second_button_link ?? '148359505285' }}">{{ $company->second_button_link ?? '148 359 505 285' }}</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Section End -->

