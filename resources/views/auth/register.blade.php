@extends('layouts.cmsnew')

@section('content')
<div class="container">

        <form class="form-signin" method="POST" action="{{ route('register') }}"> 
          {{ csrf_field() }}
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">CMS</h1>
                  <p class="atomic-mass">FAMILY</p>
                  <p class="element-name">Made In Indonesia</p>

                  <i class="icons icon-arrow-down"></i>
                            <div class="form-group form-animate-text">
                                <input id="name" type="text" class="form-text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="form-group form-animate-text">
                                <input id="email" type="email" class="form-text" name="email" value="{{ old('email') }}" required placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="form-group form-animate-text">
                                <input id="password" type="password" class="form-text" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="form-group form-animate-text">
                                <input id="password-confirm" type="password" class="form-text" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn col-md-12">
                                    Register
                                </button>
                            </div>
                        </div>   
                    </div>
            </form>

                        <div class="text-center" style="padding:5px; ">
                            <a href="/family/public/login" style="margin-top: 30px;">Already have an account?</a>
                        </div>
        </div>
  @endsection