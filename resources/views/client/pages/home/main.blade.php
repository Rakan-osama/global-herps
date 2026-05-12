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
