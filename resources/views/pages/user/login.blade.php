@extends('layouts.cmslogin')

@section('content')

<div class="container">

        <form class="form-signin" method="POST" action="{{ url('login_cms')}}">
          {{ csrf_field() }}
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">CMS</h1>
                  <p class="atomic-mass">FAMILY</p>
                  <p class="element-name">Made In Indonesia</p>

                  <i class="icons icon-arrow-down"></i>

                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-text" name="username" required placeholder="username">
                    <span class="bar"></span>
                    <label></label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" required placeholder="Password">
                    <span class="bar"></span>
                    <p style="padding-top: 10px; color: #fff"><strong>{{session()->get('message')}}</strong></p>
                  </div>
                  <input type="submit" name="login" class="btn col-md-12" value="LOGIN"/>
              </div>
          </div>
        </form>

      </div>

@endsection