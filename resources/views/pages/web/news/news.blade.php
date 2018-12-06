@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page fonttitle"><strong>{{trans('content.news')}}</strong></p>               
                <hr>
            </div>            
        </section>


        <section class="story">
            <div class="container">
                    <div class="story-box">
                        <div class="col-sm-7 mobiledisplay story-box-right">
                            <img src="{{asset('/asset/img/'.$ourstory->namefile)}}" class="img-story">
                        </div>
                        <div class="col-sm-5 story-box-left">
                            <p class=" fonttitle" style="color: #e4e41d">{{trans('content.ourstory')}}</p>
                            <div   class="readmoreabout" style="color: white"><p align="justify">{!! $abouts->desc !!}</p></div>
                            <a href="{{url('/about')}}" class="readmorelink">{{trans('content.readmore')}}</a>
                        </div>
                        <div class="col-sm-7 mobilehidden story-box-right">
                            <img src="{{asset('/asset/img/'.$ourstory->namefile)}}" class="img-story">
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
                            <a href="{{url('/news/'.$berita->id)}}">
                                <div class="product-box" style="overflow: hidden;">
                                    <div class="mobiles-news" style="overflow: hidden;">
                                        <img class="mobila" src="{{asset('/asset/img/'.$berita->images)}}" alt="news picture">
                                    </div>
                                    <div class="descproduct">
                                        <div class="descoverflow">
                                            <h4 class=" fonttitle">{{$berita->title}}</h4>
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
                <div class="center" >
                    <div class="pagination">
                        {{$news->links()}}           
                    </div><!--pagination-->
                </div> <!--center--> 
            </div>
        </section>
@endsection