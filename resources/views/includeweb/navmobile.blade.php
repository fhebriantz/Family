<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{url('/index')}}">
      <img class="logo" src="{{ asset('assets/img/logo.png')}}" alt="Logo Family">
    </a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class=" center-nav nav navbar-nav navbar-right">
      <li class="active"><a href="{{url('/index')}}"><strong class="font16">{{trans('header.home')}}</strong></a></li> 
      <li><a href="{{url('/product')}}"><strong class="font16">{{trans('header.product')}}</strong></a></li>
      <li><a href="{{url('/about')}}"><strong class="font16">{{trans('header.about')}}</strong></a></li>
      <li><a href="{{url('/contact')}}"><strong class="font16">{{trans('header.contact')}}</strong></a></li>
    </ul>
  </div>
</div><!-- /.container-fluid -->