<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Header --}}
    @include('auth.partials.header')

    {{-- Additional Style --}}
    @stack('style')
</head>

<body class="min-h-screen bg-[#F7F3FF]">

    <main class="min-h-screen flex items-center justify-center px-4 py-10">
        {{-- Main Content --}}
        @yield('content')
    </main>

    {{-- Script --}}
    @include('auth.partials.script')

    {{-- Additional Script --}}
    @stack('script')
</body>

</html>
