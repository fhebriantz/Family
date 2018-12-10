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

  <div id="navbar" style="overflow: auto; height: 100%" class="navbar-collapse collapse">
    <ul class=" center-nav nav navbar-nav navbar-right fonttitle">
      <li class="active"><a href="{{url('/index')}}"><strong class="font16">{{trans('header.home')}}</strong></a></li> 
      <li><a href="{{url('/product')}}"><strong class="font16">{{trans('header.product')}}</strong></a></li>
      <li><a href="{{url('/about')}}"><strong class="font16">{{trans('header.about')}}</strong></a></li>
      <li><a href="{{url('/contact')}}"><strong class="font16">{{trans('header.contact')}}</strong></a>
      </li>
    </ul>
  </div> 
  
</div><!-- /.container-fluid -->
<!-- <div   style="float: right;">
              <a style="color: #ffd826; text-decoration: none;"><strong class="font16 fonttitle">{{trans('header.language')}}</strong></a>
              <a href="{{url('/../family_en')}}"><img src="{{ asset('assets/img/eng.png')}}" style="height: 15px; width: 20px;" alt=""></a>
              <a href="{{url('/../family')}}"><img src="{{ asset('assets/img/ina.png')}}" style="height: 15px; width: 20px;" alt=""></a>
             </div> -->
