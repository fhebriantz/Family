@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>NEWS</strong></p>               
                <hr>
            </div>            
        </section>


        <section class="story">
            <div class="container">
                    <div class="story-box">
                        <div class="col-sm-7 mobiledisplay story-box-right">
                            <img src="{{ asset('assets/content/content1.jpg')}}" class="img-story">
                        </div>
                        <div class="col-sm-5 story-box-left">
                            <p style="color: #e4e41d">Our Story</p>
                            <div   class="readmoreabout" style="color: white"><p>{!! $abouts->desc !!}</p></div>
                            <a href="/family/public/about" class="readmorelink">...Read More</a>
                        </div>
                        <div class="col-sm-7 mobilehidden story-box-right">
                            <img src="{{ asset('assets/content/content1.jpg')}}" class="img-story">
                        </div>
                    </div>
            </div>            
        </section>

        <!-- product -->
        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="box-wrapper">

                        @foreach($news as $berita)
                        <div class="col-sm-4 col-md-3 product">
                            <a href="/family/public/news/{{$berita->id}}">
                                <div class="product-box">
                                    <img src="http://localhost/family/public/assets/content/{{$berita->images}}" alt="news picture">
                                    <div class="descproduct">
                                        <div class="descoverflow">
                                            <h4>{{$berita->title}}</h4>
                                            <hr>
                                            <p>{!!$berita->desc!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
@endsection