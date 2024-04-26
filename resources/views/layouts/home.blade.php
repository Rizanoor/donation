<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- style link --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>
    {{-- {{ navbar }} --}}
    @include('includes.navbar')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script link --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</body>

</html>