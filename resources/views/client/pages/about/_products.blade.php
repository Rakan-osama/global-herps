@php
   $prods = $prods ?? null;
   $productTabs = $prods->additional_features ?? [
      ['id' => 'air', 'nav_title' => 'Fresh Produce', 'nav_desc' => 'Premium quality fresh fruits and vegetables sourced from fertile Egyptian lands.', 'image' => 'tab-main1.webp', 'card_title' => 'Fresh Fruits', 'card_desc' => 'Premium quality fresh fruits prepared for export markets'],
      ['id' => 'byroad', 'nav_title' => 'Frozen Products', 'nav_desc' => 'Carefully processed frozen fruits and vegetables maintaining nutritional value.', 'image' => 'tab-main2.webp', 'card_title' => 'Fresh Fruits', 'card_desc' => 'Premium quality fresh fruits prepared for export markets'],
      ['id' => 'road', 'nav_title' => 'Citrus Fruits', 'nav_desc' => 'Egyptian citrus fruits known for exceptional taste and quality worldwide.', 'image' => 'tab-main3.webp', 'card_title' => 'Citrus Export', 'card_desc' => 'Premium Egyptian citrus for global markets'],
   ];
@endphp
<!-- Operation Section Start -->
<section class="operation-sec bg-dark position-relative sec-padding">
   <div class="operate-bg jarallax bg-cover position-absolute" data-speed=".8"
      style="background-image: url('{{ asset('client/assets/images/opt-bg.png') }}');"></div>
   <div class="container ct-container">
      <div class="row">
         <div class="col-lg-7 pe-lg-5">
            <span class="sub-title2 fadeInUp single" data-cms-field="subtitle">{{ __($prods->subtitle ?? 'Our Products') }}</span>
            <h2 class=" text-info" data-cms-field="title">
               {{ __($prods->title ?? 'Premium Egyptian Agricultural Products for Global Markets') }}</h2>
            <div class="ct-tab nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
               aria-orientation="vertical">
               @foreach($productTabs as $pi => $ptab)
               <div class="nav-item" role="presentation">
                  <div class="nav-link d-flex align-items-center justify-content-between {{ $pi === 0 ? 'active' : '' }}" id="{{ $ptab['id'] ?? 'ptab'.$pi }}-tab"
                     data-bs-toggle="tab" data-bs-target="#{{ $ptab['id'] ?? 'ptab'.$pi }}" type="button" role="tab" aria-controls="{{ $ptab['id'] ?? 'ptab'.$pi }}"
                     aria-selected="{{ $pi === 0 ? 'true' : 'false' }}">
                     <div class="th-info">
                        <h4 class="text-info">{{ __($ptab['nav_title'] ?? '') }}</h4>
                        <p class="text-info">{{ __($ptab['nav_desc'] ?? '') }}</p>
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
               <div class="tab-pane {{ $pi === 0 ? 'active' : '' }}" id="{{ $ptab['id'] ?? 'ptab'.$pi }}" role="tabpanel" aria-labelledby="{{ $ptab['id'] ?? 'ptab'.$pi }}-tab">
                  <div class="operation-content">
                     <div class="operation-thumb">
                        <img src="{{ asset('client/assets/images/' . ($ptab['image'] ?? 'tab-main1.webp')) }}" alt="tab">
                     </div>
                     <div class="opt-card bg-white  rounded-4">
                        <span><img src="{{ asset('client/assets/images/tab-icon_green.png') }}" alt=""></span>
                        <h5>{{ __($ptab['card_title'] ?? '') }}</h5>
                        <p>{{ __($ptab['card_desc'] ?? '') }}</p>
                        <a class="link-btn" href="{{ route('client.services') }}">{{ __('More Details') }} <i
                              class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Operation Section End -->

