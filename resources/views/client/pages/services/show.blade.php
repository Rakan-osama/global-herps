@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/fancybox.css') }}?v=1.0.1">
@endpush
@push('scripts')
<script src="{{ asset('client/assets/js/fancybox.umd.js') }}?v=1.0.1"></script>
@endpush
<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>

    @include('client.main.header')

    <main>

   <!-- Promo Section Start -->
   <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
      @if($service->getFirstMediaUrl('cover'))
      <img src="{{ $service->getFirstMediaUrl('cover') }}" alt="{{ $service->title }}" class="jarallax-img" fetchpriority="high" decoding="async" width="1920" height="800">
      @else
      <img src="{{ asset('client/assets/images/2272.jpg') }}" alt="" class="jarallax-img" fetchpriority="high" decoding="async" width="1920" height="800">
      @endif
      <div class="parallax-overly"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap">
                  <h1 class="display-2 text-info">{{ __($service->title) }}</h1>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.homepage') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="{{ route('client.services') }}">{{ __('Services') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($service->title, 30) }}</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Promo Section End -->

   <!-- Service Detail Section Start -->
   <section class="sec-padding">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               @if($service->getFirstMediaUrl('cover'))
               <div class="mb-5">
                  <img src="{{ $service->getFirstMediaUrl('cover') }}" class="img-fluid rounded-4 w-100" alt="{{ $service->title }}" style="max-height:450px;object-fit:cover;">
               </div>
               @endif

               @if($service->subtitle)
               <p class="text-muted fs-5 mb-3">{{ __($service->subtitle) }}</p>
               @endif

               <h2 class="display-4 mb-4">{{ __($service->title) }}</h2>

               @if($service->main_description)
               <div class="mb-4">
                  <p class="fs-5">{{ __($service->main_description) }}</p>
               </div>
               @endif

               @if($service->sub_description)
               <div class="mb-4">
                  <p>{{ __($service->sub_description) }}</p>
               </div>
               @endif
            </div>
         </div>
      </div>
   </section>
   <!-- Service Detail Section End -->

   <!-- Gallery Section -->
   @include('client.components.gallery', ['item' => $service])

   <!-- Back to Services Section -->
   <section class="pb-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div class="pt-4 border-top">
                  <a href="{{ route('client.services') }}" class="btn btn-primary">
                     <i class="fa fa-arrow-left me-2"></i> {{ __('Back to Services') }}
                     <span></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>

