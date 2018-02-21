@extends('layouts.cmsnew')

@section('content')

<div class="container">

        <form class="form-signin" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">CMS</h1>
                  <p class="atomic-mass">FAMILY</p>
                  <p class="element-name">Made In Indonesia</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" class="form-text" name="email" required placeholder="Email">
                    <span class="bar"></span>
                    <label></label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" required placeholder="Password">
                    <span class="bar"></span>
                    <label></label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" class="btn  col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="{{ route('password.request') }}">Forgot Password </a>
                </div>
          </div>
        </form>

      </div>

@endsection