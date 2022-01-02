<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home - Retails Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    
    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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