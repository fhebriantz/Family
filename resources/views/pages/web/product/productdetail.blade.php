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
                                    <div class="sp-loading"><img src="http://localhost/family/public/assets/images/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
                                    <div class="sp-wrap">
                                        <a href="http://localhost/family/public/asset/img/{{ $product_detail->image1 }}"><img src="http://localhost/family/public/asset/img/{{ $product_detail->image1 }}" alt=""></a>
                                        <a href="http://localhost/family/public/asset/img/{{ $product_detail->image2 }}"><img src="http://localhost/family/public/asset/img/{{ $product_detail->image2 }}" alt=""></a>
                                        <a href="http://localhost/family/public/asset/img/{{ $product_detail->image3 }}"><img src="http://localhost/family/public/asset/img/{{ $product_detail->image3 }}" alt=""></a>
                                        <a href="http://localhost/family/public/asset/img/{{ $product_detail->image4 }}"><img src="http://localhost/family/public/asset/img/{{ $product_detail->image4 }}" alt=""></a>
                                    </div>
                                </div>
     
                            </div>
                            <div class="detailproduct col-sm-4 col-xs-12">
                                <h3>{{ $product_detail->name_product }}</h3>
                                <p><strong>Price: </strong>Rp. {{ $product_detail->price }}<br>
                                <strong>Frame: </strong>{{ $product_detail->frame }}<br>
                                <strong>Fork: </strong>{{ $product_detail->fork }}<br>
                                <strong>Brakes Rear: </strong>{{ $product_detail->brakes_rear }}<br>
                                <strong>Brake Levers: </strong>{{ $product_detail->brakes_levers }}<br>
                                <strong>Pedals: </strong>{{ $product_detail->pedals }}<br>
                                <strong>Crankset: </strong>{{ $product_detail->crankset }}<br>
                                <strong>Bottom Bracket: </strong>{{ $product_detail->bottom_bracket }}<br>
                                <strong>Chain: </strong>{{ $product_detail->chain }}<br>
                                <strong>Cassete: </strong></strong>{{ $product_detail->cassete }}<br>
                                <strong>Rim: </strong>{{ $product_detail->rim }}<br>
                                <strong>Saddle: </strong>{{ $product_detail->saddle }}<br>
                                <strong>Seatpost: </strong>{{ $product_detail->seatpot }}<br>
                                <strong>Stem: </strong>{{ $product_detail->stem }}<br>
                                <strong>Handlebar: </strong>{{ $product_detail->handlebar }}<br>
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