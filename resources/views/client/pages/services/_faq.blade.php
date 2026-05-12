@php
   $faq = $faq ?? null;
   $faqItems = $faq->additional_features ?? [
      ['question' => 'What products does Green Harvest offer?', 'answer' => 'Green Harvest offers a wide range of agricultural products including fresh fruits, fresh vegetables, frozen fruits, frozen vegetables, and citrus fruits. All products are prepared according to the export specifications of each target market.'],
      ['question' => 'Where does Green Harvest source its products?', 'answer' => 'Green Harvest sources its raw materials from fertile agricultural lands in Egypt, particularly the Nile Delta, known for its rich soil and ideal climate. Farms are carefully selected to ensure consistent quality and sustainable production.'],
      ['question' => 'How does Green Harvest ensure product quality?', 'answer' => 'All products undergo strict inspection and quality control procedures at every stage of production to ensure compliance with food safety standards. Production processes are managed using modern technologies under the supervision of qualified technical and agricultural teams.'],
      ['question' => 'Which markets does Green Harvest export to?', 'answer' => 'Green Harvest exports its products to Arab, European, and Asian markets and continuously seeks to expand into new international markets while building strong international partnerships.'],
      ['question' => 'What is the production and export process?', 'answer' => 'Green Harvest products go through a complete operational process including cultivation and monitoring, selection and sorting, washing and processing, cooling or freezing, packaging, storage and shipment to preserve quality and nutritional value.'],
   ];
@endphp
<!-- FAQ Section Start -->
<section class="faq-sec sec-padding position-relative">
   <div class="container">
      <div class="sec-intro mx-auto text-center">
         <span class="sub-title2 fadeInUp" data-cms-field="subtitle">{{ _($faq->subtitle ?? 'Frequently Asked Questions') }}</span>
         <h2 class="" data-cms-field="title">{{ _($faq->title ?? 'Common Questions About Green Harvest') }}</h2>
      </div>
      <div class="row gy-4">
         <div class="col-lg-7">
            <div class="faq-accordion rounded-4" id="tv-accordion">
               @foreach($faqItems as $fi => $faqItem)
               <div class="accordion-item {{ $fi === 0 ? 'active' : '' }}">
                  <h2 class="accordion-header" id="heading{{ $fi }}">
                     <button class="accordion-button display-5 {{ $fi > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $fi }}" aria-expanded="{{ $fi === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $fi }}">
                        {{ _($faqItem['question'] ?? '') }}
                     </button>
                  </h2>
                  <div id="collapse{{ $fi }}" class="accordion-collapse collapse {{ $fi === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $fi }}"
                     data-bs-parent="#tv-accordion">
                     <div class="accordion-body">
                        <p>{{ _($faqItem['answer'] ?? '') }}</p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- FAQ Section End -->

