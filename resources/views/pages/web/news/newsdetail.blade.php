@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>NEWS / Lorem Ipsum</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="header-about mobilehide">
            <div class="header" style="background: url({{ asset('assets/content/bg4.jpg')}}) no-repeat top center;"></div>
        </section>

        <section class="header-about mobileshow">
            <div class="contaier">
                    <div class="gambarhead">
                        <img src="{{ asset('assets/content/bg4.jpg')}}" style="width: 100%; height: auto;" alt="">
                    </div>
            </div>
        </section>

        <section class="descabout">
            <div class="container">
                <div class="row">
                    <div class="description col-sm-12">
                        @foreach($news as $berita)
                        <h1 class="titlenews">{{$berita->title}}</h1>
                        <p>{!!$berita->desc!!}</p>
                        @endforeach
                    </div>
                </div>
            </div>          
        </section>
@endsection