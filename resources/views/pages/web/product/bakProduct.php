@extends('layouts.layout')

@section('nav')
navbarx @endsection

@section('contents')
       <section class="margintop marmin">
            <div class="container">
                <hr>
                <p class="title-page"><strong>PRODUCT</strong></p>               
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
                                            <li><a href="/family/public/product">CS Series</a></li>
                                            <li><a href="/family/public/product">FS Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="productbw">Baby Walker
                                        <ul class="productbw-ex">
                                            <li><a href="/family/public/product">FB - 1 Series</a></li>
                                            <li><a href="/family/public/product">FB - 2 Series</a></li>
                                            <li><a href="/family/public/product">FB - 3 Series</a></li>
                                            <li><a href="/family/public/product">FB - 5 Series</a></li>
                                            <li><a href="/family/public/product">FB - 7 Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="productbc">Bycycle
                                        <ul class="productbc-ex">
                                            <li><a href="/family/public/product">Family bike</a></li>     
                                        </ul>
                                    </li>     
                                    <li class="productroc">Ride On Car
                                        <ul class="productroc-ex">
                                            <li><a href="/family/public/product">FT Series</a></li>
                                        </ul>
                                    </li>     
                                    <li class="producttrc">Tricycle
                                        <ul class="producttrc-ex">
                                            @foreach($tricycle as $rodatiga)
                                                <li><a href="/family/public/category/{{$rodatiga->id}}">{{$rodatiga->category_subproduct_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>                          
                                </ul>
                                <script></script>
                            </div>
                            <div class="col-sm-9 col-md-10">
                                <div class="row">
                                    <div class="box-wrapper">

                                        @foreach($product_detail as $detail)
                                        <div class="col-sm-4 col-md-3 product">
                                            <a href="/family/public/product/{{$detail->id}}">
                                                <div class="product-box" style="overflow: hidden;">
                                                    <div class="mobiles" style="overflow: hidden;">
                                                        <img src="asset/img/{{$detail->image1}}">
                                                    </div>
                                                    <div class="descproducts">
                                                        <h4>{{$detail->name_product}}</h4>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> 
                                        @endforeach 

                                    </div>
                                </div>
                                <div class="center" >
                                      <div class="pagination">
                                        <a href="/family/public/product">&laquo;</a>
                                        <a href="/family/public/product">1</a>
                                        <a href="/family/public/product" class="active">2</a>            
                                        <a href="/family/public/product">3</a>            
                                        <a href="/family/public/product">4</a>           
                                        <a href="/family/public/product" class="hidenpagination" >5</a>           
                                        <a href="/family/public/product" class="hidenpagination" >6</a>
                                        <a href="/family/public/product">&raquo;</a>            
                                      </div><!--pagination-->
                                    </div> <!--center--> 
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
                                <p><a href="/family/public/product">F1 Series</a></p>
                                <p><a href="/family/public/product">F5 Series</a></p>
                                <p><a href="/family/public/product">F7 Series</a></p>
                                <p><a href="/family/public/product">F8 Series</a></p>
                                <p><a href="/family/public/product">F9 Series</a></p>

                                <p><strong>Bicycle</strong></p>
                                <p><a href="/family/public/product">Family bike</a></p>

                                <p><strong>Ride on Car</strong></p>
                                <p><a href="/family/public/product">FT Series</a></p>
                                
                            </div>
                            <div class="col-xs-6 allpro">
                                <p><strong>Baby Walker</strong></p>
                                <p><a href="/family/public/product">FB - 1 Series</a></p>
                                <p><a href="/family/public/product">FB - 2 Series</a></p>
                                <p><a href="/family/public/product">FB - 3 Series</a></p>
                                <p><a href="/family/public/product">FB - 5 Series</a></p>
                                <p><a href="/family/public/product">FB - 7 Series</a></p>

                                <p><strong>Baby Stroller</strong></p>
                                <p><a href="/family/public/product">CS Series</a></p>
                                <p><a href="/family/public/product">FS Series</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection