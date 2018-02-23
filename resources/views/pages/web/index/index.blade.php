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
            <div u="slides" class="heading-slide">
                <div>
                    <img data-u="image" src="{{ asset('assets/content/bg1.jpg')}}" alt="content1"/>
                    <div class="title-slide"> 
                        <p>SEPEDA FAMILY <strong>We make kids SMILE, like it should be</strong></p>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/content/bg2.jpg')}}" alt="content2"/>
                    <div class="title-slide"> 
                        <p>SEPEDA FAMILY <strong>Direct Connections to you</strong></p>
                    </div>
                </div>
                <div>
                    <img data-u="image" src="{{ asset('assets/content/bg3.jpg')}}" alt="content3"/>
                    <div class="title-slide"> 
                        <p>SEPEDA FAMILY <strong>We treat our customer, just like WE ARE FAMILY</strong></p>
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
                            <img src="{{ asset('assets/content/content1.jpg')}}" class="img-story">
                        </div>
                        <div class="col-sm-5 story-box-left">
                            <p style="color: #e4e41d">Our Story</p>
                            <div   class="readmoreabout" style="color: white"><p class="sadsa">PT. Jakarta Tunggal Citra is one of the world’s leading Tricycles and Babywalkers manufacturers. We design, create, build and customize our products, to satisfy a range of customers’ requirements. From the high-end market of Los Angeles City, to the small town of Banten, in Indonesia. We do business directly to the customer one at a time and believe, that we do it better than anyone on the planet.</p></div>
                            <a href="/family/public/about" class="readmorelink">...Read More</a>
                        </div>
                        <div class="col-sm-7 mobilehidden story-box-right">
                            <img src="{{ asset('assets/content/content1.jpg')}}" class="img-story">
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
        					<a href="/family/public/news">
	        					<div class="featured-box">
	        						<img src="{{ asset('assets/content/content1.jpg')}}" alt="news picture">
	        						<div class="title-box"><h3>NEWS</h3></div>
	        					</div>
        					</a>
        				</div>
        				<div class="col-sm-4 marginbottom">
        					<a href="/family/public/product">
	        					<div class="featured-box">
	        						<div class="featured-box">
		        						<img src="{{ asset('assets/content/content2.jpg')}}" alt="product picture">
		        						<div class="title-box"><h3>PRODUCT</h3></div>
		        					</div>
	        					</div>
        					</a>
        				</div>
        				<div class="col-sm-4 marginbottom">
        					<a href="/family/public/about">
	        					<div class="featured-box">
	        						<div class="featured-box">
		        						<img src="{{ asset('assets/content/content3.jpg')}}" alt="about picture">
		        						<div class="title-box"><h3>ABOUT</h3></div>
		        					</div>
	        					</div>
	        				</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
@endsection