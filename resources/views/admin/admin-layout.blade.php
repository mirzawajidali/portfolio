<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>
    {{-- Style --}}
    @yield('style')
</head>

<body>
    {{-- Sidbar --}}
    @include('admin.includes.sidebar')
    {{-- Header --}}
    @include('admin.includes.header')
    {{-- Mian --}}
    @yield('main')
    {{-- Script --}}
    @include('admin.includes.footer')
    @yield('script')
</body>

</html>
