@php
   $intro = $intro ?? null;
   $stats = $intro->additional_features ?? [
      ['title' => 'Years Of Excellence', 'counter' => 25, 'icon' => 'icons/time.svg', 'description' => 'Quality agricultural exports'],
      ['title' => 'Export Markets', 'counter' => 88, 'icon' => 'icons/location.svg', 'description' => 'Arab, European, and Asian markets'],
      ['title' => 'Product Varieties', 'counter' => 15, 'icon' => 'icons/employee.svg', 'description' => 'Fresh and frozen products'],
      ['title' => 'Tons Exported', 'counter' => 7500, 'icon' => 'icons/revenue.svg', 'description' => 'Premium produce annually'],
   ];
@endphp
<!-- About Section Start -->
<section class="about-details sec-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-thumb me-lg-4">
               <img class="img-fluid" src="{{ $intro?->getFirstMediaUrl('image_1') ?: asset('client/assets/images/6871.jpg') }}" alt="">
               <h2 class="display-2" data-cms-field="title">{{ _($intro->title ?? 'Premium Egyptian Agricultural Exports') }}</h2>
               <a href="{{ $intro->first_button_link ?? route('client.contact') }}" class="btn btn-primary" data-cms-field="first_button_text">{{ _($intro->first_button_text ?? 'Request a Quote!') }} <i class="fa fa-arrow-right"></i> <span></span>
               </a>
            </div>
         </div>
         <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="row gy-4 abs-info-wrap">
               @foreach($stats as $i => $stat)
               <div class="col-lg-6 col-sm-6">
                  <div class="abs-info">
                     <h3 class="display-5">{{ _($stat['title'] ?? '') }}</h3>
                     <div class="d-flex align-items-center justify-content-between border-bottom">
                        <img src="{{ asset('client/assets/images/' . ($stat['icon'] ?? 'icons/time.svg')) }}" alt="About">
                        <span class="purecounter display-1" data-purecounter-end="{{ $stat['counter'] ?? 0 }}">{{ $stat['counter'] ?? 0 }}</span>
                     </div>
                     <p>{{ _($stat['description'] ?? '') }}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Section End -->

