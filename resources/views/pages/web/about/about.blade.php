@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page fonttitle"><strong>{{trans('header.about')}}</strong></p>               
                <hr>
                
            </div>            
        </section>

        <section class="header-about mobilehide" style="margin-top: 30px;">
            <div class="contaier">
                    <div style="max-height: 800px; overflow: hidden;">
                        <img  src="{{asset('/asset/img/'.$highlight3->namefile)}}" style="width: 100%; height: auto;" alt="">
                    </div>
            </div>
        </section>

        <section class="header-about mobileshow">
            <div class="contaier">
                <div class="gambarhead">
                    <img src="{{asset('/asset/img/'.$highlight3->namefile)}}" style="width: 100%; height: auto;" alt="">
                </div>
            </div>
        </section>

        <section class="descabout">
            <div class="container">
                <div class="row">
                    <div class="description col-sm-12">
                        @foreach($abouts as $about)
                        <h1 class="titlenews fonttitle">{{$about->caption}}:</h1>
                        <p><strong>{{$about->title}}</strong></p>
                        <p>{!!$about->desc!!}</p>
                        @endforeach
                    </div>
                </div>
            </div>          
        </section>
@endsection