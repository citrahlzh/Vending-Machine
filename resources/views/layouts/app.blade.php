<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')

    @stack('style')
</head>
<body>
    @yield('content')

    @include('partials.script')

    @stack('script')
</body>
<footer>
    @include('partials.footer')
</footer>
</html>
