@extends('layouts.layout')

@section('nav')
navbarabs @endsection

@section('contents') 
        <!-- Header -->
        <section class="heading">
        	<div id="slider1_container" class="heading-cover">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('assets/svg/loading/static-svg/spin.svg')}}" />
            </div>

            <!-- Slides Container -->
            <div u="slides" class="heading-slide fonttitle">
                <div>
                    <img data-u="image" src="{{asset('/asset/img/'.$slider1->namefile)}}" alt="content1"/>
                    <div class="title-slide"> 
                        <p><strong>{{$slider1->text}}</strong></p>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{asset('/asset/img/'.$slider2->namefile)}}" alt="content2"/>
                    <div class="title-slide"> 
                        <p><strong>{{$slider2->text}}</strong></p>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{asset('/asset/img/'.$slider3->namefile)}}" alt="content3"/>
                    <div class="title-slide"> 
                        <p><strong>{{$slider3->text}}</strong></p>
                    </div>
                </div>
            </div>
            <div data-u="navigator" class="jssorb031" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            
        </div>
        <!-- Jssor Slider End -->	
        </section>
        <!-- Header -->

        <section class="story">
            <div class="container">
                    <div class="story-box">
                        <div class="col-sm-7 mobiledisplay story-box-right">
                            <img src="{{asset('/asset/img/'.$ourstory->namefile)}}" class="img-story">
                        </div>
                        <div class="col-sm-5 story-box-left">
                            <p class="fonttitle" style="color: #e4e41d">{{trans('content.ourstory')}}</p>
                            <div   class="readmoreabout" style="color: white"><p align="justify">{!! $abouts->desc !!}</p></div>
                            <a href="{{url('/about')}}" class="readmorelink">{{trans('content.readmore')}}</a>
                        </div>
                        <div class="col-sm-7 mobilehidden story-box-right">
                            <img src="{{asset('/asset/img/'.$ourstory->namefile)}}" class="img-story">
                        </div>
                    </div>
            </div>            
        </section>

        <!-- featured -->
        <section class="featured">
        	<div class="container">
        		<div class="row">
        			<div class="box-wrapper">
        				<div class="col-sm-4 marginbottom">
        					<a href="{{url('/news')}}">
	        					<div class="featured-box">
                                    <div style="height: 200px; overflow: hidden;">
	        					        <img style="min-height: 200px;" src="{{asset('/asset/img/'.$highlight1->namefile)}}" alt="news picture">
                                    </div>
	        						<div class="title-box fonttitle"><h3>{{trans('content.news')}}</h3></div>
	        					</div>
        					</a>
        				</div>
        				<div class="col-sm-4 marginbottom">
        					<a href="{{url('/product')}}">
	        					<div class="featured-box">
	        						<div class="featured-box">
                                        <div style="height: 200px; overflow: hidden;">
		        						    <img style="min-height: 200px;" src="{{asset('/asset/img/'.$highlight2->namefile)}}" alt="product picture">
                                        </div>
		        						<div class="title-box fonttitle"><h3>{{trans('content.product')}}</h3></div>
		        					</div>
	        					</div>
        					</a>
        				</div>
        				<div class="col-sm-4 marginbottom">
        					<a href="{{url('/about')}}">
	        					<div class="featured-box">
	        						<div class="featured-box">
                                        <div style="height: 200px; overflow: hidden;">
		        						    <img style="min-height: 200px;" src="{{asset('/asset/img/'.$highlight3->namefile)}}" alt="about picture">
                                        </div>
		        						<div class="title-box fonttitle"><h3>{{trans('content.about')}}</h3></div>
		        					</div>
	        					</div>
	        				</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
@endsection