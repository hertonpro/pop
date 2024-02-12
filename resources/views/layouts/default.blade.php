<!doctype html>
<html>

@include('includes.head')

<body class="body_with_bg">
    <!-- Preloading -->
    <div class="preloader text-center">
        <div class="la-ball-scale-multiple la-2x">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloading -->
    <x-header  />
    @yield('content')
    @include('includes.footer')
    @include('includes.script')
</body>

</html>
