@php
   $team = $team ?? null;
   $teamMembers = $team->additional_features ?? [
      ['name' => 'Jenny Noah', 'role' => 'Quality Control Manager', 'image' => 'tm1.webp'],
      ['name' => 'Jenny Mache', 'role' => 'Quality Control Manager', 'image' => 'tm2.webp'],
      ['name' => 'Sofia Melisa', 'role' => 'Export Operations Director', 'image' => 'tm3.webp'],
      ['name' => 'Shane Darren', 'role' => 'Quality Control Manager', 'image' => 'tm4.webp'],
   ];
@endphp
<!-- Team Section Start -->
<section class="team-sec sec-padding position-relative">
   <img src="{{ asset('client/assets/images/slide-sh1.png') }}" alt="icon" class="abs-img d-none d-lg-block top-0 stat-0">
   <div class="container">
      <div class="sec-intro mx-auto text-center">
         <span class="sub-title2 fadeInUp" data-cms-field="subtitle">{{ __($team->subtitle ?? 'Our Team') }}</span>
         <h2 class="" data-cms-field="title">{{ __($team->title ?? 'Meet Our Agricultural Experts') }}</h2>
      </div>
      <div class="row gy-5">
         @foreach($teamMembers as $member)
         <div class="col-lg-3 col-sm-6">
            <div class="team-card">
               <div class="team-thumb round overflow-hidden">
                  <img src="{{ asset('client/assets/images/' . ($member['image'] ?? 'tm1.webp')) }}" alt="">
                  <div class="team-share">
                  </div>
               </div>
               <div class="team-info">
                  <h3 class="display-4 mb-0">{{ $member['name'] ?? '' }}</h3>
                  <span>{{ __($member['role'] ?? '') }}</span>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<!-- Team Section End -->

