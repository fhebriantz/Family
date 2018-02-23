@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>PRODUCT / TRICYCLE / HARLEY</strong></p>               
                <hr>
            </div>            
        </section>

        <section class="butonproduct mobileshow">
            <div class="container">
                <div class="buttondrop">
                  <a name="allproduct" href="#allproduct" style="color: white"><button type="button" class="btn" style="width: 100%; background: #1e846e;">See All Product</button></a>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="bungkus col-sm-12">
                        <div class="row">
                            <div class="sidebar col-sm-3 col-md-2 mobilehide">
                                <p><strong>PRODUCT</strong></p>
                                <ul class="sidebarsub">
                                    <li class="productbs">Baby Series
                                        <ul class="productbs-ex">
                                            <li><a href="product.html">CS Series</a></li>
                                            <li><a href="product.html">FS Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="productbw">Baby Walker
                                        <ul class="productbw-ex">
                                            <li><a href="product.html">FB - 1 Series</a></li>
                                            <li><a href="product.html">FB - 2 Series</a></li>
                                            <li><a href="product.html">FB - 3 Series</a></li>
                                            <li><a href="product.html">FB - 5 Series</a></li>
                                            <li><a href="product.html">FB - 7 Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="productbc">Bycycle
                                        <ul class="productbc-ex">
                                            <li><a href="product.html">Family bike</a></li>     
                                        </ul>
                                    </li>     
                                    <li class="productroc">Ride On Car
                                        <ul class="productroc-ex">
                                            <li><a href="product.html">FT Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="producttrc">Tricycle
                                        <ul class="producttrc-ex">
                                            <li><a href="product.html">F1 Series</a></li>
                                            <li><a href="product.html">F5 Series</a></li>
                                            <li><a href="product.html">F7 Series</a></li>
                                            <li><a href="product.html">F8 Series</a></li>
                                            <li><a href="product.html">F9 Series</a></li>
                                        </ul>
                                    </li>                          
                                </ul>
                                <script></script>
                            </div>
                            <div class="thumbproduct col-sm-5 col-md-6 col-xs-12">
                                <div class="page">
                                    <div class="sp-loading"><img src="{{ asset('assets/images/sp-loading.gif')}}" alt=""><br>LOADING IMAGES</div>
                                    <div class="sp-wrap">
                                        <a href="{{ asset('assets/images/content2.jpg')}}"><img src="{{ asset('assets/images/content2.jpg')}}" alt=""></a>
                                        <a href="{{ asset('assets/images/content1.jpg')}}"><img src="{{ asset('assets/images/content1.jpg')}}" alt=""></a>
                                        <a href="{{ asset('assets/images/content2.jpg')}}"><img src="{{ asset('assets/images/content2.jpg')}}" alt=""></a>
                                        <a href="{{ asset('assets/images/content1.jpg')}}"><img src="{{ asset('assets/images/content1.jpg')}}" alt=""></a>
                                    </div>
                                </div>
     
                            </div>
                            <div class="detailproduct col-sm-4 col-xs-12">
                                <h3>Harley 10</h3>
                                <p><strong>Frame:</strong> Hiten Steel Kids Frame Front <br>
                                    <strong>Fork:</strong> Hiten Steel Kids Fork<br>
                                <strong>Brakes Rear:</strong> Steel Band Brake<br>
                                <strong>Brake Levers:</strong> PP Plastic<br>
                                <strong>Pedals:</strong> PP Plastic<br>
                                <strong>Crankset:</strong> Steel, 1/2"x1/8"x28T<br>
                                <strong>Bottom Bracket:</strong> Steel BB<br>
                                <strong>Chain:</strong> KMC-C410<br>
                                <strong>Cassete:</strong></strong> Steel, 1/2"x1/8"x16T<br>
                                <strong>Rim:</strong> Steel Rim w/ Steel Hub 16H and Stanless steel spoke<br>
                                <strong>Saddle:</strong> PVC Leather<br>
                                <strong>Seatpost:</strong> Steel<br>
                                <strong>Stem:</strong> Steel<br>
                                <strong>Handlebar:</strong> Steel CTB Handlebar<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileshow" style="margin-top: 20px;" id="allproduct" name="allproduct">
            <div class="container" style="background: #1e846e">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="titlepro" style="margin-bottom: 20px; margin-top: 20px; color: white;"><p><strong>All Product</strong></p></div>
                        <div class="row">
                            <div class="col-xs-6 allpro">
                                <p><strong>Tricycle</strong></p>
                                <p><a href="#">F1 Series</a></p>
                                <p><a href="#">F5 Series</a></p>
                                <p><a href="#">F7 Series</a></p>
                                <p><a href="#">F8 Series</a></p>
                                <p><a href="#">F9 Series</a></p>

                                <p><strong>Bicycle</strong></p>
                                <p><a href="#">Family bike</a></p>

                                <p><strong>Ride on Car</strong></p>
                                <p><a href="#">FT Series</a></p>
                                
                            </div>
                            <div class="col-xs-6 allpro">
                                <p><strong>Baby Walker</strong></p>
                                <p><a href="#">FB - 1 Series</a></p>
                                <p><a href="#">FB - 2 Series</a></p>
                                <p><a href="#">FB - 3 Series</a></p>
                                <p><a href="#">FB - 5 Series</a></p>
                                <p><a href="#">FB - 7 Series</a></p>

                                <p><strong>Baby Stroller</strong></p>
                                <p><a href="#">CS Series</a></p>
                                <p><a href="#">FS Series</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection