@push('styles')
<link rel="preload" as="image" href="{{ asset('client/assets/images/herbs/1.webp') }}" type="image/webp" fetchpriority="high">
<link rel="stylesheet" href="{{ asset('client/assets/css/nice-select.css') }}?v=1.0.1">
@endpush
@push('scripts')
<script src="{{ asset('client/assets/js/jquery.nice-select.min.js') }}?v=1.0.1"></script>
@endpush
<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.toast')
    @include('client.main.header')

    <main>
        @include('client.pages.home.slider')
        @include('client.pages.home.about')
        @include('client.pages.home.services')
        {{-- @include('client.pages.home.brands') --}}
        @include('client.pages.home.process')
        @include('client.pages.home.chooseUs')
        @include('client.pages.home.transportation')
        @include('client.pages.home.tracking')
        @include('client.pages.home.testimonial')
    </main>

    @include('client.main.footer')
    @include('client.main.scripts')
</body>

</html>
