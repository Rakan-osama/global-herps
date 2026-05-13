  <!-- Canvas Menu Start -->
  <div class="canvas-menu d-flex flex-column">
      <div class="d-flex justify-content-between w-100 mb-4">
         <!-- Logo Here -->
         <div class="logo">
            @if(!empty($site['settings']['company_logo']))
               <img src="{{ asset('storage/' . $site['settings']['company_logo']) }}" alt="{{ _('Logo') }}" style="width: 150px; height: 50px">
            @else
               <img src="{{ asset('client/assets/images/green-logo1.jpeg') }}" alt="{{ _('Logo') }}" style="width: 150px; height: 50px">
            @endif
         </div>
         <!-- Close Button -->
         <button type="button" class="canvas-close" aria-label="{{ _('Close') }}">
            <svg width="33" height="34" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
         </button>
      </div>
      <p>{{ _('An Egyptian company dedicated to herbs, spices and seeds — grown under our sun, processed with modern technology, and shipped to partners who expect consistent export quality.') }}</p>
      <!-- Vertical Menu Start-->

      <div class="mt-3">
        <h5>{{ _('Quick Links') }}</h5>
         <nav class="mt-4">
            <ul class="vertical-menu">
              @foreach($site['header_nav_links'] ?? [] as $navLink)
                 <li><a href="{{ $navLink['url'] }}">{{ _($navLink['label']) }}</a></li>
              @endforeach
            </ul>
         </nav>
      </div>

      <!-- social icons -->
      <div class="social-share null mt-3">
         @foreach($site['social_links'] ?? [] as $social)
            <a href="{{ $social['url'] }}" target="_blank"><i class="{{ $social['icon'] }}"></i></a>
         @endforeach
      </div>
      <a href="{{ route('client.contact') }}" class="btn btn-primary mt-5"> {{ _('Contact Us') }} <i class="fa fa-arrow-right"></i><span></span></a>
   </div>
   <!-- Canvas Menu End -->

   <div class="search-popup offcanvas offcanvas-top" id="offcanvas-search" data-bs-scroll="true">
      <div class="container d-flex flex-row py-5 align-items-center position-relative">
         <button type="button" class="btn-close bg-primary rounded-5" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
         <div class="col-lg-9 mx-auto">
            <form class="search-form w-100 mb-5">
               <input id="search-form" type="text" class="form-control shadow-1"
                  placeholder="{{ _('Type keyword and hit enter') }}">
            </form>

         </div>
      </div>
   </div>
<!-- Header Start -->
<header class="header header-2">
  <div class="sticky-height"></div>
  <div class="header-wrapper">

    <!-- Header Top (unchanged) -->
    <div class="header-top">
      <div class="container ct-container">
        <div class="d-flex justify-content-between align-items-center">
          <div class="header-infos">
            <ul class="d-none d-xl-flex flex-wrap align-items-center gap-4">
              <!-- your top infos unchanged -->
              
            </ul>
          </div>

          <div class="header-cta d-flex align-items-center gap-3">
            <div class="social-share ms-4">
              @foreach($site['social_links'] ?? [] as $social)
                 <a href="{{ $social['url'] }}" target="_blank"><i class="{{ $social['icon'] }}"></i></a>
              @endforeach
            </div>
            {{-- Language Switcher --}}
            <div class="dropdown ms-3">
              <button class="btn btn-sm btn-outline-light dropdown-toggle text-white border-white" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 13px; padding: 4px 10px;">
                {{ strtoupper(app()->getLocale()) }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="min-width: auto;">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li>
                    <a class="dropdown-item {{ app()->getLocale() === $localeCode ? 'active' : '' }}"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ strtoupper($localeCode) }} - {{ $properties['native'] }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Menu Start -->
    <div class="header-nav-wrapper header-sticky">
      <nav class="navbar navbar-expand-xl">
        <div class="container ct-container">

          <!-- Brand -->
          <a href="{{ route('client.homepage') }}" class="navbar-brand">
            @if(!empty($site['settings']['company_logo']))
               <img src="{{ asset('storage/' . $site['settings']['company_logo']) }}"
                    alt="logo"
                    class="img-fluid ms-3"
                    style="height: 70px;">
            @else
               <img src="{{ asset('client/assets/images/green-logo1.jpeg') }}"
                    alt="logo"
                    class="img-fluid ms-3"
                    style="height: 90px;">
            @endif
          </a>

          <!-- Toggler: show on sm/md/lg only (hidden on xl+) -->
          <button class="navbar-toggler d-xl-none ms-auto"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasNavbar"
                  aria-controls="offcanvasNavbar"
                  aria-label="Toggle navigation">
            <i class="fa fa-bars text-black" style="font-size: 24px;"></i>
          </button>

          <!-- Contact button and Language Switcher: show on xl+ only -->
          <div class="nav-cta d-xl-flex order-xl-3 ms-3">
            <div class="d-flex align-items-center justify-content-between gap-3">
              <a href="{{ route('client.contact') }}" class="btn btn-primary btn-hover">
                {{ _('Contact Us') }} <i class="fa fa-arrow-right"></i>
                <span></span>
              </a>
            </div>
          </div>

          <!-- ✅ Offcanvas Menu (fixed: added id + tabindex + aria) -->
          <div class="offcanvas offcanvas-start offcanvas-nav"
               id="offcanvasNavbar"
               tabindex="-1"
               aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header">
              <a href="{{ route('client.homepage') }}" class="text-inverse" id="offcanvasNavbarLabel">
                @if(!empty($site['settings']['company_logo']))
                   <img src="{{ asset('storage/' . $site['settings']['company_logo']) }}" alt="Logo">
                @else
                   <img src="{{ asset('client/assets/images/green-logo1.jpeg') }}" alt="Logo">
                @endif
              </a>

              <button type="button"
                      class="btn-close bg-primary"
                      data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
            </div>

            <div class="offcanvas-body pt-0 align-items-center justify-content-between">

              <style>
                .nav-link-hover:hover {
                  color: #2ea140 !important;
                }
              </style>

              <ul class="navbar-nav mx-auto align-items-lg-center">
                @foreach($site['header_nav_links'] ?? [] as $navLink)
                   <li class="nav-item">
                     <a class="nav-link text-black fw-bold nav-link-hover"
                        href="{{ $navLink['url'] }}">{{ _($navLink['label']) }}</a>
                   </li>
                @endforeach
                
                {{-- Language Switcher in Mobile Menu --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-black fw-bold nav-link-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     {{ strtoupper(app()->getLocale()) }}
                  </a>
                  <ul class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li>
                        <a class="dropdown-item {{ app()->getLocale() === $localeCode ? 'active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ strtoupper($localeCode) }} - {{ $properties['native'] }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </li>
              </ul>

            </div>
          </div>

        </div>
      </nav>
    </div>
  </div>
</header>

