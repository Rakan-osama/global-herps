   <script src="{{ asset('client/assets/js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/lenis.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/jarallax.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/gsap.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/ScrollTrigger.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/SplitText.js') }}"></script>
   <script src="{{ asset('client/assets/js/fancybox.umd.js') }}"></script>
   <script src="{{ asset('client/assets/js/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/purecounter.js') }}"></script>
   <script src="{{ asset('client/assets/js/jquery.marquee.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/jquery.nice-select.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/jquery.timepicker.min.js') }}"></script>
   <script src="{{ asset('client/assets/js/bootstrap-datepicker.js') }}"></script>
   <script src="{{ asset('client/assets/js/custom.js') }}"></script>
   <script>
   document.addEventListener('DOMContentLoaded', function () {
       var tabs  = document.querySelectorAll('.prod-tab-btn');
       var grids = document.querySelectorAll('.prod-grid');
       if (!tabs.length) return;
       tabs.forEach(function (tab) {
           tab.addEventListener('click', function () {
               tabs.forEach(function (t) { t.classList.remove('active'); });
               this.classList.add('active');
               var cat = this.dataset.category;
               grids.forEach(function (grid) {
                   grid.id === 'grid-' + cat ? grid.classList.remove('d-none') : grid.classList.add('d-none');
               });
           });
       });
   });
   </script>
