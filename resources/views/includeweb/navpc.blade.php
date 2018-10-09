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

             
         <div id="navbar" class="navbar-collapse collapse" style="position: relative;">

            <!-- <div id="google_translate_element"></div>
            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }</script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

              <ul class=" center-nav nav navbar-nav navbar-right">
                <li class="active"><a href="{{url('/index')}}"><strong class="font16">{{trans('header.home')}}</strong></a></li>
                <li class="dropdown ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong class="font16">{{trans('header.product')}}</strong><span class="caret"></span></a>
                  <div class="dropdown-menu">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="subproduct col-xs-6 text-center">
                                <a href="{{url('/product/main/3')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-TC.png')}}"></a><br>
                                <a href="{{url('/product/main/5')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BC.png')}}"></a><br>
                                <a href="{{url('/product/main/6')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-ROC.png')}}"></a><br>
                            </div>
                            <div class="subproduct col-xs-6 text-center">
                                <a href="{{url('/product/main/4')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BW.png')}}"></a><br>
                                <a href="{{url('/product/main/8')}}" class="sante"><img  class="pading-subproduct" src="{{ asset('assets/img/Icon-BS.png')}}"></a><br>
                                <div class="pading-subproduct-a"><a class="sante" href="{{url('/product')}}"><strong class="font16">{{trans('content.seeall')}}</strong></a></div>
                            </div>
                        </div>                        
                    </div>                      
                  </div>
                </li>               
                <li><a href="{{url('/about')}}"><strong class="font16">{{trans('header.about')}}</strong></a></li>
                <li><a href="{{url('/contact')}}"><strong class="font16">{{trans('header.contact')}}</strong></a></li>

              </ul>
            </div>
             <div  class=" navbar-right" style=" background-color: #0db14b !important; padding: 2px 5px ;">
              <a href="{{url('/login_cms')}}" style="color: #ffd826; text-decoration: none;"><strong class="font16">{{trans('header.language')}}</strong></a>
              <a href="{{url('/english')}}"><img src="{{ asset('assets/img/eng.png')}}" style="height: 15px; width: 20px;" alt=""></a>
              <a href="{{url('/bahasa')}}"><img src="{{ asset('assets/img/ina.png')}}" style="height: 15px; width: 20px;" alt=""></a>
             </div>
          </div><!-- /.container-fluid -->