<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Css -->
  @include('include/head')
  <!-- end: Css -->
</head>
@guest
 <body id="mimin" class="dashboard form-signin-wrapper">
@else
<body id="mimin" class="dashboard">

      <!-- start: Header -->
      @include('include/nav')
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
          <!-- start:Left Menu -->
          @include('include/left_menu')  
          <!-- end: Left Menu -->
@endguest
          <!-- start: Content -->
          @yield('content')
          <!-- end: content -->

          <!-- start: right menu -->
          @include('include/right_menu') 
          <!-- end: right menu -->
      </div>

      <!-- start: Mobile -->
      @include('include/mobile')
      <!-- end: Mobile -->

<!-- start: Javascript -->
@include('include/scripts')
 @yield('scripts')
</body>
</html>