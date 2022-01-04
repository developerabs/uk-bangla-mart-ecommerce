<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <!-- Bootstrap CSS v5.0.2 -->
    <link
      rel="stylesheet"
      href="{{ static_asset('frontend/assets/modules/bootstrap/css/bootstrap.min.css') }}"
    />

    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="{{ static_asset('frontend/assets/modules/fontawesome/css/fontawesome.min.css') }}"
    />

    <!-- Tiny Slider CSS -->
    <link rel="stylesheet" href="{{ static_asset('frontend/assets/modules/tiny-slider/tiny-slider.css') }}" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ static_asset('frontend/assets/css/style.min.css') }}" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="F1WYmtaL"></script>
  </head>
  <body>
    <div class="rw-website">
      <!-- Header Section / start -->
        @include('frontend.layouts.header')
      <!-- Header Section / end -->

      <!-- Main Content / start -->
      @yield('content')
      <!-- Main Content / end -->
@include('frontend.layouts.footer')



@yield('script')
@php
   echo get_setting('footer_script');
@endphp

</body>
</html>