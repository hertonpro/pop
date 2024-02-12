<!doctype html>
<html lang="en">

@include('includes.admin.head')

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('images/admin/icon-light.svg') }}" width="48" height="48"
                    alt="HexaBit">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
        @include('includes.admin.header')
        <div id="main-content">
            @yield('content')
        </div>
        @include('includes.admin.footer')
        @include('includes.admin.script')
    </div>
</body>
</html>
