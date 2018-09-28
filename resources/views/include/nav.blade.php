        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="{{url('/cms/about')}}" class="navbar-brand"> 
                 <b>CMS FAMILY</b>
                </a>
           
               @guest
               @else
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name" style="margin-right: 0px"><span><a href="{{url('/')}}" target="_blank">View Web Family |</a></span></li>
                <li class="user-name"><span>{{ Auth::user()->name }}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{ asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="{{url('/cms/about')}}"><span class="fa fa-user"></span> My Profile</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href="{{ route('logout') }}"><span class="fa fa-power-off "></span> Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
              @endguest
            </div>
          </div>
        </nav>