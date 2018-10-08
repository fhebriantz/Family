<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- start: Css -->
  @include('include/head')
  <!-- end: Css -->
  @yield('header')
</head>

 <body id="mimin" class="dashboard form-signin-wrapper">

          @yield('content')
          <!-- end: content -->

@include('include/scripts')
 @yield('scripts')
</body>
</html>