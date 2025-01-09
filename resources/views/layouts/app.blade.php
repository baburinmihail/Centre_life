<!doctype html>
<html lang="ru" data-bs-theme="auto">
    @include('layouts.head')
<body>
    @include('layouts.svg_symbol')
    @include('layouts.header')
<main>
    @yield('main')
</main>
    @include('layouts.footer')
    @include('layouts.script')
</body>
</html>