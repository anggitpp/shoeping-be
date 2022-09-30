<a class="navbar-brand" href="#">
{{--    {{ config('app.name', 'Shoeping') }}--}}
</a>
{{--@auth--}}
    <a class="navbar-brand" href="{{ url('/users') }}">
        User
    </a>
    <a class="navbar-brand" href="{{ url('/brands') }}">
        Brand
    </a>
    <a class="navbar-brand" href="{{ url('/products') }}">
        Produk
    </a>
    <a class="navbar-brand" href="{{ url('/promos') }}">
        Promo
    </a>
    <a class="navbar-brand" href="{{ url('/payment-methods') }}">
        Payment Method
    </a>
    <a class="navbar-brand" href="{{ url('/transactions') }}">
        Transaction
    </a>
{{--@endauth--}}
