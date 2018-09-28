            <div class="container">
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
                <li class="dropdown ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong class="font16">{{trans('header.product')}}</strong><span class="caret"></span></a>
                  <div class="dropdown-menu">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="subproduct col-xs-6 text-center">
                                <a href="{{url('/product/main/6')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-ROC.png')}}"></a><br>
                                <a href="{{url('/product/main/3')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-TC.png')}}"></a><br>
                                <a href="{{url('/product/main/5')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BC.png')}}"></a><br>
                            </div>
                            <div class="subproduct col-xs-6 text-center">
                                <a href="{{url('/product/main/8')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BS.png')}}"></a><br>
                                <a href="{{url('/product/main/4')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BW.png')}}"></a><br>
                                <div class="pading-subproduct-a"><a class="sante" href="{{url('/product')}}"><strong class="font16">SEE ALL PRODUCT</strong></a></div>
                            </div>
                        </div>                        
                    </div>                      
                  </div>
                </li>               
                <li><a href="{{url('/about')}}"><strong class="font16">{{trans('header.about')}}</strong></a></li>
                <li><a href="{{url('/contact')}}"><strong class="font16">{{trans('header.contact')}}</strong></a></li>
                <li><a href="{{url('/cms/about')}}"><strong class="font16">{{trans('header.login')}}</strong></a></li>
                <li><a href="{{url('/english')}}"><strong class="font16">ENG</strong></a></li>
                <li><a href="{{url('/bahasa')}}"><strong class="font16">INA</strong></a></li>

              </ul>
            </div>
          </div><!-- /.container-fluid -->