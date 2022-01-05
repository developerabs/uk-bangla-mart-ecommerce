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

    <script>
      var AIZ = AIZ || {};
      AIZ.local = {
          nothing_selected: '{{ translate('Nothing selected') }}',
          nothing_found: '{{ translate('Nothing found') }}',
          choose_file: '{{ translate('Choose file') }}',
          file_selected: '{{ translate('File selected') }}',
          files_selected: '{{ translate('Files selected') }}',
          add_more_files: '{{ translate('Add more files') }}',
          adding_more_files: '{{ translate('Adding more files') }}',
          drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
          browse: '{{ translate('Browse') }}',
          upload_complete: '{{ translate('Upload complete') }}',
          upload_paused: '{{ translate('Upload paused') }}',
          resume_upload: '{{ translate('Resume upload') }}',
          pause_upload: '{{ translate('Pause upload') }}',
          retry_upload: '{{ translate('Retry upload') }}',
          cancel_upload: '{{ translate('Cancel upload') }}',
          uploading: '{{ translate('Uploading') }}',
          processing: '{{ translate('Processing') }}',
          complete: '{{ translate('Complete') }}',
          file: '{{ translate('File') }}',
          files: '{{ translate('Files') }}',
      }
  </script>
  @if (get_setting('google_analytics') == 1)
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ env('TRACKING_ID') }}');
  </script>
@endif

@if (get_setting('facebook_pixel') == 1)
  <!-- Facebook Pixel Code -->
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
      fbq('track', 'PageView');
  </script>
  <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
@endif

@php
  echo get_setting('header_script');
@endphp


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