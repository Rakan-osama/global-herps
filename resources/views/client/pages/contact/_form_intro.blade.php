@php $formC = $formC ?? null; @endphp
<!-- Contact Form Intro Section Start -->
<section class="sec-padding">
   <div class="container">
      <div class="sec-intro mx-auto text-center mb-5">
         <span class="sub-title2 fadeInUp" data-cms-field="subtitle">{{ _($formC->subtitle ?? 'Get In Touch') }}</span>
         <h2 class="" data-cms-field="title">{{ _($formC->title ?? 'We\'d Love to Hear From You') }}</h2>
         @if($formC->main_description ?? false)
         <p data-cms-field="main_description">{{ _($formC->main_description) }}</p>
         @endif
      </div>
   </div>
</section>
<!-- Contact Form Intro Section End -->

