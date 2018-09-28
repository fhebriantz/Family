@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>{{trans('content.news')}} / {{$news->title}}</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="header-about mobilehide">
            <div class="container">
                    <div class="gambarhead" style="height: 500px; overflow: hidden;">
                        <img src="{{asset('/assets/content/'.$news->images)}}" style="width: 100%; height: auto;" alt="">
                    </div>
            </div>
        </section>

        <section class="header-about mobileshow">
            <div class="container">
                    <div class="gambarhead">
                        <img src="{{asset('/assets/content/'.$news->images)}}" style="width: 100%; height: auto;" alt="">
                    </div>
            </div>
        </section>

        <section class="descabout">
            <div class="container">
                <div class="row">
                    <div class="description col-sm-12">
                        <h1 class="titlenews">{{$news->title}}</h1>
                        <p>{!!$news->desc!!}</p>
                    </div>
                </div>
            </div>          
        </section>
@endsection