@php $heroC = $heroC ?? null; @endphp
<!-- Promo Section Start -->
<section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
   <img src="{{ $heroC?->getFirstMediaUrl('hero_background') ?: asset('client/assets/images/41361.webp') }}" alt="" class="jarallax-img">
   <div class="parallax-overly"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="promo-wrap">
               <h1 class="display-2 text-info" data-cms-field="title">{{ __($heroC->title ?? 'Contact Us') }}</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('client.homepage') }}">{{ __('Home') }}</a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __($heroC->title ?? 'Contact') }}</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Promo Section End -->

