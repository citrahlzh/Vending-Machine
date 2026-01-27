<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.partials.header')

    @stack('style')
</head>
<body>
    @yield('content')

    @include('landing.partials.script')

    @stack('script')
</body>
<footer>
    @include('landing.partials.footer')
</footer>
</html>
